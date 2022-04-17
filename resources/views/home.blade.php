@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8" style="justify-content: center;align-content: center;">
  <!-- Card de menú-->
      <div class="card text-center" style="border-radius: 25px; align-self: center;">
        <div class="card-body">
          <div class="list-group">
            <h1 class="text-center">Menú</h1>
            <a name="item" id="" class="btn btn-primary dark boton" style="margin-top: 15px;background-color: white; color: black; font-size: 20px; border-color: black;" href="{{ route('productos.index') }}" role="button"><i class="fas fa-carrot"></i>Productos</a>
            <a name="item" id="" class="btn btn-primary dark boton" style="margin-top: 15px;background-color: white; color: black; font-size: 20px; border-color: black;" href="{{ route('ventas.index') }}" role="button"><i class="fas fa-cart-arrow-down"></i>Carrito</a>
          </div>
        </div>
      </div>
      <!-- Fin menú-->

    </div>
  </div>
  @endsection