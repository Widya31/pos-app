<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
// use DataTables;

class SupplierController extends Controller
{
    public function dtsup(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)){
            $dtsup = Supplier::where('suppliers.nama', 'like', '%' . $search . '%')
            ->orWhere('suppliers.email', 'like', '%' . $search . '%')
                ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('sup');
        } else {
            $dtsup = Supplier::latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('sup');
        }

        return view('supplier.supplier', compact('dtsup'))->with([
            'suppliers' => $dtsup,
            'search' => $search
        ]);
    }

    // public function data()
    // {
    //     $supplier = Supplier::orderBy('id_supplier', 'desc')->get();

    //     return datatables()
    //         ->of($supplier)
    //         ->addIndexColumn()
    //         ->addColumn('aksi', function ($supplier) {
    //             return '
    //             <div class="btn-group">
    //                 <button type="button" onclick="editForm(`'. route('supplier.update', $supplier->id_supplier) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
    //                 <button type="button" onclick="deleteData(`'. route('supplier.destroy', $supplier->id_supplier) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
    //             </div>
    //             ';
    //         })
    //         ->rawColumns(['aksi'])
    //         ->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function tsup(Request $request)
     {
         $dtsup = new Supplier();
         $dtsup->nama = $request->nama;
         $dtsup->email = $request->email;
         $dtsup->alamat = $request->alamat;
         $dtsup->telepon = $request->telepon;
         $dtsup->save();

         return redirect()->route('dtsup');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $supplier = Supplier::find($id);

        // return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function esup(string $id)
    {
        $dt = Supplier::find($id);
        // $kandidats = Kandid::all();
        return view('supplier.edit', compact('dt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function umember(Request $request, string $id)
    {
        $dt = Supplier::find($id);
        $dt->nama = $request->nama;
        $dt->email = $request->email;
        $dt->alamat = $request->alamat;
        $dt->telepon = $request->telepon;

        $dt->update($request->all());

        return redirect()->route('dtsup');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hsup(string $id)
    {
        $dtsup = Supplier::find($id);
        $dtsup->delete();

        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!');

    }
}
