<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;
use DB;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projeks = Projek::latest()->paginate(20);
        return view('projek.index',compact('projeks'))->with('i', (request()->input('page',1)-1) * 20);
    }
}