<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Categoria;
use App\Models\Subcategoria;
use JsValidator;

class SubcategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorias = Subcategoria::with('categoria:id,categoria')->get();// select id, categoria, estatus from categorias
        return view('subcategorias.index', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategoria = new Subcategoria;
        // enviamos listado de categorías posibles
        $categorias = Categoria::select('id', 'categoria')->orderBy('categoria', 'asc')->pluck('categoria', 'id');
        $validator = JsValidator::make(Subcategoria::reglasValidacion(), [], Subcategoria::etiquetas(), '#formulario');
        return view('subcategorias.form', compact('subcategoria', 'categorias', 'validator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->setValidator($request, Subcategoria::reglasValidacion(), [])->validate();
        Subcategoria::create($request->all());
        flash('Subcategoría creada satisfactoriamente')->success();
        return redirect()->route('subcategorias.index');
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
        $subcategoria = Subcategoria::findOrFail($id);
        // enviamos listado de categorías posibles
        $categorias = Categoria::select('id', 'categoria')->orderBy('categoria', 'asc')->pluck('categoria', 'id');
        $validator = JsValidator::make(Subcategoria::reglasValidacion(), [], Subcategoria::etiquetas(), '#formulario');
        return view('subcategorias.form', compact('subcategoria', 'categorias', 'validator'));
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
        $subcategoria = Subcategoria::findOrFail($id);
        $this->setValidator($request, Subcategoria::reglasValidacion(), [])->validate();
        $subcategoria->update($request->all());
        flash('Subcategoría actualizada satisfactoriamente')->success();
        return redirect()->route('subcategorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->delete();
        flash('Subcategoría eliminada satisfactoriamente')->warning();
        return redirect()->route('subcategorias.index');
    }

    protected function setValidator(Request $request, $validationRules, $replaceValidationRules = []) {
        return Validator::make($request->all(), array_merge($validationRules, $replaceValidationRules))
            ->setAttributeNames(Subcategoria::etiquetas());
    }
}
