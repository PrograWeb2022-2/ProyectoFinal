@extends('layouts.app')

@section('content')
 <br>
    <div class="container text-center">
    <a href="{{ route('proovedor.create') }}">
        <button class="btn btn-success">Nuevo Proovedor</button>
    <a href="{{ route('pdf_p') }}">
    <button class="btn btn-success">Generar Reporte</button>
<br>
<br>
<br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Nit</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proovedor as $proove)
                <tr>
                <td>{{$proove -> id}}</td>
                <td>{{$proove -> nombre}}</td>
                <td>{{$proove -> apellido}}</td>
                <td>{{$proove -> celular}}</td>
                <td>{{$proove -> nit}}</td>
                <td>
                <a href="{{route('proovedor.edit',$proove-> id)}}">
        <button class="btn btn-primary">Editar</button>
        </a>
        <form action="{{ route('proovedor.destroy',$proove-> id) }}" method="post">
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
<br>
<footer style="bottom:0;position:absolute;width:100%">
  <div class="p-3 mb-2 text-black" style="background-color: rgb(207, 142, 177)">
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
  <p style="text-align: center">Libreria MARAC - Powered by Andrea & Jose Miguel2022 &copy; </p>
 </div>
</div>
</footer>
@endsection
