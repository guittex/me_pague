@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <h3>Produtos</h3>
        </div>
        <div class="col-md-12">
            @if (session('msg'))      
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Lista de Produtos</h5>
                    </div>
                    <div class="col-md-6 float-r">
                        <a href="/produtos/add" class="btn btn-success">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12" style="overflow: auto">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>
                                        <th scope="row">{{ $produto->id }}</th>
                                        <td>{{ $produto->nnpame }}</td>
                                        <td>{{ $produto->qtd }}</td>
                                        <td>{{ $produto->category }}</td>
                                        <td>{{ $produto->description }}</td>
                                        <td>
                                            <a style="width:46px;margin-bottom:5px" href="/produtos/edit/{{ $produto->id }}" class="btn btn-warning-dark text-white btn-xs">Editar</a>
                                            <form action="/produtos/delete/{{ $produto->id }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger btn-xs" type="submit">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div> 
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/styles.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop