@extends('layouts.admin')

<?php
$message = Session::get('message');
?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
    <strong>Atencion</strong> Usuario creado con exito
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@section('content')
<table class="table">
    <thead>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Operacion</th>
</thead>
@foreach($users as $user)
<tbody>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td></td>
</tbody>
@endforeach
</table>
@endsection