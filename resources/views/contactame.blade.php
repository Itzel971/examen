@extends('tema')


@section('Titulo','	Contactame')
@section('contenido')
<div class="container" style="
    background-color: #b3d7ff;
    /* background-color: white; */
">
  <h1 style="
    color: #f90404;
    text-align: center;
">Contactame</h1>

 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefono</label>
      <input type="Telefono" class="form-control" id="Telefono" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Pais</label>
      <input type="text" class="form-control" id="Pais">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Localidad</label>
      <input type="text" class="form-control" id="Localidad">
    </div>
    <div class="form-group">
    <label for="inputAddress">Comentario</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Deja tu comentario aqui:)">
  </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

  
  @endsection