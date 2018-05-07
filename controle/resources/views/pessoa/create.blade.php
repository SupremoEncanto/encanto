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
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-edit" data-toggle="tab">Editar Perfil</a></li>
                                <li><a href="#tab-messages" data-toggle="tab">Editar Corista</a></li>
                            </ul>
                            <div id="generalTabContent" class="tab-content">
                                <div id="tab-edit" class="tab-pane fade in active">
                                    {!! Form::open(['url' => 'users']) !!}
                                        @include('user._form', ['submitButton' => 'Editar Usuário'], ['nome' => 'Editar Usuário'])
                                    {!! Form::close() !!}
                                </div>
                                <hr/>
                                <div id="tab-edit" class="tab-pane fade in active">
                                        {!! Form::open(['url' => 'pessoas' !!}
                                            @include('pessoa._form', ['submitButton' => 'Editar Pessoa'], ['nome' => 'Editar Pessoa'])
                                        {!! Form::close() !!}
                                    </div>
                                <div id="tab-messages" class="tab-pane fade in">
                                    {!! Form::open(['url' => 'coristas' !!}
                                        @include('corista._form', ['submitButton' => 'Editar Corista'], ['nome' => 'Editar Corista'])
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