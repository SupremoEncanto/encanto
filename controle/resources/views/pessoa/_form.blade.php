<form action="#" class="form-horizontal"><h3>Dados pessoais</h3>

    <div class="form-group"><label class="col-sm-3 control-label">Nome</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="text" placeholder="{{ $pessoa->name }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Email</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="email" placeholder="{{ $pessoa->email }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Aniversário</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-4"><input id="datepicker-normal" type="text" placeholder="{{ $pessoa->aniversario }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Telefone</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="text" placeholder="{{ $pessoa->telefone }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Ramal</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="text" placeholder="{{ $pessoa->ramal }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Setor</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="text" placeholder="{{ $pessoa->setor }}" class="form-control"/></div>
            </div>
        </div>
    </div>
    <hr/>
    {!! Form::submit($submitButton, ['class' => 'btn btn-green btn-block']) !!}
</form>