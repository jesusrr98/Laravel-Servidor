@extends("./layouts.plantilla")

@section("titulo", "Modificar Articulo")

@section("cuerpo")



@if(isset($articulo))

    <div id="fondoUpdate" class="col d-flex flex-column align-items-center justify-content-center  h-75">
        <form style="width:300px; display: flex;flex-direction:column; align-items: center;" method="POST" action="/articulos/{{$articulo->id}}">

            @method('PUT')
            @csrf

            <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" value="{{$articulo->nombre}}">
            <label for="precio">Precio:</label><input type="text" name="precio" id="precio" value="{{$articulo->precio}}">
            <label for="seccion">Seccion:</label><input type="text" name="seccion" id="seccion" value="{{$articulo->seccion}}">
            <label for="paisOrigen">Pais de origen:</label><input type="text" name="paisOrigen" id="paisOrigen" value="{{$articulo->paisOrigen}}">
            <p></p>
            <input type="submit" class="btn btn-primary" value="Actualizar">

        </form>
    </div>

@else

    <p>No se encontró el producto</p>


@endif



@endsection