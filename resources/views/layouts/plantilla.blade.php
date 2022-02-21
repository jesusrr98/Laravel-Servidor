<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> @yield("titulo") </title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/plantilla.css')}}" rel="stylesheet">
    <script src=" {{asset('js/jquery-3.6.0.js')}} "></script>
</head>
<body>

   
    <div class="container-fluid">
        <div id="filaTitulo" class="row">
            <div class="row">
                <div id="titulo" class="col-6 offset-3">
                    <a id="enlaceTitulo" href="/articulos">La Tienda Online</a>
                </div>
                <div class="col-1 offset-2 d-flex flex-column align-items-center justify-content-center"><a id="desconexion" href="/">Desconectar</a></div>
            </div>
            @yield("index")
        </div>
    </div>
    
    
    <div id="cuerpo" class="container-fluid">
        
        <div id="tabla" class="row d-flex flex-column align-items-center justify-content-center h-75">
            @yield("cuerpo")
        </div>
    </div>


    <div class="container-fluid fixed-bottom">
        <div id="filaPie" class="row">
            <div class="col" id="pie">
                © Todos los derechos reservados.
            </div>
        </div>
    </div>
    

    
    <script src=" {{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>