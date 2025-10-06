<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // Memproses form login
public function login(Request $request)
{
    // Validasi input dasar
    $request->validate([
        'username' => 'required',
        'password' => 'required|min:3',
    ], [
        'username.required' => 'Username wajib diisi.',
        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password minimal 3 karakter.',
    ]);

    $username = $request->username;
    $password = $request->password;

    // Cek apakah password mengandung huruf kapital
    if (!preg_match('/[A-Z]/', $password)) {
        return redirect()->back()->with('error', 'Password harus mengandung minimal satu huruf kapital.');
    }

    // Contoh rule login sederhana (tanpa database)
    if ($username === 'Admin' && $password === 'Admin123') {
        return redirect('/dashboard')->with('success', 'Login berhasil! Selamat datang di halaman dashboard.');
    } else {
        return redirect()->back()->with('error', 'Username atau password salah, silakan coba lagi.');
    }
}

}
