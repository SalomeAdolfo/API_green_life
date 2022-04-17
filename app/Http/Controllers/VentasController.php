<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Ventas;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use JsValidator;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venta = Ventas::all();
        $producto = Productos::select('precio_unitario', 'precio_unitario')->orderBy('precio_unitario', 'asc')->pluck('precio_unitario', 'precio_unitario');
        return view('ventas.index', compact('venta', 'producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = new Ventas;
        $producto = Productos::select('producto', 'producto')->orderBy('producto', 'asc')->pluck('producto', 'producto');
        $validator = JsValidator::make(Ventas::reglasValidacion(), [], Ventas::etiquetas(), '#formulario');
        return view('ventas.form', compact('venta','producto', 'validator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> setValidator($request, Ventas::reglasValidacion(),[])->validate();
        Ventas::create($request->all());
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Ventas::findOrFail($id);
        $producto = Productos::select('producto', 'producto')->orderBy('producto', 'asc')->pluck('producto', 'producto');
        $validator = JsValidator::make(Ventas::reglasValidacion(), [], Ventas::etiquetas(), '#formulario');
        return view('ventas.form', compact('venta', 'producto', 'validator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venta = Ventas::findOrFail($id);
        $this->setValidator($request, Ventas::reglasValidacion(), [])->validate();
        $venta -> update($request->all());
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Ventas::findOrFail($id);
        $venta->delete();
        return redirect()->route('ventas.index');
    }
    protected function setValidator(Request $request, $validationRules, $replaceValidationRules = []) {
        return Validator::make($request->all(), array_merge($validationRules, $replaceValidationRules))
            ->setAttributeNames(Ventas::etiquetas());
    }
}
