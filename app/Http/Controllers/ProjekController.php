<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ProjekController extends Controller
{
    public function index()
    {
        $projeks = Projek::latest()->paginate(20);
        return view('projek.projek_adm',compact('projeks'))->with('i', (request()->input('page',1)-1) * 20);
    }

    public function create()
    {
        return view('projek.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nmr_pesan' => 'required',
            'jdl_project' => 'required',
            'fitur' => 'required',
            'dnh_rmh' => 'required',
            'dnh_prjct' => 'required',
            'stat' => 'required',
        ]);

        $file = $request->file('dnh_rmh');
        $rumah = time()."_".$file->getClientOriginalName();
        $tujuan = 'gambar';
        $file->move($tujuan,$rumah);

        $file = $request->file('dnh_prjct');
        $project = time()."_".$file->getClientOriginalName();
        $tujuan = 'gambar';
        $file->move($tujuan,$project);

        Projek::create([
            'nmr_pesan' => $request->nmr_pesan,
            'jdl_project' => $request->jdl_project,
            'fitur' => $request->fitur,
            'dnh_rmh' => $rumah,
            'dnh_prjct' => $project,
            'stat' => $request->stat,
        ]);
        return redirect()->route('projek.index')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projek $projek)
    {
        $projeks = DB::table('projek');
        return view('projek.edit',compact('projek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projek $projek)
    {
        $request->validate([
            'nmr_pesan' => 'required',
            'jdl_project' => 'required',
            'fitur' => 'required',
            'dnh_rmh' => 'required',
            'dnh_prjct' => 'required',
            'stat' => 'required',
        ]);
        $projek->update($request->all());
        return redirect()->route('projek.index')
                        ->with('success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projek $projek)
    {
        $projek->delete();
        return redirect()->route('projek.index')
        ->with('success','Data berhasil dihapus');
    }
    public function report()
    {
        $bukus = DB::table('buku_perpus');
        return view('projek.report',compact('projeks'))->with('i', (request()->input('page',1)-1) * 20);
    }
}
