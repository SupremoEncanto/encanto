@extends('layout.layout')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Coristas <span class="pull-right"><i class="fa fa-plus"></i> <i class="fa fa-edit"></i> <i class="fa fa-save"></i></span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Corista</th>
                    <th>Ramal</th>
                    <th>E-mail</th>
                    <th>Naipe</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">Claudia</a></td>
                    <td>4179</td>
                    <td>claudiave@stf.jus.br</td>
                    <td>Soprano</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">Divina Célia</a></td>
                    <td>3152</td>
                    <td>divina@stf.jus.br</td>
                    <td>Contralto</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">Geancarlo Vinhal</a></td>
                    <td>3958</td>
                    <td>geancarlo.vinhal@stf.jus.br</td>
                    <td>Baixo</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="#">Vitor Fortuna</a></td>
                    <td>3909</td>
                    <td>vitor.fortuna@stf.jus.br</td>
                    <td>Tenor</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection