<form action="#" class="form-horizontal"><h3>Corista</h3>
    <div class="form-group">
        {!! Form::label('naipes', 'Naipes') !!}<br>
        {!! Form::select('id', $naipes) !!}
        
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('pessoa_id', 'Pessoa') !!}<br>
                {{ Form::select('pessoa_id', ['Extraordinário', 'Regular'], null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
<div class="form-group"><label class="col-sm-3 control-label">Data de saída</label>

    <div class="col-sm-9 controls">
        <div class="row">
            {!! Form::date('date', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
        </div>
    </div>
</div>
<hr/>
{!! Form::submit($submitButton, ['class' => 'btn btn-green btn-block']) !!}
</form>