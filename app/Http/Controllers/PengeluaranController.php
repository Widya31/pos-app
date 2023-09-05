<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dtluar(Request $request)
    {
        $search1 = $request->query('search1');

        if (!empty($search1)) {
            $luar = JenisPengeluaran::where('jenis_pengeluaran.jenis_pengeluaran', 'like', '%' . $search1 . '%')
                ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('jns');
        } else {
            $luar = JenisPengeluaran::latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('jns');
        }

        $newJenis = new JenisPengeluaran();

        return view('pengeluaran.pengeluaran', compact('luar', 'newJenis'))->with([
            'jenis_pengeluaran' => $luar,
            'search1' => $search1
        ]);

        // $data= JenisPengeluaran::all();

        // return view('pengeluaran.pengeluaran', compact('data'));
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

    public function huar(string $id)
    {
        $luar = JenisPengeluaran::find($id);
        $luar->delete();

        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!');
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
