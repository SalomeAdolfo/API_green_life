<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Detalles_ventaResource;
use App\Models\Detalles_ventas;

class Detalles_ventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Detalles_ventaResource::collection(Detalles_ventas::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detallev = Detalles_ventas::create($request->all());
        return new Detalles_ventaResource($detallev);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new Detalles_ventaResource(Detalles_ventas::findOrFail($id));
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
        $request->validate(Detalles_ventas::reglasValidacion());
        $detallev = Detalles_ventas::findOrFail($id);
        $detallev -> update($request->all());
        return new Detalles_ventaResource($detallev);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Detalles_ventas::findOrFail($id);
        $delete -> delete();
        return response()->json([
            "message" => "Datos borrados"
        ],202);
    }
}
