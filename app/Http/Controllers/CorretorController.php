<?php

namespace App\Http\Controllers;

use App\Corretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorretorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corretores = Corretor::all();

        return view('corretores.index', compact('corretores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corretores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Corretor::create($request->all());
        return redirect()->route('corretores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $corretor = Corretor::find($id);

        return view('corretores.show',compact('corretor')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $corretor = Corretor::find($id);
        return view('corretores.edit',compact('corretor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Exibe os valores das variáveis entre parênteses
        //dd($id,$request);

        DB::table('corretores')
            ->where('id',$id)
            ->update([
                'nome'=>$request->nome,
                'creci'=>$request->creci,
                'fone'=>$request->fone,
                'email'=>$request->email
            ]);

        return redirect()->route('corretores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //dd($corretor);
        Corretor::destroy($id);
        return redirect()->route('corretores.index');
    }
}
