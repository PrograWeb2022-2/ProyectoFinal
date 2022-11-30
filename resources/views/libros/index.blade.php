@extends('layouts.app')

@section('content')
 <br>
    <div class="container text-center">
    <a href="{{ route('libros.create') }}">
<button class="btn btn-success">Nuevo libro</button>
<a href="{{ route('pdf_l') }}">
<button class="btn btn-success">Generar Reporte</button>
<br>
<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Paginas</th>
                <th>Proovedor</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $li)
                <tr>
                <td>{{$li -> id}}</td>
                <td>{{$li -> nombre}}</td>
                <td>{{$li -> autor}}</td>
                <td>{{$li -> genero}}</td>
                <td>{{$li -> paginas}}</td>
                <td>{{$li -> proovedores-> nombre}}</td>
                <td>
                <a href="{{route('libros.edit',$li-> id)}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <form action="{{ route('libros.destroy',$li-> id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">
                Eliminar
                </button>
                </form> 
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
<footer style="bottom:0;position:absolute;width:100%">
  <div class="p-3 mb-2 text-black" style="background-color: rgb(207, 142, 177)">
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
  <p style="text-align: center">Libreria MARAC - Powered by Andrea & Jose Miguel2022 &copy; </p>
 </div>
</div>
</footer>
@endsection


