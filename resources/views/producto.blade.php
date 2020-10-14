@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

<table class="table text-center">
    <thead class="thead-dark ">
      <tr class="center">
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
        <th scope="col">cantidad</th>
        <th scope="col">Vender</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($productos as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad}}</td>
                <td>
                    <button class="btn btn-success col-md-3"><i class="fas fa-check-circle"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@stop


@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

@stop