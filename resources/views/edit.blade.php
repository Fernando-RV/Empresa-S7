@extends('layout')

@section('title','Editar Servicio')

@section('content')
<table cellpadding="3" cellpadding="5">
<tr>
    <th colspan="4">Editar Servicio</th>
</tr>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('servicios.update', $servicio) }}" method="post">
@csrtf @method('PATCH')
<tr>
    <th>Titulo</th>
    <td><input type="text" name="titulo" value="{{ old('titulo',$servicio->titulo) }}"></td>
</tr>  
<tr> 
    <th>Descripcion</th>
    <td><input type="text" name="descripcion" value="{{ old('descripcion',$servicio->descripcion) }}"></td>
</tr>  
<tr>
    <td colspan="2" style="text-align: center;"><button>Actualizar</button></td>
</tr>   
</form>
</table>
@endsection