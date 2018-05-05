<form action="#" class="form-horizontal"><h3>Corista</h3>
    <div class="form-group"><label class="col-sm-3 control-label">Naipe</label>

        <div class="col-sm-9 controls">
            <div class="row">
                <div class="col-xs-4"><select class="form-control">
                    @foreach ($naipes as $naipe)
                    <option value="{{ $naipe->id }}">{{ $naipe->naipe }}</option>
                    @endforeach
                </select></div>
            </div>
        </div>
    </div>
<div class="form-group"><label class="col-sm-3 control-label">Data de saída</label>

    <div class="col-sm-9 controls">
        <div class="row">
            @if ($pessoa->coristas->left_on)
            <div class="col-xs-9"><input type="date" value="{{ Carbon\Carbon::parse($pessoa->coristas->left_on)->format('d/m/Y') }}" class="form-control"/></div>
            @else
            <div class="col-xs-9"><input type="date" value="" class="form-control"/></div>
            @endif
            
        </div>
    </div>
</div>
<hr/>
{!! Form::submit($submitButton, ['class' => 'btn btn-green btn-block']) !!}
</form>