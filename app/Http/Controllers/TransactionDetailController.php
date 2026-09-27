<?php

namespace App\Http\Controllers;

use App\Models\Transaction_detail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index()
    {
        $transaction_details = Transaction_detail::all();
        return view('admin.transactions.history', compact('transaction_details'));
    }
}
