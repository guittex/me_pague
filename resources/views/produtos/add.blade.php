@extends('adminlte::page')

@section('title', 'Adicionar Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Adicionar Produtos</h5>
                    </div>
                    <div class="col-md-6 float-r">
                        <a href="/produtos">
                            <i class="fa fa-angle-double-left"></i>
                            <span style="margin-left: 10px">VOLTAR</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ Form::open(['route' => 'produto.add', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('Nome') !!}
                            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('Categoria') !!}
                            {!! Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('Quantidade') !!}
                            {!! Form::number('qtd', '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-6 m-t-10">
                            {!! Form::label("Código") !!}
                            {!! Form::select('json', [
                                'tipo1' => 'asdsadsad',
                                'tipo2' => '3242342',
                                'tipo3' => '44',
                                'tipo4' => '555'

                                ], '', ['class' => 'form-control', 'multiple' => true]) !!}
                        </div>
                        <div class="col-md-6 m-t-10">
                            {!! Form::label('Arquivo') !!}
                            {!! Form::file('file', ['class' => 'form-control']); !!}
                        </div>
                        <div class="col-md-12 m-t-10">
                            {!! Form::label('Descrição') !!}
                            {!! Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
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