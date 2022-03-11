<?php

namespace App\Http\Controllers;

use App\Pedidoherra;
use App\Pedidoh;
use App\Trabajador;
use App\Herramienta;
use App\Gastoherras;
use App\User;
use Illuminate\Http\Request;

class PedidoherraController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidohs=Pedidoh::all();
        $trabajadors=Trabajador::all();
        $herramientas=Herramienta::all();
        $users=User::all();
        $pedidoherras=Pedidoherra::paginate(500);
        $pedidoherras=Pedidoherra::paginate(500);
       
        return view('pedidoherras.index', compact('pedidohs','trabajadors','herramientas','users','pedidoherras'))
        ->with('success','Pedido  Guardado con exito!!.'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajadors = Trabajador::all();
        $herramientas = Herramienta::all();
        $users = User::all();
        $pedidohs = Pedidoh::all();
        $pedidoherras = Pedidoherra::all();
        return view('pedidoherras.create', compact('pedidohs','pedidoherras','trabajadors','herramientas', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidoherras = Pedidoherra::all();
        $iduser = $request->get('idpedidoh');
        $request->validate([
            'adicionar.*.herramienta' => 'required',
            'adicionar.*.cantidad' => 'required'
        ]);
        foreach ($request->adicionar as $key => $value) {
            $idmaterial = $request->adicionar[$key]['herramienta'];
            $cantidadmaterial = $request->adicionar[$key]['cantidad']; 
            $gasto = new Gastoherras;
            $gasto->idpedidoh =  $iduser;
            $gasto->idherramienta = $idmaterial;
            $gasto->cantidad =  $cantidadmaterial;
            $gasto->save();
            foreach($pedidoherras as $pedido)
            {
                if($pedido->herramienta == $idmaterial)
                {
                    $pedido->cantidad =  $pedido->cantidad - $cantidadmaterial;
                    
                    $pedido->save();
                }
            }
        }
        return redirect()->route('pedidoherras.index')
        ->with('success','Pedido  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidoherra  $pedidoherra
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidoherra $pedidoherra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidoherra  $pedidoherra
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidoherra $pedidoherra)
    {
        $trabajador=Trabajador::all();
        $herramienta=Herramienta::all();
        return view('pedidoherras.edit',compact('pedidoherra', 'herramienta','trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidoherra  $pedidoherra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidoherra $pedidoherra)
    {
        $pedidoherra->update($request->all());
        return redirect()->route('pedidoherras.index', $pedidoherra->id)
        ->with('success','Registro material Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidoherra  $pedidoherra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidoherra $pedidoherra)
    {
        $pedidoherra->delete();
        return back()->with('success','eliminado correctamente');
    }
}
