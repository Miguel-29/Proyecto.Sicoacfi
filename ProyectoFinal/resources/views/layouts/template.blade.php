
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
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
<script>
    dsa = () => {
        console.log(document)
    }
    asd = () => {
        if(document.getElementById('dsa')){
            let alerta = document.getElementById('dsa').textContent
            alert(alerta)
            console.log(alerta)
            // alert(alerta)
        }
    };
    asd();
</script>

{{--<script src="{{url('js/dashboard.js')}}"></script>--}}
</body>
</html>
