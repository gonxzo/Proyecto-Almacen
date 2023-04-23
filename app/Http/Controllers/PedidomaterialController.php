<?php

namespace App\Http\Controllers;

use App\Pedidomaterial;
use App\Material;
use App\Trabajador;
use App\Regpedidomaterial;
use App\Gastomaterial;
use App\User;
use Illuminate\Http\Request;

class PedidomaterialController extends Controller
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
        $regpedidomaterials=Regpedidomaterial::all();
        $users=User::all();
        $pedidomaterials=Pedidomaterial::all();
        $pedidomaterials=Pedidomaterial::paginate(500);
        return view('pedidomaterials.index', compact('pedidomaterials','materials','trabajadors','users','regpedidomaterials'));
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
        $regpedidomaterials=Regpedidomaterial::all();
        $pedidomaterials=Pedidomaterial::all();
        return view('pedidomaterials.create', compact('pedidomaterials','regpedidomaterials','trabajadors','materials', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidomaterials=Pedidomaterial::all();
        $iduser = $request->get('idregpedido');
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $idmaterial = $request->addMoreInputFields[$key]['material'];
            $cantidadmaterial = $request->addMoreInputFields[$key]['cantidad']; 
            $gastomaterial = new Gastomaterial;
            $gastomaterial->idregpedido = $iduser;
            $gastomaterial->idmaterial = $idmaterial;
            $gastomaterial->cantidad =  $cantidadmaterial;
            $gastomaterial->save();
            foreach($pedidomaterials as $pedido)
            {
                if($pedido->material == $idmaterial)
                {
                    $pedido->cantidad =  $pedido->cantidad - $cantidadmaterial;
                    
                    $pedido->save();
                }
            }
        }
        return redirect()->route('pedidomaterials.index')
        ->with('success','Pedido  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidomaterial  $pedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidomaterial $pedidomaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidomaterial  $pedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidomaterial $pedidomaterial)
    {
        $material=Material::all();
        $regpedidomaterial=Regpedidomaterial::all();
        return view('pedidomaterials.edit',compact('pedidomaterial','material','regpedidomaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidomaterial  $pedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidomaterial $pedidomaterial)
    {
        $pedidomaterial=Pedidomaterial::create($request->all());
        return redirect()->route('pedidomaterials.index',$pedidomaterial->id)
        ->with('info','pedido  Guardado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidomaterial  $pedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidomaterial $pedidomaterial)
    {
        $pedidomaterial->delete();
        return back()->with('info','eliminado correctamente');
    }
}
