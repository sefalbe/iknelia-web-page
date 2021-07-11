@extends('layouts.app')

@section('style')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-10">
            <div class="col-md-2">
                <button class="btn btn-success btn-block m-2">Nuevo producto</button>
            </div>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Codigo</th>
                <th scope="col">UM</th>
                <th scope="col">Entrega</th>
                <th scope="col">Img</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->marca}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->UM}}</td>
                    <td>{{$item->tiempo_entrega}}</td>
                    <td ROWSPAN=2><img src="{{$item->url_imagen}}" alt="" class="" style="width: 200px; height: 200px;"></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="2">
                        <div class="row">
                            <button class="btn btn-primary btn-block mx-2">editar</button>
                            <button class="btn btn-danger btn-block mx-2">eliminar</button> 
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
@section('script')
@endsection

