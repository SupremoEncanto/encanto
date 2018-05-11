<div class="col-md-12">
    <div class="form-group col-md-6"> 
        {!! Form::label('naipes', 'Naipes') !!}<br>
        {{ Form::select('naipe_id', ['Soprano', 'Contralto', 'Tenor', 'Baixo'], null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('joined_at', 'Entrou no dia') !!}<br>
        {!! Form::date('joined_at', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('left_on', 'Saiu em') !!}<br>
        {!! Form::date('left_on', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
    </div>
    {!! Form::hidden('pessoa_id', null, ['class' => 'form-control span12']) !!}
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary">Salvar</button>
</div>
