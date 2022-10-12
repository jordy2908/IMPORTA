<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
 

use Illuminate\Http\Request;
use App\Models\concentrados;

use function Ramsey\Uuid\v1;

class get_all extends Controller
{
    const pag = 10000;
    public function get_all(Request $request) {
        //$c = concentrados::all();
        //return view('welcome', compact('c'));
        $buscarpor = $request -> get('buscarpor');
        $buscador = concentrados::where('pais_procedencia', 'like', '%'.strtoupper($buscarpor).'%')-> orwhere('descripcion_despacho', 'like', '%'.strtoupper($buscarpor).'%')-> orwhere('posicion_arancelaria', 'like', '%'.strtoupper($buscarpor).'%')->paginate($this::pag);
        return view('home', compact('buscador', 'buscarpor'));
    }

    public function get(concentrados $proveedor) {
        //$c = concentrados::all();
        //return view('welcome', compact('c'));
        return view('details.details', compact('proveedor'));
    }

    public function get_pdf (concentrados $proveedor ) {
        $b = concentrados::where('proveedor', 'like', '%'.$proveedor.'%');
        $r = PDF::loadView('details.details', compact('proveedor'));
        return $r -> stream('details.details');
    }
};