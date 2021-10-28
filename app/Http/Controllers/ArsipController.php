<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $arsip = Arsip::all();

        // menampilkan data
        return view('table-arsip')->with('arsips', $arsip);
    }

    public function create()
    {
        return view('create-arsip');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'tanggal_arsip' => 'required',
            'surat' => 'required|mimes:pdf|max:2048',
        ]);

        $input = $request->all();

        if ($file = $request->file('surat')) {
            $path = 'file/';
            $profilefile = time() . "." . $file->getClientOriginalExtension();
            $file->move($path, $profilefile);
            $input['surat'] = "$profilefile";
        }
        Arsip::create($input);
        return  redirect()->route('arsip.index');
    }

    public function destroy(Arsip $arsip)
    {
        //delete data
        $arsip->delete();
        session()->flash('status', 'User was deleted!');
        return redirect()->route('arsip.index');
    }
}
