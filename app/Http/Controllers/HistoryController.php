<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use BcMath\Number;
use Carbon\Month;

class HistoryController extends Controller
{
    function index()
    {
        $transactions = Transaction::with('details', 'customers')->paginate(5);
        return view('admin.transactions.history', compact('transactions'));
    }

    function getData(Request $request)
    {
        $query = Transaction::with('customers');

        if ($request->input('search')) {
            $query->where('no_invoice', 'LIKE', '%' . $request->input('search') . '%');
        }

        if ($request->input('year')) {
            $query->whereYear('created_at', $request->input('year'));
        }

        if ($request->input('month')) {
            $query->whereMonth('created_at', $request->input('month'));
        }

        $transactions = $query->get()->map(function ($item) {
            return [
                'transaction_id' => $item->id,
                'no_invoice' => $item->no_invoice,
                'customer' => $item->customers->name,
                'status' => 'lunas',
                'total' => 'Rp. ' . number_format($item->total_amount, 0, ',', '.'),
                'created_at' => $item->created_at->format('d M Y')
            ];
        });
        return response()->json(['message' => 'Data successfully retrieved.', 'data' => $transactions]);
    }
}