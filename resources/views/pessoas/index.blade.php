@extends('adminlte::page')

@section('title', 'Pessoas')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <h3>Pessoas</h3>
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
                        <h5>Lista de Pessoas</h5>
                    </div>
                    <div class="col-md-6 float-r">
                        <a href="/pessoas/add" class="btn btn-success">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pessoas as $pessoa)
                                    <tr>
                                        <th scope="row">{{ $pessoa->id }}</th>
                                        <td>{{ $pessoa->nome }}</td>
                                        <td>{{ $pessoa->email }}</td>
                                        <td>{{ $pessoa->cpf }}</td>
                                        <td>{{ $pessoa->celular }}</td>
                                        <td>{{ $pessoa->status }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Ações
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="/pessoas/edit/{{ $pessoa->id }}">Editar</a>
                                                </div>
                                              </div>
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