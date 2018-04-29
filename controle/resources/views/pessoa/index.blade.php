@extends('layout.layout')

@section('title', 'Pessoas')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista das Pessoas <span class="pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;<i class="fa fa-save"></i></span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Nome</th>
                    <th>Ramal</th>
                    <th>E-mail</th>
                    <th>Setor</th>
                    <th>Telefone</th>
                    <th>Aniversário</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pessoas as $pessoa) 
                <tr>
                    <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $pessoa->avatar }}" alt="" class="img-responsive avatar img-circle" style="width:36px;height:36px;"/></td>
                    <td>
                        <a href="{{ url('/pessoas', $pessoa->id) }}">{{ $pessoa->name }}</a>
                    </td>
                    <td>{{  $pessoa->ramal  }}</td>
                    <td>{{  $pessoa->email  }}</td>
                    <td>{{  $pessoa->setor  }}</td>
                    <td>{{  $pessoa->telefone  }}</td>
                    <td>{{  $pessoa->aniversario  }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection