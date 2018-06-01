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
                {!! Form::open(['url' => 'coristas', 'class' => 'form-horizontal']) !!}
                <div class="row">
                <div class="form-group col-md-6" style="margin-right:3px;"> 
                    {!! Form::label('voz', 'Naipes') !!}<br>
                    {!! Form::select('naipe_id', $voz, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('pessoa_id', 'Pessoa') !!}<br>
                    <select class="form-control" name="pessoa_id">
                        @foreach ($pessoas as $pessoa)
                            <option value="{{ $pessoa->id }}">{{ $pessoa->name }}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="row">
                    {!! Form::label('joined_at', 'Entrou no dia') !!}<br>
                    {!! Form::date('joined_at', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            {!! Form::close() !!}
            @include('errors.list')
        </div>
    </div>
</div>