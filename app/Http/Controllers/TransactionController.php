<?php

namespace App\Http\Controllers;

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
                'total_amount' => 'numeric'
            ]
        );

        $validatedDetails = $request->validate(
            [
                'details.*.typeof_shoes' => 'required|string',
                'details.*.service_id' => 'required|numeric',
                'details.*.subtotal' => 'required|numeric',
                'details.*.img' => 'nullable',
                'details.*.notes' => 'nullable'
            ]
        );
        DB::beginTransaction();
        try {
            $transaction = new Transaction();

            $transaction->fill(['user_id' => 1, ...$validatedHeader]);
            $transaction->no_invoice = 'INV-' . strtoupper(Str::random(6));
            $transaction->save();

            foreach ($validatedDetails["details"] as $detail) {
                Transaction_detail::create(
                    [
                        'transaction_id' => $transaction->id,
                        'typeof_shoes' => $detail['typeof_shoes'],
                        'service_id' => $detail['service_id'],
                        'subtotal' => $detail['subtotal'],
                        'img' => $detail['img'] ?? null,
                        'notes' => $detail['notes'] ?? null
                    ]
                );
            }

            DB::commit();
            return response()->json(["message" => 'berhasil bos', "data" => ['no_invoice' => $transaction->no_invoice, 'created_at' => $transaction->created_at->format('d M Y')]]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(["message" => 'gagal bos']);
        }
    }

    public function history()
    {
        $transactions = Transaction::with('details', 'customers')->get();
        return view('admin.transactions.history', compact('transactions'));
    }

    public function show() {}
}
