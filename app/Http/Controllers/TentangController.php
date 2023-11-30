<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use DB;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentangs = Tentang::latest()->paginate(20);
        return view('tentang.index',compact('tentangs'))->with('i', (request()->input('page',1)-1) * 20);
    }
}