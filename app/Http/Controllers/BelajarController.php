<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function jurusan($jurusan)
    {
        return view('informatika', compact('jurusan'));
    }

    public function hello_world()
    {
        return "Ini BelajarController fungsi hello_world()";
    }
}
