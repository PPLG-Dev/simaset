<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    public function index() {
        $tanah = Tanah::all();
        return view('tanah.index', ['items' => $tanah]);
    }

    public function create()
    {
        return view('tanah.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_tanah' => 'required|string',
            'kode_tanah' => 'required|string',
            'luas' => 'required|string',
            'no_sertifikat' => 'required|string',
        ]);

        Tanah::create($validated);
        return redirect()->route('tanah.index')->with('success', 'Data Berhasil Ditambahkan!');
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
        $tanah = Tanah::find($id);
        return view('tanah.edit', ['tanah'=>$tanah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_tanah' => 'required|string',
            'kode_tanah' => 'required|string',
            'luas' => 'required|string',
            'no_sertifikat' => 'required|string',
        ]);

        $tanah = Tanah::find($id);
        $tanah->update($validated);
        return redirect()->route('tanah.index')->with('success', 'Data Berhasil Dirubah!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Tanah::destroy($id);
        return redirect()->route('tanah.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
