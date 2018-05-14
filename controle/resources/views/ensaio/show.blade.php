@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')

@include('chamada._create')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Ensaio do dia  {{ Carbon\Carbon::parse($ensaio->date)->toFormattedDateString() }}<span class="pull-right"><a class="text-blue" type="button" data-toggle="modal" data-target="#chamadaCreate"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Corista</th>
                    <th>Naipe</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pessoas as $pessoa) 
                <tr>
                <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $pessoa->avatar }}" alt="" class="img-responsive avatar img-circle" style="width:36px;height:36px;"/></td>
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