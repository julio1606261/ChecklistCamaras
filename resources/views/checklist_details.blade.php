<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{asset('/css/btn.css')}}" rel="stylesheet"> 
    <title>Home</title>
</head>
<body>

    <style>
        .mark{
            background-color: rgb(109, 215, 109); padding-left:1.5rem; padding-right:1.5rem;
        }
        .mark_danger{
            background-color: rgb(204, 99, 99); padding-left:1.5rem; padding-right:1.5rem;
        }
    </style>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><i style="font-size: 1.8rem;" class="bi bi-arrow-left-square"></i></a>
        </div>
    </nav>
   
    <h3 style="padding-left:0.5rem; padding-top: 1rem;">Checklist de cámaras <span style="float: right; padding-right:0.5rem;">Fecha: {{ date('d-m-y', strtotime($checklist->fecha)) }}</span></h3>

     

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>¿Están las lentes de las cámaras ajustados correctamente?</td>
            @if($checklist->respuesta1 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta1}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta1}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>¿Están claramente visibles todos los límites de las instalaciones?</td>
            @if($checklist->respuesta2 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta2}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta2}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>¿Están las lentes de las cámaras libres de polvo, manchas o salpicaduras?</td>
            @if($checklist->respuesta3 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta3}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta3}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>¿Están funcionando correctamente los sensores de movimiento?</td>
            @if($checklist->respuesta4 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta4}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta4}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>¿Están funcionando correctamente las funciones de zoom y panorámica de las cámaras?</td>
            @if($checklist->respuesta5 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta5}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta5}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>¿Está la vista despejada, sin ramas obstruyendo las lentes?</td>
            @if($checklist->respuesta6 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta6}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta6}}</mark></td>
            @endif
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>¿Están las cámaras colocadas correctamente en los muros?</td>
            @if($checklist->respuesta7 == 'Si')
                <td><mark class="mark">{{$checklist->respuesta7}}</mark></td>
            @else
                <td><mark class="mark_danger">{{$checklist->respuesta7}}</mark></td>
            @endif
          </tr>
        </tbody>
      </table>

      <div class="card">
        <div class="card-body">
          <p class="fs-6" style="font-weight: 600;">Observaciones</p>
          {{$checklist->observaciones}}
        </div>
      </div>

      @if(isset($fotos))
        <div class="row">
          @foreach ($fotos as $foto)   
            <div class="col-md-6">
              <label style="display: flex; justify-content: center; padding-top: 0.2rem; padding-bottom:0.2rem;">Foto de evidencia</label>
              <img src="{{url('/'.$foto->foto)}}" class="card-img-top" alt="No han subido ninguna foto">
            </div>
          @endforeach
        </div>
      @endif
      
</body>
</html>