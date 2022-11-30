@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Libros</div>
                <div class="card-body">
                  <form method="post" action="{{route('libros.store')}}">
                  @csrf
                <div class="row mb-3">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="nombre" id="nombre" placeholder="nombre" 
                        required> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="autor" class="col-md-4 col-form-label text-md-end">Autor</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="autor"  id="autor" placeholder="autor" required>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="genero" class="col-md-4 col-form-label text-md-end">Genero</label>
                  <div class="col-md-6">
                      <input type="text" class="formulario-control" name="genero" id="genero" placeholder="genero"
                      required>
                  </div>
              </div>              
              <div class="row mb-3" id="grupo-nit">
                <label for="paginas" class="col-md-4 col-form-label text-md-end">Paginas</label>
                <div class="col-md-6">
                    <input type="text" class="formulario-control" name="paginas" id="paginas" placeholder="paginas"
              required>
                </div>
             </div>
             <div class="row mb-3" id="grupo-nit">
   <label for="proovedor_id" class="col-md-4 col-form-label text-md-end">Proovedor</label>
   <div class="col-md-6">
   <select class="form-control" id="proovedor_id" name="proovedor_id">
    @foreach($proovedor as $prove)
    <option value="{{$prove->id}}">{{$prove->nombre}}</option>
    @endforeach
  </select>
   </div>
</div>
                     <div class="row mb-0">
                         <div class="col-md-6 offset-md-4">
                         <a href="{{ route('libros.index') }}">
                             <button type="submit" class="btn btn-primary">Registrar</button>
                         </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
     </div>
    </div>

  <footer style="bottom:0;position:absolute;width:100%">
  <div class="p-3 mb-2 text-black" style="background-color: rgb(207, 142, 177)">
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
  <p style="text-align: center">Libreria MARAC - Powered by Andrea & Jose Miguel2022 &copy; </p>
 </div>
</div>
</footer>
@endsection