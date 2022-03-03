<?php

namespace App\Http\Controllers;

use App\Pedidocom;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use App\Pedido;
use App\Trabajador; 
use App\Material;
use App\Pedidoh;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $users=User::all();
        $pedidocoms=Pedidocom::paginate(500);
       
        return view('pedidocoms.index', compact('pedidocoms','trabajadors','pedidos','materials','users'))
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
        $users = User::all();

        return view('pedidocoms.create', compact('trabajadors','materials', 'users'));
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
        $idpedidocom = $pedidocom->id;
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $idmaterial = $request->addMoreInputFields[$key]['material'];
            $cantidadmaterial = $request->addMoreInputFields[$key]['cantidad']; 
            $pedido = new Pedido;
            $pedido->idpedidocom = $idpedidocom;
            $pedido->material = $idmaterial;
            $pedido->cantidad =  $cantidadmaterial;
            $pedido->save();
            foreach($materials as $material)
            {
                if($material->id == $idmaterial)
                {
                    $material->cantidad =  $material->cantidad - $cantidadmaterial;
                    $material->save();
                }
            }
        }
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
        $users=User::all();
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidocoms.pdf', compact('users','pedidocom','trabajadors','materials','pedidos'))->setPaper('A4', 'portrait'); 

       return $pdf->stream('pedidocoms.pdf');
    }
    public function reportetotal()
    {
        $pedidocoms = Pedidocom::all();
        $trabajadors=Trabajador::all();
        $pedidos=Pedido::all();
        $users=User::all();
        $materials=Material::all();
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('pedidocoms.reportespdf', compact('users','pedidocoms','trabajadors','materials','pedidos'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('pedidocoms.reportespdf');
    }
    public function reporte(Request $request)
    {
        $fechainicio = $request->get('fechaini');
        $fechafin = $request->get('fechafin');
        $trabajadors=Trabajador::all();
        $pedidocoms=Pedidocom::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidos'] = DB::table('pedidos')
        ->where('created_at', '>=', '2022-03-01' )
        ->select('pedidos.*')->get();
  
       /*  return response()->json($datos); */
        return view('pedidocoms.reporte',$datos, compact('trabajadors','pedidocoms','materials','users'));
        

    }
    public function reportefechas(Request $request)
    {
        $fechainicio = $request->all();
        return response()->json($request);
        $fechafin = $request->get('fechafin');
        $pedidocoms = Pedidocom::all();
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidos'] = DB::table('pedidos')
        ->where('created_at', '>=', '2022-03-01' )
        ->select('pedidos.*')->get();
      /*     return response()->json($datos); */
       $pdf = PDF::loadView('pedidocoms.reportefechas',$datos, compact('pedidocoms','trabajadors','materials','users'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('pedidocoms.reportefechas');
    }
    public function reporte_fecha(Request $request)
    {
        $fechainicio = $request->get('fechaini1');
        $fechafin = $request->get('fechafin1');
      /*   return response()->json($fechainicio); */
        $pedidocoms = Pedidocom::all();
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidos'] = DB::table('pedidos')
        ->whereBetween('created_at', [$fechainicio, $fechafin])
        ->select('pedidos.*')->get();
      /*     return response()->json($datos); */
       $pdf = PDF::loadView('pedidocoms.reportefechas',$datos, compact('pedidocoms','trabajadors','materials','users'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('pedidocoms.reportefechas');
    }
    
   
   
}
