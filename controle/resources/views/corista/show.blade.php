@extends('layout.layout')

@section('title', 'Coristas')

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
<div class="col-md-12"><h2>Perfil: {{ $corista->pessoas->name }}</h2>

    <div class="row mtl">
        <div class="col-md-3">
            <div class="form-group">
                <div class="text-center mbl"><img src="http://lorempixel.com/640/480/business/1/" alt="" class="img-responsive"/></div>
                <div class="text-center mbl"><a href="#" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                    Upload</a></div>
            </div>
            <table class="table table-striped table-hover">
                <tbody>
                <tr>
                    <td>Nome</td>
                    <td>{{ $corista->pessoas->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $corista->pessoas->email }}</td>
                </tr>
                <tr>
                    <td>Ramal</td>
                    <td>{{ $corista->pessoas->ramal }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><span class="label label-success">Ativo</span></td>
                </tr>
                <tr>
                    <td>Setor</td>
                    <td>{{ $corista->pessoas->setor }}</td>
                </tr>
                <tr>
                    <td>Membro desde</td>
                    <td>{{ $corista->created_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-edit" data-toggle="tab">Editar Perfil</a></li>
                <li><a href="#tab-messages" data-toggle="tab">Editar Corista</a></li>
            </ul>
            <div id="generalTabContent" class="tab-content">
                <div id="tab-edit" class="tab-pane fade in active">
                    <form action="#" class="form-horizontal"><h3>Usuário</h3>

                        <div class="form-group"><label class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="email" placeholder="{{ $corista->pessoas->email }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Usuário</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="text" placeholder="{{ $corista->pessoas->email }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Senha</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-4"><input type="password" placeholder="senha" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Confirmar senha</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-4"><input type="password" placeholder="senha" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <h3>Dados pessoais</h3>

                        <div class="form-group"><label class="col-sm-3 control-label">Nome</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="text" placeholder="{{ $corista->pessoas->name }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Aniversário</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-4"><input id="datepicker-normal" type="text" placeholder="{{ $corista->pessoas->aniversario }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Telefone</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="text" placeholder="{{ $corista->pessoas->telefone }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Ramal</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="text" placeholder="{{ $corista->pessoas->ramal }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Setor</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="text" placeholder="{{ $corista->pessoas->setor }}" class="form-control"/></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <hr/>
                        
                        <button type="submit" class="btn btn-green btn-block">Finish</button>
                    </form>
                </div>
                <div id="tab-messages" class="tab-pane fade in">
                    <form action="#" class="form-horizontal"><h3>Usuário</h3>
                        <div class="form-group"><label class="col-sm-3 control-label">Naipe</label>

                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-4"><select class="form-control">
                                        <option value="1">Soprano</option>
                                        <option value="2">Contralto</option>
                                        <option value="3">Tenor</option>
                                        <option value="4">Baixo</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group"><label class="col-sm-3 control-label">Data de saída</label>

                        <div class="col-sm-9 controls">
                            <div class="row">
                                <div class="col-xs-9"><input type="text" placeholder="{{ $corista->left_on }}" class="form-control"/></div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                        
                        <button type="submit" class="btn btn-green btn-block">Finish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
          
            </div>
            
        
 
        
    </div>
</div>
@endsection