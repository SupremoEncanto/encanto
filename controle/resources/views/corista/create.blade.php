@extends('layout.layout')

@section('title', 'Coristas')

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
                <div class="col-md-12"><h2>Adicionar Corista</h2>
                    <div class="row mtl">
                        <div class="col-md-9"> 
                            <div class="tab-content">
                                <div class="">
                                    {!! Form::open(['url' => 'coristas']) !!}
                                        @include('corista._form', ['submitButton' => 'Adicionar Corista'], ['nome' => 'Adicionar Corista'])
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