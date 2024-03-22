@extends('adminlte::page')

@section('title', 'Editar Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<?php 
    //debug var
    // dd($produto->name);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Editar Produtos</h5>
            </div>
            <div class="card-body">
                {{ Form::open(['route' => ['produto.edit', $produto->id], 'method' => 'post']) }}
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('Nome') !!}
                            {!! Form::text('name', $produto->name ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('Categoria') !!}
                            {!! Form::text('category', $produto->category ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('Quantidade') !!}
                            {!! Form::number('qtd', $produto->qtd ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-12 m-t-10">
                            {!! Form::label('File') !!}
                            {!! Form::file('file', ['class' => 'form-control']); !!}
                        </div>
                        <div class="col-md-12 m-t-10">
                            {!! Form::label('Descrição') !!}
                            {!! Form::textarea('description', $produto->description ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-12 m-t-10 float-r">
                            <hr>
                            <button class="btn btn-success" type="submit">Adicionar</button>
                        </div>
                    </div>
                {{ Form::close() }}                
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