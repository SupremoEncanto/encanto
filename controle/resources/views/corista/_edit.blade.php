<div class="modal fade" id="coristaEdit" tabindex="-1" role="dialog" aria-labelledby="coristaCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="coristaCreateLabel" style="display:  inline;">Editar Corista</h5>
                <span aria-hidden="true">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </span>
            </div> 
            <div class="modal-body">
                {!! Form::model(['url' => 'coristas', 'class' => 'form-horizontal']) !!}
                <div class="row">
                <div class="form-group col-md-6" style="margin-right:3px;"> 
                    {!! Form::label('naipes', 'Naipes') !!}<br>
                    {!! Form::select('naipe_id', $naipes, $corista->naipes->naipe, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('joined_at', 'Entrou no dia') !!}<br>
                    {!! Form::date('joined_at', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
                </div>
                </div>
                <div class="row">
                    {!! Form::label('left_on', 'Saiu em') !!}<br>
                    {!! Form::date('left_on', null, ['class' => 'form-control span12'], 'd/m/Y') !!}
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