<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bangunan = Bangunan::all();
        return view('bangunan.index', ['items' => $bangunan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tanah = Tanah::all();
        return view('bangunan.create', ['tanah' => $tanah]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bangunan' => 'required|string',
            'kode_bangunan' => 'required|string|unique:bangunan',
            'tanah_id' => 'required|string|exists:tanah,id',
        ]);

        Bangunan::create($validated);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Ditambahkan!');
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
        $bangunan = Bangunan::with('tanah')->find($id);
        $tanah = Tanah::all(['id', 'nama_tanah']);
        return view('bangunan.edit', ['bangunan' => $bangunan, 'tanah' => $tanah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_bangunan' => 'required|string',
            'kode_bangunan' => 'required|string|unique:bangunan',
            'tanah_id' => 'required|string|exists:tanah,id',
        ]);

        $bangunan = Bangunan::find($id);
        $bangunan->update($validated);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bangunan::destroy($id);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
