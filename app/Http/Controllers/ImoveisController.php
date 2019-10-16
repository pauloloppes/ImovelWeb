<?php

namespace App\Http\Controllers;

use App\Imoveis;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = Imoveis::all();

        return view('imoveis.index', $imoveis);
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
     * @param  \App\Imoveis  $imoveis
     * @return \Illuminate\Http\Response
     */
    public function show(Imoveis $imoveis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imoveis  $imoveis
     * @return \Illuminate\Http\Response
     */
    public function edit(Imoveis $imoveis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imoveis  $imoveis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imoveis $imoveis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imoveis  $imoveis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imoveis $imoveis)
    {
        //
    }
}
