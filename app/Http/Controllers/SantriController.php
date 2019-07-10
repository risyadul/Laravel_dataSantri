<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $data_santri = \App\Santri::all();
        return view('utama.index', ['data_santri' => $data_santri]);
    }
    
    public function create(request $Request)
    {
        $santri = \App\Santri::create($Request->all());
        return redirect('/santri')->with('sukses', 'Data Berhasil ditambah');
    }

    public function delete($id)
    {
        $santri = \App\Santri::find($id);
        $santri->delete($santri);
        return redirect('/santri')->with('sukses', 'Data Berhasil diHapus');
    }

    public function edit($id)
    {
        $santri = \App\Santri::find($id);
        return view('utama.edit', ['santri' => $santri]);
    }

    public function update(Request $request, $id)
    {
        $santri = \App\Santri::find($id);
        $santri->update($request->all());
        return redirect('/santri')->with('sukses', 'Data Berhasil diUpdate');
    }
}
