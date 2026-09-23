<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.pelanggan.index', compact('customers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'user_id' => 'nullable',
                'name' => 'required',
                'no_telp' => ['required', 'unique:customers,no_telp', 'numeric'],
                'address' => 'nullable'
            ]
        );

        Customer::create($validated);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate(
            [
                'user_id' => 'nullable',
                'name' => 'required',
                'no_telp' => ['required', 'unique:customers,no_telp,' . $customer->id, 'numeric'],
                'address' => 'nullable'
            ]
        );

        $customer->update($validated);
        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}