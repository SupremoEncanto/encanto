@extends('layout.layout')

@section('title', 'Corista')

@section('content')

<div class="col-lg-12">
    <div class="row">
        <div class="panel panel-grey">
            <div class="panel-heading">Editar corista - {{ $corista->pessoas->name }}</div>
            <div class="panel-body pan">

  {!! Form::model($corista, ['method' => 'PATCH', 'action' => ['CoristaController@update', $corista->id]]) !!}
    @include('corista._form', ['submitButton' => 'Editar Corista'], ['date' => 'd/m/Y'], ['nome' => 'Editar um corista'])
  {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@include('errors.list')

@stop