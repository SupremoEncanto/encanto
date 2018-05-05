@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="panel panel-grey">
            <div class="panel-heading">Editar ensaio</div>
            <div class="panel-body pan">

  {!! Form::model($ensaio, ['method' => 'PATCH', 'action' => ['EnsaioController@update', $ensaio->id]]) !!}
    @include('ensaio._form', ['submitButton' => 'Editar Ensaio'], ['date' => 'd/m/Y'], ['nome' => 'Editar um ensaio'])
  {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@include('errors.list')

@stop
