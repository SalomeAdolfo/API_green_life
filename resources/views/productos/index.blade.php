@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Productos
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:15%">Producto</th>
                        <th style="width:15%">Costo Unitario</th>
                        <th style="width:10%">Precio Unitario</th>
                        <th style="width:10%">Existencias</th>
                        <th style="width:10%">Descripción</th>
                        <th style="width:13%">Imágen</th>
                        <th style="width:10%">Estatus</th>
                        <th style="width:17%">@can('productos.create')<a class="btn btn-primary btn-sm" title="Crear producto" href="{!! route('productos.create') !!}"><i class="fa fa-circle-plus"></i> Crear</a>@endcan</th>
                    </tr>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto-> producto}}</td>
                            <td>{{ $producto-> costo_unitario}}</td>
                            <td>{{ $producto-> precio_unitario}}</td>
                            <td>{{ $producto-> existencias}}</td>
                            <td>{{ $producto-> descripcion}}</td>
                            <td><img src="{{ $producto-> imagen}}" style="width: 50%" alt="Imagen no cargada"></td>
                            <td>{{ $producto-> estatus}}</td>
                            <td>
                                @can('productos.edit')
                                <a class="btn btn-secondary btn-sm" href="{!! route('productos.edit', $producto->id) !!}" title="Editar producto">Editar</a>
                                &nbsp;
                                @endcan
                                @can('productos.destroy')
                                <form action="{!! route('productos.destroy', $producto->id) !!}" class="d-inline" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                    <button class="btn btn-danger btn-sm" type="submit" title="Borrar">Borrar</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(function(e) {
    // Registrar manejador formularios de borrado
    $('form[class="d-inline"]').submit(function(e) {
        if (confirm('¿Realmente deseas eliminar el registro?\nLa operación será irreversible')) {
            return true;// Enviar sólo cuando se confirma borrado
        } else {
            e.preventDefault(); // prevenir acción predeterminada (submit)
        }
    })
})
</script>
@endsection