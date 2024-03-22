@extends('adminlte::page')

@section('title', 'Editar Pessoas')

@section('content_header')
    <h1>Pessoas</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Editar Pessoas</h5>
                    </div>
                    <div class="col-md-6 float-r">
                        <a href="/pessoas   ">
                            <i class="fa fa-angle-double-left"></i>
                            <span style="margin-left: 10px">VOLTAR</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ Form::open(['route' => ['pessoas.edit', $pessoa->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::label('Nome') !!}
                            {!! Form::text('nome',  $pessoa->nome ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...', 'required' => true]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('E-mail') !!}
                            {!! Form::email('email', $pessoa->email ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('CPF') !!}
                            {!! Form::text('cpf', $pessoa->cpf ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...', 'id' => 'cpf', 'required' => true]) !!}
                        </div>
                        <div class="col-md-4 m-t-10">
                            {!! Form::label("Celular") !!}
                            {!! Form::text('celular', $pessoa->celular ?? '', ['class' => 'form-control', 'placeholder' => 'Digite...', 'id' => 'celular']) !!}
                        </div>
                        <div class="col-md-12 m-t-10 float-r">
                            <hr>
                            <button class="btn btn-success" type="submit">Editar</button>
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
    <script> 
          $('#cpf').mask('000.000.000-00');
          $('#celular').mask('(00) 00000-0000');
    </script>
@stop