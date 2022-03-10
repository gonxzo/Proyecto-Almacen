<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Material;
use App\Trabajador;
use App\Pedidocom;

use App\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials=Material::all();
        $trabajadors=Trabajador::all();
        $pedidocoms=Pedidocom::all();
        $users=User::all();
        $pedidos=Pedido::all();
        $pedidos=Pedido::paginate(500);
        return view('pedidos.index', compact('pedidos','materials','trabajadors','users','pedidocoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $materials = Material::all();
            $request->validate([
                'adicionar.*.herramienta' => 'required',
                'adicionar.*.cantidad' => 'required'
            ]);
            foreach ((array) $request->adicionar as $key => $value) { 
                $idmaterial = $request->adicionar[$key]['material'];
                $cantmaterial = $request->adicionar[$key]['cantidad'];
                foreach((array)$materials as $material)
                    {
                        if($material->id == $idmaterial)
                        {
                            $material->cantidad = $material->cantidad + $cantmaterial;
                            $material->save();
                        }                 
                    }
            }
            return view('materials.ingresos', compact('materials'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $material=Material::all();
        $pedidocom=Pedidocom::all();
        return view('pedidos.edit',compact('pedido','material','pedidocom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido=Pedido::create($request->all());
        return redirect()->route('pedidos.index',$pedido->id)
        ->with('info','pedido  Guardado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return back()->with('info','eliminado correctamente');
    }
}
