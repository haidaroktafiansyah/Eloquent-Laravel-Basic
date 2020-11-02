<?php

namespace App\Http\Controllers;

use App\mahasiswaeqmodel;
use Illuminate\Http\Request;

class mahasiswaeq extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = mahasiswaeqmodel::all();
        return view('mahasiswaeq',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        // $mahasiswaeqmodel = new mahasiswaeqmodel();
        // $mahasiswaeqmodel->nama= $request->nama;
        // $mahasiswaeqmodel->nim= $request->nim;
        // $mahasiswaeqmodel->email= $request->email;
        // $mahasiswaeqmodel->jurusan= $request->jurusan;

        // $mahasiswaeqmodel->save();



        // mahasiswaeqmodel::create([
        //     'nama'=>$request->nama,
        //     'nim'=>$request->nim,
        //     'email'=>$request->email,
        //     'jurusan'=>$request->jurusan
        // ]);

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        mahasiswaeqmodel::create($request->all());

        return redirect('mahasiswaeq')->with('status','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswaeqmodel  $mahasiswaeqmodel
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswaeqmodel $mahasiswaeqmodel)
    {
        //
        // return $mahasiswaeqmodel;
        return view('mahasiswadetail', compact('mahasiswaeqmodel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswaeqmodel  $mahasiswaeqmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswaeqmodel $mahasiswaeqmodel)
    {
        //
        return view('mahasiswaedit', compact('mahasiswaeqmodel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswaeqmodel  $mahasiswaeqmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswaeqmodel $mahasiswaeqmodel)
    {
        //
        // return $request;

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);

        mahasiswaeqmodel::where('id', $mahasiswaeqmodel->id)
        ->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        return redirect('mahasiswaeq')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswaeqmodel  $mahasiswaeqmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswaeqmodel $mahasiswaeqmodel)
    {
        // return $mahasiswaeqmodel;

        mahasiswaeqmodel::destroy($mahasiswaeqmodel->id);
        return redirect('mahasiswaeq')->with('status','data berhasil di hapus');
    }
}
