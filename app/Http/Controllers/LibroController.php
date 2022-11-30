<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Proovedor;
use Barryvdh\DomPDF\PDF;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $libros = Libro::all();

        return view('libros.index')->with('libros',$libros);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $proovedor = Proovedor::all();        
        return view('libros.create',compact('proovedor'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=> 'required',
            'autor'=> 'required',
            'genero'=> 'required',
            'paginas'=> 'required',
            'proovedor_id'=> 'required',
        ]);
        Libro::create($request->all());
        /* $libros = new Libro(); */
        /* $libros -> nombre = $request -> nombre; */
        /* $libros -> autor = $request -> autor; */
        /* $libros -> genero = $request -> genero; */
        /* $libros -> paginas = $request -> paginas; */
        /* $libros -> proovedor_id = $request -> proovedor_id; */
        /* $libros -> save(); */
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro = Libro::find($id);
        $proovedor = Proovedor::all();        
        return view('libros.create',compact('proovedor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $libro = Libro :: findOrFail($request->id);
        $libro -> nombre = $request -> nombre;
        $libro -> apellido = $request -> apellido;
        $libro -> celular = $request -> celular;
        $libro -> save();
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $libros = Libro::destroy($id);
        return redirect()->route('libros.index');
    }

    public function generarPdf(){
        $libros = Libro::all();
        $pdf = \PDF::loadView('libros.generarpdf',compact('libros'));
        return $pdf->download('libros.pdf');
    }
}
