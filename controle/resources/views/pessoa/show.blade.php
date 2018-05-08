@extends('layout.layout')

@section('title', 'Pessoas')

@section('content')
<div id="tab-general">
    <div class="row mbl">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                </div>
            </div>
        </div>
        <div class="col-lg-12">  
            <div class="row">
                <div class="col-md-12"><h2>Perfil: {{ $pessoa->name }}</h2>
                    <div class="row mtl">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="text-center mbl"><img src="{{URL::asset('resources/assets/img/')}}/{{ $pessoa->avatar }}" alt="" class="img-responsive"/></div>
                                <div class="text-center mbl"><a href="#" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                                Upload</a></div>
                            </div>
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nome</td>
                                        <td>{{ $pessoa->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $pessoa->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ramal</td>
                                        <td>{{ $pessoa->ramal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            @if ($corista)
                                                @if ($pessoa->coristas->left_on)
                                                <span class="label label-danger">Inativo</span>
                                                @else
                                                <span class="label label-success">Ativo</span>
                                                @endif
                                            @else
                                                <span class="label label-warning">Sem Corista</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Setor</td>
                                        <td>{{ $pessoa->setor }}</td>
                                    </tr>
                                    <tr>
                                        <td>Aniversário</td>
                                        <td>{{ $pessoa->aniversario }}</td>
                                    </tr>
                                    <tr>
                                        <td>Membro desde</td>
                                        <td>{{ $pessoa->created_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection