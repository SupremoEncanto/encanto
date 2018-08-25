@extends('layout.layout')

@section('title', 'Chamada')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista das Chamadas <span class="label">{{ $ensaios->total() . " ensaio(s)" }}</span><span class="pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;<i class="fa fa-save"></i></span></div>
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
                    <a href="{{ url('/chamada', $ensaio->id) }}"> {{ $ensaio->date }}</a>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
