<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use DB;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berandas = Beranda::latest()->paginate(20);
        return view('beranda.index',compact('berandas'))->with('i', (request()->input('page',1)-1) * 20);
    }
    public function badmin()
    {
        return view('Beranda.beranda_adm');
    }
}
