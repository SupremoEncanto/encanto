@extends('layout.layout')

@section('title', 'Pessoas')

@section('content')
<div id="tab-general">
    <div class="row mbl">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                </div>
            </div>
        </div>
        <div class="col-lg-12">    
            <div class="row">
                <div class="col-md-12"><h2>Perfil: {{ $pessoa->name }}</h2>
                    <div class="row mtl">
                        <div class="col-md-9"> 
                            <div class="tab-content">
                                <div class="">
                                    {!! Form::model($pessoa, ['method' => 'PATCH', 'action' => ['PessoaController@update', $pessoa->id]]) !!}
                                        @include('pessoa._form', ['submitButton' => 'Editar Pessoa'], ['nome' => 'Editar Pessoa'])
                                    {!! Form::close() !!}
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
</div>
@endsection