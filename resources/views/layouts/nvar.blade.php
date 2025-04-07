<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{asset('/css/btn.css')}}" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
<body>


    <nav class="navbar sticky-top navbar-light bg-primary">
        <div class="container-fluid" style="color: white; font-size: 24px;">
         {{--  <a class="navbar-brand" style="color: white;" href="{{route('home')}}"><i style="font-size: 2rem; padding: 1px;" class="bi bi-arrow-left-square"></i></a> --}}
            <a class="boton-outline" href="{{route('home')}}" style="color:white; text-decoration:none;"><i class="bi bi-caret-left" style="color:white;"></i> Regresar</a>
                <div style="position: fixed; margin-left: 10rem; ">@yield('subtitle')</div>
        </div>
    </nav>
    

  @yield('content')

  <a href="{{route('checklist')}}" class="btn-flotante"><i style="font-size: 2rem;" class="bi bi-plus-circle-fill"></i></a>

</body>
</html>