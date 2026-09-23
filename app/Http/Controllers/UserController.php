<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.petugas.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validated =  $request->validate(
            [
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:5'],
                'role' => ['nullable']
            ]
        );

        User::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function update(User $user, Request $request)
    {
        $validated = $request->validate(
            [
                'email' => ['required', 'unique:users,email,' . $user->id],
                'role' => ['nullable']
            ]
        );

        $user->update($validated);
        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}