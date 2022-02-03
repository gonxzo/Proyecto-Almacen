<?php

namespace App\Http\Controllers;

use App\Pedidocom;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use App\Pedido;
use App\Trabajador; 
use App\Material;
use App\Pedidoh;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class PedidocomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidocoms=Pedidocom::all();
        $trabajadors=Trabajador::all();
        $pedidos=Pedido::all();
        $materials=Material::all();
        $pedidocoms=Pedidocom::paginate(500);
       
        return view('pedidocoms.index', compact('pedidocoms','trabajadors','pedidos','materials'))
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
        $materials = Material::all();
        return view('pedidocoms.create', compact('trabajadors','materials'));
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
        $pedidocom=Pedidocom::create($request->all());
        $prueba = $pedidocom->id;
        //return response()->json($prueba);
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
            
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $prueba1 = $request->addMoreInputFields[$key]['material'];
            $prueba2 = $request->addMoreInputFields[$key]['cantidad']; 
            $pedido = new Pedido;
            $pedido->idtrab = $prueba;
            $pedido->material = $prueba1;
            $pedido->cantidad =  $prueba2;
            $pedido->save();
            foreach($materials as $material)
            {
                if($material->id == $prueba1)
                {
                    $material->cantidad =  $material->cantidad - $prueba2;
                    $material->save();
                }
            }
            
           // Pedido::create($value);
        }
       // return response()->json($pedido);
        return redirect()->route('pedidocoms.index',$pedidocom->id)
        ->with('success','Pedido  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidocom  $pedidocom
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidocom $pedidocom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidocom  $pedidocom
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidocom $pedidocom)
    {
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        return view('pedidocoms.edit',compact('pedidocom', 'trabajadors','materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidocom  $pedidocom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedidocom $pedidocom)
    {
        $pedidocom->update($request->all());
        return redirect()->route('pedidocoms.index', $pedidocom->id)
        ->with('success','Registro material Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidocom  $pedidocom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidocom $pedidocom)
    {
        $pedidocom->delete();
        return back()->with('success','eliminado correctamente');
    }
    public function generaPDF(Pedidocom $pedidocom)
    {
        
        $trabajadors=Trabajador::all();
        $pedidos=Pedido::all();
        $materials=Material::all();
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidocoms.pdf', compact('pedidocom','trabajadors','materials','pedidos'))->setPaper('A4', 'portrait'); 

       return $pdf->stream('pedidocoms.pdf');
    }
    public function reportetotal()
    {
        $pedidocoms = Pedidocom::all();
        $trabajadors=Trabajador::all();
        $pedidos=Pedido::all();
        $materials=Material::all();
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidocoms.reportespdf', compact('pedidocoms','trabajadors','materials','pedidos'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('pedidocoms.reportespdf');
    }
    
   
   
}
