<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile", [
            'nama' => 'Gerrard Yazdan Arkinara',
            'sekolah' => 'SMK Raden Umar Said',
            'kelas' => 'XI PPLG 1',
            'absen' => '15',
            'title' => "Profile"
        ]);
    }
}
