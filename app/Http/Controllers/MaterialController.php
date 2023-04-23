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
    public function upCantidad(Request $request)
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
                    dd("ingresa aqui");
                    $material->cantidad = $material->cantidad + 2;
                    if($material->id == $idmaterial)
                    {
                        $material->cantidad = $material->cantidad + $cantmaterial;
                        $material->save();
                       
                    }
                  
                    
                }
            
            
           
        }
       
        return view('materials.ingresos', compact('materials')); 

    }
    public function reportes()
    {
        $materials=Material::all();
        $materials=Material::paginate(500);
       
        return view('materials.reportes', compact('materials')); 
    }

}
