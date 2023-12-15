<?php

namespace App\Http\Controllers;

use App\Models\nursaidah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionContextPass;

class nursaidah17 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=nursaidah::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Nim'=> 'required',
            'Kelas'=> 'required',
            'Jurusan'=> 'required',
            'Semester'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Nim'=> $request->input('Nim'),
            'Kelas'=> $request->input('Kelas'),
            'Jurusan'=> $request->input('Jurusan'),
            'Semester'=> $request->input('Semester')
        ];
        nursaidah::create($data);
        return redirect('isian');
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = nursaidah::where('Nama',$id)->first();
        return view('isian.edit')->with('data',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Nim'=> 'required',
            'Kelas'=> 'required',
            'Jurusan'=> 'required',
            'Semester'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Nim'=> $request->input('Nim'),
            'Kelas'=> $request->input('Kelas'),
            'Jurusan'=> $request->input('Jurusan'),
            'Semester'=> $request->input('Semester')
        ];
        nursaidah::where('Nama',$id)->update($data);
        return redirect('isian')->with('success','Data Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        nursaidah::where('Nama',$id)->delete();
        return redirect('isian')->with('success','Data Berhasil di Hapus!');
    }
}
