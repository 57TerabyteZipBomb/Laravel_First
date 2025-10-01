<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//place where you return pages/views and stuff
class EvilController extends Controller
{
    public function index()
    {
        return view("homepage");
    }

    public function profile()
    {
        $data = [
            'nama' => 'Gerrard Yazdan Arkinara',
            'sekolah' => 'SMK Raden Umar Said',
            'kelas' => 'XI PPLG 1',
            'absen' => '15',
        ];

        //returns both the profile page and data, so when it loads the profile page can use the provided data
        //i think
        return view("profile", $data);
    }

    public function contacts()
    {
        return view("contacts");
    }

    //new shmuck

    public function homenew()
    {
        return view('homenew', ['title' => 'Home']);
    }


    public function profilenew()
    {
        return view("profile", [
            'nama' => 'Gerrard Yazdan Arkinara',
            'sekolah' => 'SMK Raden Umar Said',
            'kelas' => 'XI PPLG 1',
            'absen' => '15',
            'title' => "Profile"
        ]);
    }

    public function contactnew()
    {
        return view("contacts", ['title' => 'Contacts']);
    }

    public function students(){
        return view("student");
    }
}
