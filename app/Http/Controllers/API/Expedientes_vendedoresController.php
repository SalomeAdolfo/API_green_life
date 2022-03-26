<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Expedientes_vendedoresResource;
use App\Models\Expedientes_vendedores;

class Expedientes_vendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Expedientes_vendedoresResource::collection(Expedientes_vendedores::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expedientes = Expedientes_vendedores::create($request->all());
        return new Expedientes_vendedoresResource($expedientes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new Expedientes_vendedoresResource(Expedientes_vendedores::findOrFail($id));
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
        $request -> validate(Expedientes_vendedores::reglasValidacion());
        $expedientes = Expedientes_vendedores::findOrFail($id);
        $expedientes -> update($request->all());
        return new Expedientes_vendedoresResource($expedientes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Expedientes_vendedores::finsOrFail($id);
        $delete -> delete();
        return response() -> json([
            "message" => "Datos borrados"
        ],202);
    }
}
