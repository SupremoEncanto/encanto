@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Ensaio do dia  {{ Carbon\Carbon::parse($ensaio->date)->toFormattedDateString() }}<span class="pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;<i class="fa fa-save"></i></span></div>
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
                @foreach ($pessoas as $pessoa) 
                <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->name }}</td>
                <td>{{ $pessoa->coristas->naipes->naipe }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection