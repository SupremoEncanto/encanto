@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')

@include('chamada._create')
<div class="col-lg-12 panel-base">
    <div class="panel panel-grey">
        <div class="panel-heading">Ensaio do dia  {{ Carbon\Carbon::parse($ensaio->date)->toFormattedDateString() }}<span class="pull-right"><a class="text-blue" type="button" data-toggle="modal" data-target="#chamadaCreate"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Corista</th>
                    <th>Naipe</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pessoas as $pessoa) 
                <tr>
                <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $pessoa->avatar }}" alt="" class="img-responsive avatar img-circle" style="width:36px;height:36px;"/></td>
                <td>{{ $pessoa->name }}</td>
                <td>{{ $pessoa->coristas->naipes->naipe }}</td>
                <td>
                    <span>
                        <form style='display:inline;' action="{{ url('/chamadas') }}" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="ensaio_id" value="{{ $ensaio->id }}" />
                            <input type="hidden" name="corista_id" value="{{ $pessoa->coristas->id }}" />
                            <button class="btn btn-link" type="submit"><span class="text-red"><i class="fa fa-times"></i></span></button>
                            {!! csrf_field() !!}
                            
                        </form>
                    </span>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $pessoas->links() }}
        </div>
    </div>
</div>    
@endsection