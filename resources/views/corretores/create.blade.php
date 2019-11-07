@extends('adminlte::page')

@section('title', 'Adicionar Corretor')

@section('content_header')
    <h1>Adicionar corretor</h1>
@stop

@section('content')
    <form action="{{ route('corretores.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="panel-default">
            <div class="panel-heading">
                Informe os dados do corretor a ser cadastrado.
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome do corretor</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-2">
                        <label for="creci">Número do CRECI</label>
                        <input type="text" name="creci" id="creci" class="form-control">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="fone">Telefone de Contato</label>
                        <input type="phone" name="fone" id="fone" class="form-control" required>
                    </div>
                </div>
                    

                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="panel-footer">
                <a href="{{ route('corretores.index') }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-success">Gravar</button>
            </div>
        </div>
    </form>
    
@stop

@section('css')
@stop

@section('js')
@stop