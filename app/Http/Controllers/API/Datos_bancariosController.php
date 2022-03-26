<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Datos_bancariosResource;
use App\Models\Datos_bancarios;

class Datos_bancariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datos_bancariosResource::collection(Datos_bancarios::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_bancarios = Datos_bancarios::create($request->all());
        return new Datos_bancariosResource($datos_bancarios);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new Datos_bancariosResource(Datos_bancarios::findOrFail($id));
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
        $request->validate(Datos_bancarios::reglasValidacion());
        $datos_bancarios = Datos_bancarios::findOrFail($id);
        $datos_bancarios -> update($request->all());
        return new Datos_bancariosResource($datos_bancarios);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Datos_bancarios::findOrFail($id);
        $delete -> delete();
        return response()->json([
            "message" => "Datos borrados"
        ],202);
    }
}
