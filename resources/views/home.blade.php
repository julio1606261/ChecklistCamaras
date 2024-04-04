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

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      Checklist Cámaras
    </div>
  </nav>
     
      <div class="list-group">
        <ol class="list-group list-group-numbered">
          @foreach($checklist as $check)
          <a href="{{route('checklist_details', $check->id)}}" class="list-group-item d-flex justify-content-between align-items-start list-group-item-action">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Checklist {{$check->id_checklist}}</div>
              <i class="bi bi-calendar-week"></i> {{ date('d-M-y', strtotime($check->fecha)) }}
            </div>
          </a>
          @endforeach
        </ol>
      </div>
      
      <a href="{{route('checklist')}}" class="btn-flotante"><i style="font-size: 2rem;" class="bi bi-plus-circle-fill"></i></a>

</body>
</html>