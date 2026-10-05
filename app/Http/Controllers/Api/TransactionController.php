<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function findCustomer(Request $request)
    {

        $customer = Customer::where('no_telp', 'LIKE', "%0897%")->get();
        return response()->json($customer, 200);
    }

    public function storeTransaction(Request $request)
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
            $transaction = Transaction::create(
                [
                    'user_id' => 1,
                    ...$validatedHeader
                ]
            );

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
            return response()->json(["message" => 'berhasil bos']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(["message" => 'gagal bos']);
        }
    }
}