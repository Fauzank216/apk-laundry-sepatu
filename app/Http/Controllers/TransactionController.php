<?php

namespace App\Http\Controllers;

use App\Models\Order_Track;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.transactions.index', compact('services'));
    }

    public function store(Request $request)
    {
        $validatedHeader = $request->validate(
            [
                'customer_id' => 'required|numeric',
                'qty' => 'numeric',
                'total_amount' => 'numeric',
                'payment_method' => 'nullable',
                'amount_paid' => 'numeric|nullable'
            ]
        );

        $change_amount = $validatedHeader['total_amount'] - $validatedHeader['amount_paid'];

        $validatedDetails = $request->validate(
            [
                'details.*.typeof_shoes' => 'required|string',
                'details.*.service_id' => 'required|numeric',
                'details.*.price' => 'required|numeric',
                'details.*.img' => 'nullable',
                'details.*.notes' => 'nullable'
            ]
        );

        DB::beginTransaction();
        try {
            $transaction = new Transaction();
            $order_track = new Order_Track();

            $transaction->user_id = '1';
            $transaction->fill([...$validatedHeader]);

            if ($validatedHeader['amount_paid'] >= $validatedHeader['total_amount']) {
                $transaction->payment_status = 'paid';
                $transaction->change_amount = $change_amount;
            }


            $transaction->no_invoice = 'INV-' . date('Ymd') . strtoupper(Str::random(3));

            if ($request->input('order_type') != 'walk-in') {
                $transaction->booking_status = 'pending';
            }

            // dd($transaction->toArray());
            $transaction->save();
            foreach ($validatedDetails["details"] as $detail) {
                Transaction_detail::create(
                    [
                        'transaction_id' => $transaction->id,
                        'typeof_shoes' => $detail['typeof_shoes'],
                        'service_id' => $detail['service_id'],
                        'price' => $detail['price'],
                        'img' => $detail['img'] ?? null,
                        'notes' => $detail['notes'] ?? null
                    ]
                );
            }

            $order_track->transaction_id = $transaction->id;
            $order_track->progres = "Diterima";
            $order_track->status = "in_progress";

            $order_track->save();

            DB::commit();
            return response()->json(["message" => 'berhasil bos', "data" => ['no_invoice' => $transaction->no_invoice, 'created_at' => $transaction->created_at->format('d M Y')]]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json(["message" => 'gagal bos' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request, Transaction $transaction)
    {
        $progres = ['Diterima', 'Dicuci', 'Dikeringkan', 'Quality Check', 'Selesai', 'Diambil'];
        $nextTrack = new Order_Track();
        $lastTrack = Order_Track::where('transaction_id', $transaction->id)->latest('id')->first();
        $currentIndex = array_search($lastTrack->progres, $progres);

        if ($lastTrack->status == 'in_progress') {
            $lastTrack->status = 'completed';
            $lastTrack->exists = true;
            $lastTrack->save();
        }

        if ($currentIndex == count($progres) - 1) {
            return response()->json(['message' => 'Pencucian telah selesai']);
        }

        $nextTrack->transaction_id = $transaction->id;
        $nextTrack->status = 'in_progress';
        $nextTrack->progres = $progres[$currentIndex + 1];
        $nextTrack->save();

        return redirect()->back();
    }

    public function history()
    {
        $transactions = Transaction::with('details', 'customers')->paginate(5);
        // dd($transactions->toArray());
        return view('admin.transactions.history', compact('transactions'));
    }

    public function show(Request $request, Transaction $transaction)
    {
        $transaction = $transaction->load('customers', 'details.services', 'tracks');
        // dd($transaction->tracks()->where('status', 'done')->latest()->get()->toArray());
        return view('admin.transactions.detail', compact('transaction'));
    }
}

/*
    1. Invoice
    2. Identitas pelanggan
    3. Tanggal transaksi
    4. Detail transaksi, meliputi jenis sepatu, catatan, dan jumlah pasang sepatu
    5. Rincian biaya, meliputi tagihan, jumlah dibayar, sisa bayar dan metode pembayaran
    6. Rinican layanan dan biaya, meliputi Nama layanan, qty, harga satuan dan subtotal
    customer hasMany transaction hasMany details hasMany services
    {
    id: 10,
    invoice_number: "INV-20261004-001",

    customer: {
        id: 1,
        name: "Budi Santoso",
        phone: "0897887338",
        address: "Jl. Teratai..."
    },

    details: [
        {
            id: 8,
            typeof_shoes: "Nike Air Force",
            notes: "...",
            subtotal: 30000,

            service: {
                id: 2,
                name: "Cuci standar",
                price: 20000
            }
        }
    ],

    payment: {
        status: "paid",
        method: "qris",
        total: 40000
    },

    progress: [
        {
            status: "received",
            date: "..."
        },
        {
            status: "washing",
            date: "..."
        }
    ]
}

*/