<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori1;

class KategoriController extends Controller
{
    // public function simpandt(Request $request){
    //     Kategori::create([
    //         'nama_kategori' => $request->nama_kategori,
    //     ]);

    //     return redirect('/kategori')->with('toast_success', 'Data Berhasil Disimpan!');
    // }

    /**
     * Display a listing of the resource.
     */
    public function reqajax($id)
    {
        $catdata = Kategori1::find($id);
        return $catdata;
    }

    public function get_data_cat($id)
    {
        print_r($id);die;
    }

    public function index(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)) {
            $kategori = Kategori1::where('kategori1s.nama_kategori', 'like', '%' . $search . '%')
                ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('ktgr');
        } else {
            $kategori = Kategori1::latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('ktgr');
        }

        $newKategori = new Kategori1();

        return view('kategori.kategori', compact('kategori', 'newKategori'))->with([
            'kategori1s' => $kategori,
            'search' => $search
        ]);
    }
        // public function data()
    // {
    //     $kategori = Kategori::orderBy('id_kategori', 'desc')->get();

    //     return datatables()
    //         ->of($kategori)
    //         ->addIndexColumn()
    //         ->addColumn('aksi', function ($kategori) {
    //             return '
    //             <div class="btn-group">
    //                 <button onclick="editForm(`'. route('kategori.update', $kategori->id_kategori) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
    //                 <button onclick="deleteData(`'. route('kategori.destroy', $kategori->id_kategori) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
    //             </div>
    //             ';
    //         })
    //         ->rawColumns(['aksi'])
    //         ->make(true)
    //         ;
    // }

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
        Kategori1::create([
            'nama_kategori' => $request ->nama_kategori
        ]);

        return redirect()->route('index');

        // $kategori = new Kategori();
        // $kategori->nama_kategori = $request->nama_kategori;
        // $kategori->save();

        // return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori1::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editdt(string $id)
    {
        $kategori = Kategori1::find($id);
        // $kandidats = Kandid::all();
        return view('kategori.edit', compact('kategori'));

    }

    // success again
    /**
     * Update the specified resource in storage.
     */
    public function updatedt(Request $request, string $id)
    {
        $kategori = Kategori1::find($request->kategori_id);
        // echo"<pre>";
        // print_r($request->kategori_id);die;
        // echo"</pre>";
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusdt(string $id)
    {
        $kategori = Kategori1::find($id);
        $kategori->delete();

        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
