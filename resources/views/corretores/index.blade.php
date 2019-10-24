@extends('adminlte::page')

@section('title', 'Corretores')

@section('content_header')
    <h1><i class="fas fa-fw fa-address-book"></i> Listagem de Corretores</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relação dos corretores cadastrados
            <div class="pull-right">
                <a href="#" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i>Atualizar a tela</a>
                <a href="#" class="btn btn-success"><i class="fas fa-fx fa-plus"></i>Incluir novo corretor</a>
            </div>
        </div>
        <div class="panel-body">
            <table id="table-corretores" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($corretores as $corretor)
                    <tr>
                        <td>{{ $corretor->id }}</td>
                        <td>{{ $corretor->nome }}</td>
                        <td>{{ $corretor->fone }}</td>
                        <td>{{ $corretor->email }}</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-fx fa-eye"></i></a>
                            <a href="#" class="btn btn-warning"><i class="fas fa-fx fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-fx fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready( function () {
    $('#table-corretores').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
            }
        }
    );
} );
</script>
@stop