<?php

namespace App\Http\Controllers;

use App\Trabajador;
use App\User;
use App\Proyecto;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadors=Trabajador::all();
        $users=User::all();
        $proyectos=Proyecto::all();
        $trabajadors=Trabajador::paginate(500);
        return view('trabajadors.index', compact('trabajadors','users','proyectos')); 
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::all();
        $proyecto=Proyecto::all();
        return view('trabajadors.create', compact('user','proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador=Trabajador::create($request->all());
        return redirect()->route('trabajadors.index',$trabajador->id)
        ->with('info','trabajador  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajador $trabajador)
    {
        $user=User::all();
        $proyecto=Proyecto::all();
        return view('trabajadors.edit',compact('trabajador','user','proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajador $trabajador)
    {
        $trabajador->update($request->all());
        return redirect()->route('trabajadors.index', $trabajador->id)
        ->with('info','Registro trabajador Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return back()->with('info','eliminado correctamente');
    }
}
