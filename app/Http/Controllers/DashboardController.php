<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;

use function Illuminate\Support\now;

class DashboardController extends Controller
{
    function index()
    {
        $now = now()->format('Y-m-d');
        $today_orders = Transaction::whereDate('created_at', $now)->count();
        $total_services = Service::with('details')->get();
        $total_customers = Customer::count();
        $total_saldo = 'Rp. ' . number_format(Transaction::SUM('total_amount'), 0, ',', '.');
        $last_orders = Transaction::with('details.services', 'customers')->latest()->limit(3)->get();
        return view('admin.dashboard', compact('today_orders', 'total_services', 'total_customers', 'total_saldo', 'last_orders'));
    }
}
