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

    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid" style="color: white; font-size: 24px;">
            <a class="boton-outline" href="{{route('home')}}" style="color:white; text-decoration:none;"><i class="bi bi-caret-left" style="color:white;"></i> Regresar</a>     
        </div>
    </nav>
    
    <h3 style="padding-left:0.5rem; padding-top: 1rem;">Checklist de cámaras</h3>

    <form action="{{route('checklist_store')}}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-calendar-range"></i></span>
                    <input type="date" name="fecha" class="form-control" value="{{date("Y-m-d");}}" required>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <input type="file" name="foto[]" id="foto" accept="image/*" multiple >
                    </div>
                </div>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están las lentes de las cámaras ajustados correctamente?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta1" value="Si" id="pregunta1.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta1.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta1" value="No" id="pregunta1.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta1.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;"  class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están claramente visibles todos los límites de las instalaciones?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta2" value="Si" id="pregunta2.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta2.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta2" value="No" id="pregunta2.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta2.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están las lentes de las cámaras libres de polvo, manchas o salpicaduras?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta3" value="Si" id="pregunta3.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta3.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta3" value="No" id="pregunta3.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta3.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están funcionando correctamente los sensores de movimiento?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta4" value="Si" id="pregunta4.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta4.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta4" value="No" id="pregunta4.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta4.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están funcionando correctamente las funciones de zoom y panorámica de las cámaras?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta5" value="Si" id="pregunta5.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta5.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta5" value="No" id="pregunta5.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta5.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Está la vista despejada, sin ramas obstruyendo las lentes?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta6" value="Si" id="pregunta6.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta6.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta6" value="No" id="pregunta6.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta6.2">No</label>
            </div>
        </div>

        <div style="padding-top: 1rem;" class="row g-3">
            <div class="col-sm-6" style="padding-left:1rem;">
                ¿Están las cámaras colocadas correctamente en los muros?
            </div>
            <div class="col-sm">
                <input type="radio"  class="btn-check" name="pregunta7" value="Si" id="pregunta7.1" autocomplete="off" required>
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta7.1">Si</label>
            </div>
            <div class="col-sm">
                <input type="radio" class="btn-check" name="pregunta7" value="No" id="pregunta7.2" autocomplete="off">
                <label style="padding-left: 5rem; padding-right: 5rem;" class="btn btn-outline-primary" for="pregunta7.2">No</label>
            </div>
        </div>

        <div class="mb-3" style="padding-left: 0.5rem;">
            <label for="exampleFormControlTextarea1" class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>

        <div class="d-grid gap-2 col-11 mx-auto" style="padding-top:1rem;">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</body>
</html>
