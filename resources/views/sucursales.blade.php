@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Sucursales</h1>
@stop

@section('content')

    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#myModal">Agregar usuario</button>

    <table class="table text-center">
        <thead class="thead-dark ">
          <tr class="center">
            <th scope="col">Cedula</th>
            <th scope="col">nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Acciones</th>
            
          </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">2000</th>
                    <td>juan</td>
                    <td>juan@juan.com</td>
                    <td>222</td>
                    <td>cali</td>
                    <td>
                        <button class="btn btn-warning"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2000</th>
                    <td>juan</td>
                    <td>juan@juan.com</td>
                    <td>222</td>
                    <td>cali</td>
                    <td>
                        <button class="btn btn-warning"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop