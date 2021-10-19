<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials=Material::all();
        $materials=Material::paginate(500);
       
        return view('materials.index', compact('materials')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material=Material::create($request->all());
        return redirect()->route('materials.index',$material->id)
        ->with('info','material  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        return view('materials.show',compact('materials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('materials.edit',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $material->update($request->all());
        return redirect()->route('materials.index', $material->id)
        ->with('info','Registro material Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return back()->with('info','eliminado correctamente');
    }
    public function upCantidad()
    {    
      /*   $id = $request->id;
        $material= Material::findOrFail($id);
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
            
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $material= Material::findOrFail($request->id);
            $material->descripcion = $request->addMoreInputFields[$key]['material'];
            $material->cantidad = $material->cantidad + $request->addMoreInputFields[$key]['cantidad']; 
           
            $material->save();
           // Pedido::create($value);
        }
       // return response()->json($pedido);
        return redirect()->route('materials.index')
        ->with('success','Pedido  Guardado con exito!!.'); */
        $materials=Material::all();
        $materials=Material::paginate(500);
       
        return view('materials.ingresos', compact('materials')); 

    }
}
