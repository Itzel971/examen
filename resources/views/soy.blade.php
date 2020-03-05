@extends('tema')


@section('Titulo','Soy')
@section('contenido')
<div class="container" style="
    background-color: #b3d7ff;
    /* background-color: white; */
">

  <h1 style="
    color: #f90404;
    text-align: center;
">Datos</h1>
    <br>
     <img width="200px" height="200px" src = "{{ asset('/Bootstrap/images/perfil.jpg')}}" />
     <br>
@foreach ($informacion as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  
  @endsection