<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk1;
use App\Models\Kategori1;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dtproduk(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)){
            $dtproduk = Produk1::where('produk1s.nama_produk', 'like', '%' . $search . '%')
            ->orWhere('produk1s.kode_produk', 'like', '%' . $search . '%')
                ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('pro');
        } else {
            $dtproduk = Produk1::latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('pro');
        }

        $kategori = Kategori1::all();

        return view('produk.produk', compact('dtproduk', 'kategori'))->with([
            'produk1s' => $dtproduk,
            'search' => $search
        ]);
    }

    public function editproduk(string $id)
    {
        $dt = Produk1::find($id);
        // echo"<pre>";
        // print_r($dt);die;
        // echo"</pre>";
        // $kandidats = Kandid::all();
        return view('produk.edit', compact('dt'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $latestProduk = Produk1::orderBy('kode_produk', 'desc')->first();
        $kode_produk = $latestProduk ? (int) $latestProduk->kode_produk + 1 : 1;

        $dtproduk = new Produk1();
        $dtproduk->id_kategori = $request->id_kategori;
        $dtproduk->kode_produk = $this->tambah_nol_didepan($kode_produk, 5);
        $dtproduk->nama_produk = $request->nama_produk;
        $dtproduk->merk = $request->merk;
        $dtproduk->harga_beli = $request->harga_beli;
        $dtproduk->harga_jual = $request->harga_jual;
        $dtproduk->stok = $request->stok;
        $dtproduk->save();

        return redirect()->route('dtproduk');
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
    public function edit1(string $id)
    {
        $produk = Produk1::find($id);
        $kategoris = Kategori1::all();
        return view('produk.edit', compact('produk', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update1(Request $request, string $id)
    {
        $data = Produk1::find($id);
        // $dtmember->update($request->all());
        $data->id_kategori = $request->id_kategori;
        $data->nama_produk = $request->nama_produk;
        $data->merk = $request->merk;
        $data->harga_beli = $request->harga_beli;
        $data->harga_jual = $request->harga_jual;
        $data->stok = $request->stok;

        $data->update($request->all());

        return redirect()->route('dtproduk');

    }

    function tambah_nol_didepan($value, $threshold = null)
    {
        return sprintf("%0". $threshold . "s", $value);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus1(string $id)
    {
        $dtproduk = Produk1::find($id);
        $dtproduk->delete();

        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!');

    }
}
