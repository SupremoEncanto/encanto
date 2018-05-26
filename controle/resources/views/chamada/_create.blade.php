<div class="modal fade" id="chamadaCreate" tabindex="-1" role="dialog" aria-labelledby="chamadaCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chamadaCreateLabel" style="display:  inline;">Adicionar Corista</h5>
                <span aria-hidden="true">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </span>
            </div> 
            <div class="modal-body">
                {!! Form::open(['url' => 'ensaios', 'class' => 'form-horizontal']) !!}
                <div class="row">
                    {!! Form::hidden('ensaio_id', $ensaio->id) !!}
                <div class="form-group col-md-10">
                    {!! Form::label('pessoa_id', 'Pessoa') !!}<br>
                    <select class="form-control" name="pessoa_id">
                        @foreach ($adicionaveis as $adicionavel)
                            <option value="{{ $adicionavel->id }}">{{ $adicionavel->name }}</option>
                        @endforeach
                    </select>
                </div>
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