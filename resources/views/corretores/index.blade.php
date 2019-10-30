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
                <a href="{{ route('corretores.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i>Incluir novo corretor</a>
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
                            <!-- Botão de visualização -->
                            <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-fx fa-eye"></i></a>
                            <!-- Botão de edição -->
                            <a href="#" class="btn btn-warning btn-xs"><i class="fas fa-fx fa-pencil-alt"></i></a>
                            <!-- Botão de exclusão | envia um formulário ao invés de link -->
                            <form action="#" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-fx fa-trash-alt"></i></button>
                            </form>
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