@extends("./layouts.plantilla")

@section("titulo", "Crear Articulo")

@section("cuerpo")



<div class="col" style="display:flex; justify-content: center;">
    <form style="width:600px; display: flex;flex-direction:column; align-items: center;" method="POST" action="/articulos">

        @csrf

        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" value="">
        <label for="precio">Precio:</label><input type="text" name="precio" id="precio" value="">
        <label for="seccion">Seccion:</label><input type="text" name="seccion" id="seccion" value="">
        <label for="paisOrigen">Pais de origen:</label><input type="text" name="paisOrigen" id="paisOrigen" value="">
        <p></p>
        <input type="submit" class="btn btn-primary" value="Crear">

    </form>
</div>



@endsection