@extends('adminlte::page')

@section('title', 'Visualizar Corretor')

@section('content_header')
    <h1>Visualizar Corretor</h1>
@stop

@section('content')
    <div class="panel panel-default">
    <div class="panel-heading">
        Detalhes dos dados do corretor
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-2">
                Nome do corretor
            </div>
            <div class="col-sm-10">
                {{ $corretor->nome }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                CRECI
            </div>
            <div class="col-sm-10">
                {{ $corretor->creci }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                Telefone do corretor
            </div>
            <div class="col-sm-10">
                {{ $corretor->fone }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                E-mail do corretor
            </div>
            <div class="col-sm-10">
                {{ $corretor->email }}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{ route('corretores.index') }}" class="btn btn-default">Voltar</a>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop