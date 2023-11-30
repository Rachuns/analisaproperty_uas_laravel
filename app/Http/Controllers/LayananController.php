<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use DB;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $layanans = Layanan::latest()->paginate(20);
        return view('layanan.index',compact('layanans'))->with('i', (request()->input('page',1)-1) * 20);
    }
}