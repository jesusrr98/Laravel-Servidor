<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Iniciar sesión </title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/login.css')}}" rel="stylesheet">
</head>
<body>

    @isset($error)

        <script type="text/javascript">
            alert("Login Incorrecto");
        </script>

    @endisset
   

    <div id="inicio">
        <h1>Bienvenido a la Tienda</h1>
        <h4>Por favor, inicie sesión</h4>

        <form method="post" action="login">

            @csrf

            <label class="col-form-label" for="email">Email:</label> <input type="text" class="form-control" id="email" name="email">
            <label class="col-form-label" for="password">Contraseña:</label> <input type="password" class="form-control" id="password" name="password">

            <span><button type="submit" class="btn btn-primary">Enviar</button></span>

        </form>
    </div>
    

    
    <script src=" {{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

