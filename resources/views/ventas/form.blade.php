@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-box"></i> <?php echo $venta->exists ? 'Editar' : 'Crear' ?> compra
        </div>
        <div class="card-body">
            {{ html()->modelForm($venta, $venta->exists ? 'put' : 'post', $venta->exists ? route('ventas.update', $venta->id) : route('ventas.store'))->attributes(['id' => 'formulario'])->open() }}

            <div class="mb-3">
                <label for="producto" class="form-label">Producto</label>
                {{ html()->select('Producto', $producto)->placeholder('Selecciona el producto')->class('form-control form-control-sm') }}
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                {{ html()->text('cantidad')->class('form-control form-control-sm') }}
            </div>
            
            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                {{ html()->text('Precio')->class('form-control form-control-sm')->attributes(['type' => 'number', 'min' => 0, 'max' => '2000']) }}
            </div>
            
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                {{ html()->text('total')->class('form-control form-control-sm')->attributes(['type' => 'number', 'min' => 0, 'max' => '2000']) }}
            </div>

            {!! html()->button('<i class="fa fa-save"></i> guardar')->type('submit')->class('btn btn-primary btn-sm') !!}

            {{ html()->closeModelForm() }}
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
{!! $validator !!}
@endsection
