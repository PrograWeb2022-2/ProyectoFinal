<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;


class ProductoController extends Controller
{
    //
    public function index()
    {
        // 
        $libros = Libro::all();
        return view('productos')->with('libros',$libros);
    }

}
