<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.transactions.index', compact('services'));
    }

    public function store(Request $request)
    {

        $jsonData = json_decode($request->input('orders'));
        dd($request->all());

        $validatedTransaction = $request->validate(
            [
                'customer_id' => 'required',
                'user_id' => 'required',
                'qty' => 'required',
                'total_amount' => 'required',
            ]
        );

        $validatedDetails = $request->validate(
            [
                '*.transaction_id' => 'required',
                '*.typeof_shoes' => 'nullable',
                '*.service_id' => 'required',
                '*.subtotal' => 'required',
                '*.img' => 'nullable',
                '*.notes' => 'nullable'
            ]
        );

        DB::beginTransaction();
        try {
            $transactions = Transaction::create($validatedTransaction);

            Transaction_detail::create([$transactions->id, ...$validatedDetails]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return redirect()->back()->with('success', 'Transaksi berhasil dilakukan');
    }

    public function history()
    {
        $transactions = Transaction::with('details')->get();
        return view('admin.transactions.history', compact('transactions'));
    }

    public function show() {}
}