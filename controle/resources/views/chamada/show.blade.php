@extends('layout.layout')

@section('title', 'Chamada')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Ensaio do dia  <span class="pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;<i class="fa fa-save"></i></span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Corista</th>
                    <th>Naipe</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($coristas as $corista) 
                <tr>
                <td>{{ $corista->id }}</td>
                <td>{{ $corista->pessoas->name }}</td>
                <td>{{  $corista->naipes->naipe  }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection