<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.layanan.index', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'price' => ['required', 'numeric'],
                'description' => 'nullable',
                'thumbnail' => 'nullable'
            ]
        );

        Service::create($validated);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'price' => ['required', 'numeric'],
                'description' => 'nullable',
                'thumbnail' => 'nullable'
            ]
        );
        $service->update($validated);
        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
