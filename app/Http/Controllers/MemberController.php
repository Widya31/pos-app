<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Helpers;
use App\Models\Setting;
use PDF;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dtmember(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)){
            $dtmember = Member::where('members.nama', 'like', '%' . $search . '%')
            ->orWhere('members.kode_member', 'like', '%' . $search . '%')
                ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('mbr');
        } else {
            $dtmember = Member::latest('created_at') // Mengurutkan berdasarkan created_at terbaru
                ->paginate(5)->onEachSide(3)->fragment('mbr');
        }

        return view('member.member', compact('dtmember'))->with([
            'members' => $dtmember,
            'search' => $search
        ]);
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
    public function tmember(Request $request)
    {
        $latestMember = Member::orderBy('kode_member', 'desc')->first();
        $kode_member = $latestMember ? (int) $latestMember->kode_member + 1 : 1;

        $dtmember = new Member();
        $dtmember->kode_member = $this->tambah_nol_didepan($kode_member, 5);
        $dtmember->nama = $request->nama;
        $dtmember->alamat = $request->alamat;
        $dtmember->telepon = $request->telepon;
        $dtmember->save();

        return redirect()->route('dtmember');
    }

    function tambah_nol_didepan($value, $threshold = null)
    {
        return sprintf("%0". $threshold . "s", $value);
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
    public function emember(string $id)
    {
        $dt = Member::find($id);
        // $kandidats = Kandid::all();
        return view('member.edit', compact('dt'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function umember(Request $request, string $id)
    {
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'telepon' => 'required',
        // ]);
        $dt = Member::find($id);
        // $dtmember->update($request->all());
        $dt->nama = $request->nama;
        $dt->alamat = $request->alamat;
        $dt->telepon = $request->telepon;

        $dt->update($request->all());

        // $dtmember->update();
        //return view('member.member', compact('dt'));

        return redirect()->route('dtmember');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hps(string $id)
    {
        $dtmember = Member::find($id);
        $dtmember->delete();

        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus!');

    }

    // public function cetakMember(Request $request)
    // {
    //     $dtmember = collect(array());
    //     foreach ($request->id_member as $id) {
    //         $member = Member::find($id);
    //         $dtmember[] = $member;
    //     }

    //     $dtmember = $dtmember->chunk(2);
    //     $setting    = Setting::first();

    //     $no  = 1;
    //     $pdf = PDF::loadView('member.cetak', compact('datamember', 'no', 'setting'));
    //     $pdf->setPaper(array(0, 0, 566.93, 850.39), 'potrait');
    //     return $pdf->stream('member.pdf');
    // }
}
