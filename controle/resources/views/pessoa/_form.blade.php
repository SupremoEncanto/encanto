<form action="#" class="form-horizontal"><h3>Dados pessoais</h3>
    <div class="form-group"><label class="col-sm-3 control-label">Nome</label>
        {!! Form::text('name', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Email</label>
        {!! Form::text('email', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Aniversário</label>
        {!! Form::text('aniversario', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Telefone</label>
        {!! Form::text('telefone', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Ramal</label>
        {!! Form::text('ramal', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <div class="form-group"><label class="col-sm-3 control-label">Setor</label>
        {!! Form::text('setor', null, ['class' => 'col-sm-9 controls']) !!}
        
    </div>
    <hr/>
    {!! Form::submit($submitButton, ['class' => 'btn btn-green btn-block']) !!}
</form>