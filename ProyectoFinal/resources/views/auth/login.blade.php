<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">    
        <meta http-equiv="Last-Modified" content="0">    
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">    
        <meta http-equiv="Pragma" content="no-cache">
        <link rel="shortcut icon" type="image/png" href="{{asset('/images/LogoMakr-1lXjxx.png')}}"/>
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="{{url('css/app.css')}}" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="card mt-5 offset-sm-3 col-sm-6">
                    <div class="card-header text-center">
                        <img src="{{asset('/images/LogoMakr-1lXjxx.png')}}" class="circle" style="width: 100px; height: 100px">
                        <h5>¡Bienvenido a</h5>
                        <h3>SICOACFI!</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}" @if ($errors->any()) class="form-error" @endif>
                        @csrf
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autofocus/>
                                <label for="email">Email</label>
                                <x-alert/>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required/>
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit"class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
