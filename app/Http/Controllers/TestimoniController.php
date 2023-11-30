<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use DB;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::latest()->paginate(20);
        return view('testimoni.index',compact('testimonis'))->with('i', (request()->input('page',1)-1) * 20);
    }
}