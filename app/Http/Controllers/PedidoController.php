<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Material;
use App\Trabajador;
use App\Pedidocom;
use App\Gasto;
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
        $trabajadors = Trabajador::all();
        $materials = Material::all();
        $users = User::all();
        $pedidocoms = Pedidocom::all();
        $pedidos = Pedido::all();
        return view('pedidos.create', compact('pedidos','pedidocoms','trabajadors','materials', 'users'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos = Pedido::all();
        $iduser = $request->get('idpedidocom');
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $idmaterial = $request->addMoreInputFields[$key]['material'];
            $cantidadmaterial = $request->addMoreInputFields[$key]['cantidad']; 
            $gasto = new Gasto;
            $gasto->idpedidocom = $iduser;
            $gasto->idmaterial = $idmaterial;
            $gasto->cantidad =  $cantidadmaterial;
            $gasto->save();
            foreach($pedidos as $pedido)
            {
                if($pedido->material == $idmaterial)
                {
                    $pedido->cantidad =  $pedido->cantidad - $cantidadmaterial;
                    
                    $pedido->save();
                }
            }
        }
        return redirect()->route('pedidos.index')
        ->with('success','Pedido  Guardado con exito!!.');
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
