@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Clientes</div>
                <div class="card-body">
                  <form method="post" action="{{route('clientes.update',$clientes->id)}}">
                  @method('PUT')
                  @csrf
                <div class="row mb-3">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="nombre" id="nombre" placeholder="nombre" 
                        value = "{{$clientes->nombre}}" pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" required> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="apellido" value = "{{$clientes->apellido}}" id="apellido" placeholder="apellido" required>
                    </div>
                </div>
                <div class="row mb-3" id="grupo-celular">
                  <label for="celular" class="col-md-4 col-form-label text-md-end">Celular</label>
                  <div class="col-md-6">
                      <input type="text" class="formulario-control" name="celular" id="celular"
                      value = "{{$clientes->celular}}" pattern="^[0-9]{1,40}$" title="Numeros" required>
                  </div>
              </div>             
                     <div class="row mb-0">
                         <div class="col-md-6 offset-md-4">
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