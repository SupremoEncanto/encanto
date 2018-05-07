
<div class="form-body pal">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('date', 'Data do ensaio:') !!}
                <div class="input-icon right">
                    <i class="fa fa-calendar"></i>
                    {!! Form::date('date', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('regular', 'Ensaio regular?') !!}<br>
                {{ Form::select('regular', ['Extraordinário', 'Regular'], null, ['class' => 'form-control']) }}
            </div>
        </div> 
    </div> 
</div>
<div class="form-actions text-right pal">
        {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>
