<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dtluar()
    {
        $data= JenisPengeluaran::all();

        return view('pengeluaran.pengeluaran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tjenis(Request $request)
    {
        JenisPengeluaran::create([
            'jenis_pengeluaran' => $request ->jenis_pengeluaran
        ]);

        return redirect()->route('dtluar');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
