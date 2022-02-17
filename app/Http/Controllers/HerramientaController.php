<?php

namespace App\Http\Controllers;

use App\Herramienta;
use App\Clasherramienta;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herramientas=Herramienta::all();
        $clasherramientas=Clasherramienta::all();
        $herramientas=Herramienta::paginate(500);
       
        return view('herramientas.index', compact('herramientas', 'clasherramientas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $clasherramientas=Clasherramienta::all();
        return view('herramientas.create', compact('clasherramientas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $herramienta=Herramienta::create($request->all());
        return redirect()->route('herramientas.index',$herramienta->id)
        ->with('info','herramienta  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Herramienta $herramienta)
    {
        return view('herramientas.show',compact('herramienta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(Herramienta $herramienta)
    {
        $clasherramientas=Clasherramienta::all();
        return view('herramientas.edit',compact('herramienta', 'clasherramientas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herramienta $herramienta)
    {
        $herramienta->update($request->all());
        return redirect()->route('herramientas.index', $herramienta->id)
        ->with('info','Registro herramienta Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return back()->with('info','eliminado correctamente');
    }
    public function upCantidad(Request $request)
    {    
        $herramientas = Herramienta::all();
        $request->validate([
            'adicionar.*.herramienta' => 'required',
            'adicionar.*.cantidad' => 'required'

        ]);
      
        foreach ((array) $request->adicionar as $key => $value) { 
            $idherramienta = $request->adicionar[$key]['herramienta'];
            $cantherra = $request->adicionar[$key]['cantidad'];
            foreach((array)$herramientas as $herramienta)
                {
                    
                    $herramienta->cantidad = $herramienta->cantidad + 2;
                    if($herramienta->id == $idherramienta)
                    {
                        $herramienta->cantidad = $herramienta->cantidad + $cantherra;
                        $herramienta->save();
                       
                    }
                  
                    
                }
            
            
           
        }
       
        return view('herramientas.ingresos', compact('herramientas')); 

    }
}
