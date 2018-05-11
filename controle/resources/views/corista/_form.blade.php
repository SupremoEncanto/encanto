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