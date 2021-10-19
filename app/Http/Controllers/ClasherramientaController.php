<?php

namespace App\Http\Controllers;

use App\Clasherramienta;
use Illuminate\Http\Request;

class ClasherramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasherramientas=Clasherramienta::all();
        $clasherramientas=Clasherramienta::paginate(100);
       
        return view('clasherramientas.index', compact('clasherramientas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasherramientas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasherramienta=Clasherramienta::create($request->all());
        return redirect()->route('clasherramientas.index',$clasherramienta->id)
        ->with('info','clasherramienta  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clasherramienta  $clasherramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Clasherramienta $clasherramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clasherramienta  $clasherramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasherramienta $clasherramienta)
    {
        return view('clasherramientas.edit',compact('clasherramienta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clasherramienta  $clasherramienta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasherramienta $clasherramienta)
    {
        $clasherramienta->update($request->all());
        return redirect()->route('clasherramientas.index', $clasherramienta->id)
        ->with('info','Registro clasherramienta Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clasherramienta  $clasherramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasherramienta $clasherramienta)
    {
        $clasherramienta->delete();
        return back()->with('info','eliminado correctamente');
    }
}
