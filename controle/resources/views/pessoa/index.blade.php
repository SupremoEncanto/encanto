@extends('layout.layout')

@section('title', 'Pessoas')

@section('content')
<div class="col-lg-12 panel-base">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista das Pessoas <span class="label"><strong>{{ $pessoas->total() . " pessoa(s)" }}</strong></span><span class="pull-right"><a class="text-blue" href="pessoas/create"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Nome</th>
                    <th>Ramal</th>
                    <th>E-mail</th>
                    <th>Setor</th>
                    <th>Aniversário</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pessoas as $pessoa)
                <tr>
                    <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $pessoa->avatar }}" alt="" class="img-responsive avatar img-circle"/></td>
                    <td>
                        <a href="{{ url('/pessoas', $pessoa->id) }}">{{ $pessoa->name }}</a>
                    </td>
                    <td>{{  $pessoa->ramal  }}</td>
                    <td>{{  $pessoa->email  }}</td>
                    <td>{{  $pessoa->setor  }}</td>
                    <td>{{  $pessoa->aniversario  }}</td>
                    <td>
                        <span>
                            <form style='display:inline;' action="{{ url('/pessoas', ['id' => $pessoa->id]) }}" method="post">
                                <input type="hidden" name="_method" value="delete" />
                                <button class="btn btn-link acao" type="submit"><span class="text-red"><i class="fa fa-times"></i></span></button>
                                {!! csrf_field() !!}
                            </form>
                            <a href="pessoas/{{$pessoa->id}}/edit"><span class="text-blue"><i class="fa fa-edit"></i></span></a>
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
