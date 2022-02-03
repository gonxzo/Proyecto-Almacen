<?php

namespace App\Http\Controllers;
use App\Pedidocom;
use App\Material;
use App\Trabajador;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $pedidocoms = Pedidocom::all();
       
        $pedidocoms = Pedidocom::paginate(500);

        return view('reportes.index', compact('pedidocoms'))
            ->with('success', 'Pedido  Guardado con exito!!.');
    }
    public function filtrar(Request $request)
    {
        $pedidocoms = Pedidocom::where('created_at','>=',$request->fechaini)
        ->where('created_at','<=',$request->fechafin)
        ->get();
       
        $pedidocoms = Pedidocom::paginate(500);

        return view('reportes.index', compact('pedidocoms'))
            ->with('success', 'Pedido  Guardado con exito!!.');
    }
}
