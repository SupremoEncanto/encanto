@extends('layout.layout')

@section('title', 'Coristas')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Coristas <span class="pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;<i class="fa fa-save"></i></span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Corista</th>
                    <th>Ramal</th>
                    <th>E-mail</th>
                    <th>Naipe</th>
                </tr>
                </thead>
                <tbody>
               
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection