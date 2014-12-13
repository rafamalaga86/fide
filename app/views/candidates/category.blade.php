@extends('layout')

@section('content')

<div class="container">
    <h1>{{ $category->name }}</h1>

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>



    </table>


</div> <!-- /container -->

@endsection