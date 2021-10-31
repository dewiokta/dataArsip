<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use Yajra\DataTables\Services\DataTable;
class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $arsip = Arsip::all();

        // menampilkan data
        return view('table-arsip')->with('arsips', $arsip);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-arsip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nomor_surat' => 'required',
        //     'kategori' => 'required',
        //     'judul' => 'required',
        //     'tanggal_arsip' => 'required',
        //     'surat' => 'required|mimes:pdf|max:2048',
        // ]);

        $input = $request->all();

        if ($file = $request->file('surat')) {
            $path = 'file';
            $profilefile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($path, $profilefile);
            $input['surat'] = "$profilefile";
        }
        Arsip::create($input);
        return  redirect()->route('arsip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Arsip $arsip)
    {
        return view('show', compact('arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        //delete data
        $arsip->delete();
        session()->flash('status', 'User was deleted!');
        return redirect()->route('arsip.index');
    }

    public function download(Arsip $arsip){
        $path = public_path($arsip->file_surat);
        // return Storage::download($path);
        return response()->download($path);
    }
}
