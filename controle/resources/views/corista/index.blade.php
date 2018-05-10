@extends('layout.layout')

@section('title', 'Coristas')

@section('content')
<div class="modal fade" id="coristaCreate" tabindex="-1" role="dialog" aria-labelledby="coristaCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="coristaCreateLabel" style="display:  inline;">Adicionar Corista</h5>
          <span aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </span>
        </div> 
        <div class="modal-body">
                <form action="#" class="form-horizontal row" style="margin:0 2px;">
            <div class="form-group col-md-6" style="margin-right:3px;"> 
                {!! Form::label('naipes', 'Naipes') !!}<br>
                {!! Form::select('id', $naipes, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('pessoa_id', 'Pessoa') !!}<br>
                <select class="form-control" name="id">
                    @foreach ($pessoas as $pessoa)
                        <option value="{{ $pessoa->id }}">{{ $pessoa->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" data-dismiss="modal" >Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Coristas <span class="pull-right"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#coristaCreate"><i class="fa fa-plus"></i></button>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Corista</th>
                    <th>Ramal</th>
                    <th>Telefone</th>
                    <th>Naipe</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($coristas as $corista) 
                <tr>
                    <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $corista->pessoas->avatar }}" alt="" class="img-responsive avatar img-circle" style="width:36px;height:36px;"/></td>
                    <td>
                        <a href="{{ url('/pessoas', $corista->pessoas->id) }}">{{ $corista->pessoas->name }}</a>
                    </td>
                    <td>{{  $corista->pessoas->ramal  }}</td>
                    <td>{{  $corista->pessoas->telefone  }}</td>
                <td>{{  $corista->naipes->naipe  }}</td>
                <td>
                    @if ($corista->left_on)
                    <span class="label label-danger">Inativo</span>
                    @else
                    <span class="label label-success">Ativo</span>
                    @endif
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection