

@extends('tema')


@section('Titulo','Mi Arbol Familiar')
@section('contenido')
<div class="container" style="
    background-color: #b3d7ff;
    /* background-color: white; */
">
  <h4 style="
    color: #f90404;
    text-align: center;
"</h1>Abuelos Paternos</h4>
    <br>
@foreach ($Apaterno as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  

  <h4 style="
    color: #f90404;
    text-align: center;
">Abuelos Maternos</h4>
    <br>
@foreach ($Amaterno as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h4 style="
    color: #f90404;
    text-align: center;
">Padres</h4>
    <br>
@foreach ($padres as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h4 style="
    color: #f90404;
    text-align: center;
">Hijos</h4>
    <br>
@foreach ($hijos as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  
  @endsection