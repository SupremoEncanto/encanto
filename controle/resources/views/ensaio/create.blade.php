@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="panel panel-grey">
            <div class="panel-heading">Criar ensaio</div>
            <div class="panel-body pan">

  {!! Form::open(['url' => 'ensaios']) !!}
    @include('ensaio._form', ['submitButton' => 'Criar Ensaio'], ['tipo' => '1'], ['nome' => 'Criar um novo ensaio'])
  {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@include('errors.list')

@stop
