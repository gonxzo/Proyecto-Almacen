<?php

namespace App\Http\Controllers;

use App\Regpedidomaterial;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use App\Pedidomaterial;
use App\Trabajador; 
use App\Material;
use App\Regpedidoherramienta;
use App\Herramienta;
use App\Gastomaterial;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class RegpedidomaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regpedidomaterials=Regpedidomaterial::all();
        $trabajadors=Trabajador::all();
        $pedidomaterials=Pedidomaterial::all();
        $materials=Material::all();
        $users=User::all();
        $regpedidomaterials=Regpedidomaterial::paginate(500);
       
        return view('regpedidomaterials.index', compact('regpedidomaterials','trabajadors','pedidomaterials','materials','users'))
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

        return view('regpedidomaterials.create', compact('trabajadors','materials', 'users'));
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
        $regpedidomaterial=Regpedidomaterial::create($request->all());
        $idregpedidomaterial = $regpedidomaterial->id;
        $request->validate([
            'addMoreInputFields.*.material' => 'required',
            'addMoreInputFields.*.cantidad' => 'required'
        ]);
        foreach ($request->addMoreInputFields as $key => $value) {
            $idmaterial = $request->addMoreInputFields[$key]['material'];
            $cantidadmaterial = $request->addMoreInputFields[$key]['cantidad']; 
            $pedidomaterial = new PedidoMaterial;
            $pedidomaterial->idpedidocom = $idregpedidomaterial;
            $pedidomaterial->material = $idmaterial;
            $pedidomaterial->cantidad =  $cantidadmaterial;
            $pedidomaterial->save();
            foreach($materials as $material)
            {
                if($material->id == $idmaterial)
                {
                    $material->cantidad =  $material->cantidad - $cantidadmaterial;
                    $material->save();
                }
            }
        }
        return redirect()->route('regpedidomaterials.index',$regpedidomaterial->id)
        ->with('success','Pedido  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regpedidomaterial  $regpedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Regpedidomaterial $regpedidomaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regpedidomaterial  $regpedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Regpedidomaterial $regpedidomaterial)
    {
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        $users=User::all();
        return view('regpedidomaterials.edit',compact('regpedidomaterial', 'trabajadors','materials', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regpedidomaterial  $regpedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regpedidomaterial $regpedidomaterial)
    {
        $regpedidomaterial->update($request->all());
        return redirect()->route('regpedidomaterials.index', $regpedidomaterial->id)
        ->with('success','Registro material Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regpedidomaterial  $regpedidomaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regpedidomaterial $regpedidomaterial)
    {
        $regpedidomaterial->delete();
        return back()->with('success','eliminado correctamente');
    }
    public function generaPDF(Regpedidomaterial $regpedidomaterial)
    {
        
        $trabajadors=Trabajador::all();
        $pedidomaterials=Pedidomaterial::all();
        $materials=Material::all();
        $users=User::all();
        /* return response()->json($ids); */
       $pdf = PDF::loadView('regpedidomaterials.pdf', compact('users','regpedidomaterial','trabajadors','materials','pedidomaterials'))->setPaper('A4', 'portrait'); 

       return $pdf->stream('regpedidomaterials.pdf');
    }
    public function reportetotal()
    {
        $pedidomaterials = Pedidomaterial::all();
        $trabajadors=Trabajador::all();
        $pedidomaterials=Pedidomaterial::all();
        $users=User::all();
        $gastomaterials=Gastomaterial::all();
        $materials=Material::all(); 
        
        /* return response()->json($ids); */
       $pdf = PDF::loadView('regpedidomaterial.reportespdf', compact('gastomaterials','users','pedidomaterials','trabajadors','materials','pedidomaterials'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('regpedidomaterial.reportespdf');
    }
    public function reporte(Request $request)
    {
        $fechainicio = $request->get('fechaini');
        $fechafin = $request->get('fechafin');
        $trabajadors=Trabajador::all();
        $regpedidomaterials=Regpedidomaterial::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidomaterials'] = DB::table('pedidomaterials')
        ->where('created_at', '>=', '2022-03-01' )
        ->select('pedidomaterials.*')->get();
  
       /*  return response()->json($datos); */
        return view('regpedidomaterials.reporte',$datos, compact('trabajadors','regpedidomaterials','materials','users'));
        

    }
    public function reportefechas(Request $request)
    {
        $fechainicio = $request->all();
        $regpedidomaterials = Regpedidomaterial::all();
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidomaterials'] = DB::table('pedidomaterials')
        ->where('created_at', '>=', '2022-03-01' )
        ->select('pedidomaterials.*')->get();
      /*     return response()->json($datos); */
       $pdf = PDF::loadView('regpedidomaterials.reportefechas',$datos, compact('regpedidomaterials','trabajadors','materials','users'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('regpedidomaterials.reportefechas');
    }
    public function reporte_fecha(Request $request)
    {
        $fechainicio = $request->get('fechaini1');
        $fechafin = $request->get('fechafin1');
      /*   return response()->json($fechainicio); */
        $regpedidomaterials = Regpedidomaterial::all();
        $trabajadors=Trabajador::all();
        $materials=Material::all();
        $users=User::all(); 
        $datos['pedidomaterials'] = DB::table('pedidomaterials')
        ->whereBetween('created_at', [$fechainicio, $fechafin])
        ->select('pedidomaterials.*')->get();
      /*     return response()->json($datos); */
       $pdf = PDF::loadView('regpedidomaterials.reportefechas',$datos, compact('regpedidomaterials','trabajadors','materials','users'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('regpedidomaterials.reportefechas');
    }
   
    public function reportefechas1(Request $request)
    {
        $fechainicio = $request->get('fechaini');
        $fechafin = $request->get('fechafin');
        $regpedidoherramientas = Regpedidoherramienta::all();
        $users = User::all();
        $trabajadors=Trabajador::all();
        $herramientas=Herramienta::all();
        $datos['pedidoherramientas'] = DB::table('pedidoherramientas')
        ->whereBetween('created_at', [$fechainicio, $fechafin])
        ->select('pedidoherramientas.*')->get();
        
        /* return response()->json($ids); */
        $pdf = PDF::loadView('regpedidoherramientas.reportefechas', $datos,compact('users','regpedidoherramientas','trabajadors','herramientas'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('regpedidoherramientas.reportefechas');
    }

    public function reporte_fecha1(Request $request)
    {
        $fechainicio = $request->get('fechaini');
        $fechafin = $request->get('fechafin');
        $regpedidoherramientas = Regpedidoherramienta::all();
        $users = User::all();
        $trabajadors=Trabajador::all();
        $herramientas=Herramienta::all();
        $datos['pedidoherramientas'] = DB::table('pedidoherramientas')
        ->whereBetween('created_at', [$fechainicio, $fechafin])
        ->select('pedidoherramientas.*')->get();
        
        /* return response()->json($ids); */
        $pdf = PDF::loadView('regpedidoherramientas.reportefechas', $datos,compact('users','regpedidoherramientas','trabajadors','herramientas'))->setPaper('A4', 'landscape'); 

       return $pdf->stream('regpedidoherramientas.reportefechas');
    }
}
