<?php

namespace App\Http\Controllers;

use App\Pedidoh;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use App\Pedidoherra;
use App\Trabajador;
use App\Herramienta;
use Illuminate\Http\Request;

class PedidohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidohs = Pedidoh::all();
        $trabajadors = Trabajador::all();
        $herramientas = Herramienta::all(); 
        $pedidoherras = Pedidoherra::all();
        $pedidohs = Pedidoh::paginate(500);

        return view('pedidohs.index', compact('pedidohs', 'trabajadors', 'herramientas', 'pedidoherras'))
            ->with('success', 'Pedido  Guardado con exito!!.');
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
        return view('pedidohs.create', compact('trabajadors', 'herramientas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidoh = Pedidoh::create($request->all());
        $herramientas = Herramienta::all();
        $prueba = $pedidoh->id;
        //return response()->json($prueba);
        $request->validate([
            'adicionar.*.herramienta' => 'required',
            'adicionar.*.cantidad' => 'required'

        ]);
        foreach ($request->adicionar as $key => $value) { 
            $prueba1 = $request->adicionar[$key]['herramienta'];
            $prueba2 = $request->adicionar[$key]['cantidad'];
            $pedidoherra = new Pedidoherra;
            $pedidoherra->idph = $prueba;
            $pedidoherra->herramienta = $prueba1;
            $pedidoherra->cantidad = $prueba2;
            $pedidoherra->save();
            foreach($herramientas as $herramienta)
            {
                if($herramienta->id == $prueba1)
                {
                    $herramienta->cantidad =  $herramienta->cantidad - $prueba2;
                    $herramienta->save();
                }
            }
        }
        // return response()->json($pedido);
        return redirect()->route('pedidohs.index', $pedidoh->id)
            ->with('success', 'Pedido  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidoh  $pedidoh
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidoh $pedidoh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidoh  $pedidoh
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidoh $pedidoh)
    {
        $trabajadors = Trabajador::all();
        $herramientas = Herramienta::all();
        return view('pedidohs.edit', compact('pedidoh', 'trabajadors', 'herramientas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidoh  $pedidoh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidoh $pedidoh)
    {
        $pedidoh->update($request->all());
        return redirect()->route('pedidohs.index', $pedidoh->id)
            ->with('success', 'Registro material Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidoh  $pedidoh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidoh $pedidoh)
    {
        $pedidoh->delete();
        return back()->with('success', 'eliminado correctamente');
    }
    public function generaPDF(Pedidoh $pedidoh)
    {
        
        $trabajadors=Trabajador::all();
        $pedidoherras=Pedidoherra::all();
        $herramientas=Herramienta::all();
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidohs.pdf', compact('pedidoh','trabajadors','pedidoherras','herramientas'))->setPaper('A4', 'portrait'); 

       return $pdf->stream('pedidohs.pdf');
    }
    public function reportetotal()
    {
        $pedidohs = Pedidoh::all();
        $trabajadors=Trabajador::all();
        $pedidoherras=Pedidoherra::all();
        $herramientas=Herramienta::all();
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidohs.reportespdf', compact('pedidohs','trabajadors','pedidoherras','herramientas'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('pedidohs.reportespdf');
    }
}
