<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // pastikan file register.blade.php ada
    }

    public function handleRegister(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        // Simpan data atau proses lainnya
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect()->route('welcome')->with(['first_name' => $firstName, 'last_name' => $lastName]);
    }

    public function welcome()
    {
        return view('welcome'); // pastikan file welcome.blade.php ada
    }
}
