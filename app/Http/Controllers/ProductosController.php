<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use JsValidator;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= Auth::user();
        if(!$user->can('productos.create')){
            abort(403,'Sin acceso a esta sección');
        }
        $producto = new Productos;
        $categoria = Categoria::select('id', 'categoria')->orderBy('categoria', 'asc')->pluck('categoria', 'id');
        $validator = JsValidator::make(Productos::reglasValidacion(), [], Productos::etiquetas(), '#formulario');

        return view('productos.form', compact('producto','categoria','validator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->setValidator($request, Productos::reglasValidacion(), [])->validate();
        Productos::create($request->all());
        //flash('Producto creado !!')->success();
        return redirect()->route('productos.index');

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
        $user = Auth::user();
        if(!$user->can('productos.edit')) {
            abort(403, 'Sin acceso a esta sección');
        }
        $producto = Productos::findOrFail($id);
        $categoria = Categoria::select('id','categoria')->orderBy('categoria','asc')->pluck('categoria','id');
        $validator = JsValidator::make(Productos::reglasValidacion(), [], Productos::etiquetas(), '#formulario');
        return view ('productos.form', compact('producto','categoria','validator'));
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
        $user = Auth::user();
        if(!$user->can('productos.update')) {
            abort(403, 'Sin acceso a esta sección');
        }
        $producto  = Productos::findOrFail($id);
        $this->setValidator($request, Productos::reglasValidacion(), [])->validate();
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if(!$user->can('productos.destroy')) {
            abort(403, 'Sin acceso a esta sección');
        }
        $producto = Productos::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
    protected function setValidator(Request $request, $validationRules, $replaceValidationRules = []) {
        return Validator::make($request->all(), array_merge($validationRules, $replaceValidationRules))
            ->setAttributeNames(Productos::etiquetas());
    }
}
