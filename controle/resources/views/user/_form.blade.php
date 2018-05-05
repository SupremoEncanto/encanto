<form action="#" class="form-horizontal"><h3>Usuário</h3>
    <div class="form-group"><label class="col-sm-3 control-label">Usuário</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-9"><input type="text" placeholder="email" class="form-control"/></div>
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
    {!! Form::submit($submitButton, ['class' => 'btn btn-green btn-block']) !!}
</form>