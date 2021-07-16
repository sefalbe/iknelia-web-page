@extends('layouts.app')

@section('style')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-10">
            <div class="col-md-2">
                <button class="btn btn-success btn-block m-2" onclick="showAdd();">Nuevo producto</button>
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
                    <td ROWSPAN=2><img src="{{asset('/storage/images/productos/'.$item->url_imagen)}}" alt="" class="" style="width: 200px; height: 200px;"></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="2">
                        <div class="row">
                            <button class="btn btn-primary btn-block mx-2" onclick="showUpdate({{$item->id_producto}})">editar</button> 

                            <button class="btn btn-danger btn-block mx-2" onclick="event.preventDefault();
                            document.getElementById('eliminar{{$item->id_producto}}').submit();" >eliminar</button>   
                            <form id="eliminar{{$item->id_producto}}" action="{{ route('delete') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="number" name="id_producto"  value="{{$item->id_producto}}" >
                            </form>                             
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

{{--Modal Mensajes--}}
<div class="modal fade bd-example-modal-lg" id="modalMns" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content {{Session::get('TipoMensaje')}}">
            <div class="row m-3">
                <div class="col-11">
                    <h5 class="text-white" id="mns" title = "{{Session::get('TipoMensaje')}}">{{Session::get('Mensaje')}}</h5>
                </div>
                @if (Session::get('TipoMensaje') == 'bg-danger')
                <div class="col-1">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{--Modal Edit Producto--}}
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" id="my-llenado-competencia">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 p-0 mb-2">
                            <form class="form_wrapper" action="{{route('update')}}" enctype="multipart/form-data" method="POST" id="formEdit">
                                @csrf
                                <input id="id_producto_edit" type="number" name="id_producto"  value="" style="display: none;">

                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Nombre</span>
                                    </div>
                                    <input type="text" name="Enombre" value="" class="form-control form-control-md @error('Enombre') is-invalid @enderror" 
                                            title="Nombre del producto" autocomplete="off" id="Enombre">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>
                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Marca</span>
                                    </div>
                                    <input type="text" name="Emarca" value="" class="form-control form-control-md @error('Emarca') is-invalid @enderror" 
                                            title="Marca" autocomplete="off" id="Emarca">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-6">
                                      <label class="sr-only" for="inlineFormInput"></label>
                                      <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Codigo</div>
                                        </div>
                                        <input type="text" name="Ecodigo" value="" class="form-control form-control-md @error('Ecodigo') is-invalid @enderror" 
                                                    title="Codigo" autocomplete="off" id="Ecodigo">
                                            {{--<div class="input-group-append">
                                            </div>--}}
                                        <div class="invalid-feedback">
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="sr-only" for="inlineFormInputGroup"></label>
                                        <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">UM</div>
                                          </div>
                                          <input type="text" name="Eum" value="" class="form-control form-control-md @error('Eum') is-invalid @enderror" 
                                                    title="UM" autocomplete="off" id="Eum">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Entrega</span>
                                    </div>
                                    <input type="text" name="Eentrega" value="" class="form-control form-control-md @error('Eentrega') is-invalid @enderror" 
                                            title="Tiempo de Entrega" autocomplete="off" id="Eentrega">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>

                                <div class="row my-1">
                                        <div class="col-10">
                                            <div class="input-group input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" title="competencia">Imagen</span>
                                                </div>
                                                <p id="Eimagen" class="text-center form-control form-control-md"></p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-primary btn-sm mt-1" title="Editar imagen" 
                                                        onclick=" document.getElementById('editarimagen').style.display= 'block';">
                                                Editar 
                                            </button>
                                        </div>            
                                </div>
                                
                                <div id="editarimagen" class="my-1" style="display: none;">
                                    <input type="file" class="" id="customFile" name="url_imagen">
                                </div>

                                <div class="input-group input-group mb-2">
                                    <h6>Descripcion:</h6>
                                    <textarea id="Edescripcion" value="" name="Edescripcion" rows="5" cols="70"></textarea>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                

                                <div class="text-right mt-3">
                                    <div class="col-lg-12 p-0 ">
                                        <button type="submit" class="btn btn-success" title="Guardar" onclick="event.preventDefault();
                                            document.getElementById('formEdit').submit();">
                                            Guardar 
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Modal Add Producto--}}
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Agregar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" id="my-llenado-competencia">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 p-0 mb-2">
                            <form class="form_wrapper" action="{{route('insert')}}" enctype="multipart/form-data" method="POST" id="formAdd">
                                @csrf
                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Nombre</span>
                                    </div>
                                    <input type="text" name="nombre" value="" class="form-control form-control-md @error('nombre') is-invalid @enderror" 
                                            title="Nombre del producto" autocomplete="off" id="nombre">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>
                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Marca</span>
                                    </div>
                                    <input type="text" name="marca" value="" class="form-control form-control-md @error('marca') is-invalid @enderror" 
                                            title="Marca" autocomplete="off" id="marca">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-6">
                                      <label class="sr-only" for="inlineFormInput"></label>
                                      <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Codigo</div>
                                        </div>
                                        <input type="text" name="codigo" value="" class="form-control form-control-md @error('codigo') is-invalid @enderror" 
                                                    title="Codigo" autocomplete="off" id="codigo">
                                        <div class="invalid-feedback">
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="sr-only" for="inlineFormInputGroup"></label>
                                        <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">UM</div>
                                          </div>
                                          <input type="text" name="UM" value="" class="form-control form-control-md @error('um') is-invalid @enderror" 
                                                    title="UM" autocomplete="off" id="um">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" title="competencia">Entrega</span>
                                    </div>
                                    <input type="text" name="tiempo_entrega" value="" class="form-control form-control-md @error('entrega') is-invalid @enderror" 
                                            title="Tiempo de Entrega" autocomplete="off" id="entrega">
                                    <div class="invalid-feedback">
                                    </div>     
                                </div>
                                <div class="my-1">
                                    <input type="file" class="" id="customFile" name="url_imagen">
                                </div>

                                <div class="input-group input-group mb-2">
                                    <h6>Descripcion:</h6>
                                    <textarea id="descripcion" value="" name="descripcion" rows="5" cols="70"></textarea>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <input type="number" name="b_activo"  value="1" style="display: none;">
                                <div class="text-right mt-3">
                                    <div class="col-lg-12 p-0 ">
                                        <button type="submit" class="btn btn-success" title="Guardar" onclick="event.preventDefault();
                                            document.getElementById('formAdd').submit();">
                                            Agregar 
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
    {{--Script al inicializar y cargar el documento --}}
    <script>   
        var productos = @json($productos);
        document.addEventListener("DOMContentLoaded", function(event) {

            @if(Session::has('Mensaje'))
                showModalMns();
            @endif

        });
    </script>
    {{-------------------------Script Modal Mensaje--}}
    <script>
        function showModalMns(){
            $('#modalMns').modal('show');
            var tipo = document.getElementById('mns').getAttribute("title");
            if(tipo !== 'bg-danger'){
                setTimeout('hideModalMns()',1500);
            }
        }
        function hideModalMns(){
            $('#modalMns').modal('hide');
        }
    </script>

    <script>
        function showUpdate(id_producto){
            document.getElementById('id_producto_edit').value = id_producto;
            productos.forEach(item => {
                if(item.id_producto == id_producto){
                    document.getElementById('Enombre').value = item.nombre;
                    document.getElementById('Emarca').value = item.marca;
                    document.getElementById('Ecodigo').value = item.codigo;
                    document.getElementById('Eum').value = item.UM;
                    document.getElementById('Eentrega').value = item.tiempo_entrega;
                    document.getElementById('Eimagen').innerHTML = item.url_imagen;
                    document.getElementById('Edescripcion').value = item.descripcion;
                }
            });
            $('#modalEdit').modal('show');
        }
    </script>

<script>
    function showAdd(){
        $('#modalAdd').modal('show');
    }
</script>

@endsection

