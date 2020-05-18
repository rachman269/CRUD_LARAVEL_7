<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // --------Cara Kesatu untuk simpan data--------
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->jurusan = $request->jurusan;
        // $student->email = $request->email;
        // $student->alamat = $request->alamat;

        // $student->save();

        // -------- Cara Kedua Simpan data --------------------------------
        // Student::create([
        //     'nama' => $request->nama,
        //     'npm' => $request->npm,
        //     'jurusan' => $request->jurusan,
        //     'email' => $request->email,
        //     'alamat' => $request->alamat
        // ]);

        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:7',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/student')->with('status', 'Data Mahasiswa Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
