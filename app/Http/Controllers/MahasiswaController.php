<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = Student::all();
        return view('mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
