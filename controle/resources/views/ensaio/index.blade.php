@extends('layout.layout')

@section('title', 'Ensaios')

@section('content')
<div class="col-lg-12 panel-base">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Ensaios <span class="pull-right"><a class="text-blue" href="ensaios/create"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Data</th>
                    <th>Regular</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ensaios as $ensaio) 
                <tr>
                <td>{{ $ensaio->id }}</td>
                <td>
                    <a href="{{ url('/ensaios', $ensaio->id) }}"> {{ Carbon\Carbon::parse($ensaio->date)->format('d/m/Y') }}</a>
                </td>
                <td>
                    @if ($ensaio->regular)
                    Regular
                    @else
                    Extraordinário
                    @endif
                </td>
                <td>
                    <span>
                        <form style='display:inline;' action="{{ url('/ensaios', ['id' => $ensaio->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            <button class="btn btn-link" type="submit"><span class="text-red"><i class="fa fa-times"></i></span></button>
                            {!! csrf_field() !!}
                            
                        </form>
                        <a href="ensaios/{{$ensaio->id}}/edit"><span class="text-blue"><i class="fa fa-edit"></i></span></a>
                    </span>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $ensaios->links() }}
        </div>
    </div>
</div>    
@endsection