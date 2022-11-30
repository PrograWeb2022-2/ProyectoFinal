@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Proovedor</div>
                <div class="card-body">
                  <form method="post" action="{{route('prestamo.store')}}">
                  @csrf
                <div class="row mb-3">
                    <label for="libro_id" class="col-md-4 col-form-label text-md-end">Libro</label>
                    <div class="col-md-6">
                    <select class="form-control" id="libro_id" name="libro_id">
                    @foreach($libroid as $libro)
                    <option value="{{$libro->id}}">{{$libro->nombre}}</option>
                    @endforeach
                    </select> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cliente_id" class="col-md-4 col-form-label text-md-end">Cliente</label>
                    <div class="col-md-6">
                    <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach($clienteid as $clien)
                    <option value="{{$clien->id}}">{{$clien->nombre}}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="costo" class="col-md-4 col-form-label text-md-end">Costo</label>
                  <div class="col-md-6">
                      <input type="text" class="formulario-control" name="costo" id="costo" required>
                  </div>
              </div> 
                     <div class="row mb-0">
                         <div class="col-md-6 offset-md-4">
                         <a href="{{ route('prestamo.index') }}">
                             <button type="submit" class="btn btn-primary">Actualizar</button>
                         </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
     </div>
    </div>

  <br>
  <div class="p-3 mb-2 text-black" style="background-color: rgb(207, 142, 177)">
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
  <p style="text-align: center">Libreria MARAC - Powered by Andrea & Jose Miguel2022 &copy; </p>
 </div>
</div>
@endsection

