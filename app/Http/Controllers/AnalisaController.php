<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analisa;

class AnalisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $analisas = Analisa::latest()->paginate(20);
        return view('admin.welcome_admin',compact('analisas'))->with('i', (request()->input('page',1)-1) * 20);
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
