@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Ensaios <span class="pull-right"><a href="ensaios/create"><i class="fa fa-plus"></i></a></span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Data</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ensaios as $ensaio) 
                <tr>
                <td>{{ $ensaio->id }}</td>
                <td>
                    <a href="{{ url('/ensaios', $ensaio->id) }}"> {{ Carbon\Carbon::parse($ensaio->date)->format('d/m/Y') }}</a>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection