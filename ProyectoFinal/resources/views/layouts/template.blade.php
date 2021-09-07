
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pagina web especializada en el manejo de activos fijos">
    <meta name="Miguel Romero" content="manejo de activos fijos">    
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">    
    <meta http-equiv="Last-Modified" content="0">    
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">    
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="generator" content="">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/images/LogoMakr-1lXjxx.png')}}"/>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{url('css/app.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    

</head>
<body>
    <div id="bg-content">
        <div class="content-carga"></div>
        <div class="carga"></div>
        <div class="uno"></div>
        <div class="dos"></div>
        <div class="tres"></div>
    </div>
@include('component.navbar')
<div class="container-fluid">
    <div class="row">
        @include('component.sidebar')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
            <div class=" align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
                @include('alerts')
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{ url('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>    
    let envio = document.getElementById('envio');
    let elementos = document.querySelectorAll("[required]")
    let num = 0;
    sumar = () => {
        console.log(elementos)
        console.log(envio)
        for (let index = 0; index < elementos.length; index++) {
            if(elementos[index].value !== "") {
                num += 1;
            };
        }
        if (num == elementos.length){
            envio.disabled = false;
        } else {
            num = 0;
            envio.disabled = true;
        }
    }
    pasarId = (id) =>{
        document.getElementById("myModal")
    }
    document.addEventListener("DOMContentLoaded", function(){sumar()});
</script>
{{--<script src="{{url('js/dashboard.js')}}"></script>--}}
</body>
</html>
