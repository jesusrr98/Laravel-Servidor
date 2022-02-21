@extends("./layouts.plantilla")

@section("titulo", "Articulos")

@section("index")

    <?php $usuario = Session::get('usuario'); ?>

    @isset($usuario)
        
        <div class="row">
            <div id="mensaje" class="col">
                Bienvenido 
                {{ $usuario->name }}
            </div>
            <script>
                $("#mensaje").fadeOut(3000);
            </script>
        </div>
    @endisset

@endsection


@section("cuerpo")



<div id="fondoTabla" class="w-75 p-3 py-4">
<table border="1" class="table table-striped  border-0">

@if(isset($articulos))
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Seccion</th>
            <th>Pais de origen</th>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($articulos as $articulo)

            <tr>
                <td > {{$articulo->nombre}} </td>
                <td > {{$articulo->precio}} €</td>
                <td > {{$articulo->seccion}} </td>
                <td > {{$articulo->paisOrigen}} </td>
                <td  style="width: 400px;">
                    <form style="box-sizing:border-box;" action="/articulos/{{$articulo->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-success" href=" {{route('articulos.show', $articulo->id)}}  " role="button">Modificar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </tbody>
@else

    <tr><td colspan="4">No hay artículos</td></tr>

@endif


</table>

<div class="row mb-3">
    <div class="col" style="display: flex; justify-content: center;">
        <a class="btn btn-primary" href=" {{route('articulos.create')}} " role="button">Crear Artículo</a>
    </div>
</div>

</div>



@endsection