@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Compra
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:15%">Product</th>
                        <th style="width:15%">Cantidad</th>
                        <th style="width:10%">Precio</th>
                        <th style="width:10%">Total</th>
                        <th style="width:17%"><a class="btn btn-primary btn-sm" title="Crear producto" href="{!! route('ventas.create') !!}"><i class="fas fa-cart-plus"></i> Comprar</a></th>
                    </tr>
                    <tbody>
                        @foreach($venta as $venta)
                        <tr>
                            <td>{{ $venta-> Producto}}</td>
                            <td>{{ $venta-> cantidad}}</td>
                            <td>{{ $venta-> Precio}}</td>
                            <td>{{ $venta-> total}}</td>
                            <td>
                                
                                <a class="btn btn-secondary btn-sm" href="{!! route('ventas.edit', $venta->id) !!}" title="Editar producto"><i class="fas fa-pencil"></i></a>
                                &nbsp;
                                
                                <form action="{!! route('ventas.destroy', $venta->id) !!}" class="d-inline" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete" />
                                    <button class="btn btn-danger btn-sm" type="submit" title="Borrar"><i class="fas fa-trash-can"></i></button>
                                </form>
                            
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