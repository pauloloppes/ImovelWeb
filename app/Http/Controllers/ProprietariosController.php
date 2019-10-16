<?php

namespace App\Http\Controllers;

use App\Proprietarios;
use Illuminate\Http\Request;

class ProprietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietarios = Proprietarios::all();

        return view('proprietarios.index', $proprietarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proprietarios  $proprietarios
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietarios $proprietarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proprietarios  $proprietarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprietarios $proprietarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proprietarios  $proprietarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proprietarios $proprietarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proprietarios  $proprietarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietarios $proprietarios)
    {
        //
    }
}
