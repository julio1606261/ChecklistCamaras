<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="{{asset('/css/btn.css')}}" rel="stylesheet"> 
    <title>Home</title>
</head>
<body class="bg-light">

  <nav class="navbar navbar-light bg-primary">
    <div class="container-fluid" style="color: white; font-size: 24px;">
      Checklist Cámaras
    </div>
  </nav>

<section class="py-5 py-xl-8">

  <div class="container overflow-hidden">
    <div class="row gy-4 gy-xl-0">
      <div class="col-12 col-sm-6 col-xl-3">
        <a href="{{route('checklist_list')}}" style="text-decoration: none; color: #000;">
          <div class="card border-0 border-bottom border-primary shadow-sm">
            <div class="card-body text-center p-4 p-xxl-6">
              <svg  class="w-6 h-6 text-gray-800 text-primary mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
              </svg>
              <h4 class="mb-4">Checklist</h4>
              <p class="mb-4 text-secondary">Checklist realizados, puedes ver la información detallada de cada uno.</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-xl-3">
        <a href="{{route('reportes')}}" style="text-decoration: none; color: #000;">
          <div class="card border-0 border-bottom border-primary shadow-sm">
            <div class="card-body text-center p-4 p-xxl-5">
              <svg  class="w-6 h-6 text-gray-800 text-primary mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 10v-2m3 2v-6m3 6v-3m4-11v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
              </svg>
              <h4 class="mb-4">Reportes</h4>
              <p class="mb-4 text-secondary">Extrae reportes, para exportalo a un formato de tu gusto.</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 border-bottom border-primary shadow-sm">
          <div class="card-body text-center p-4 p-xxl-5">
            <svg  class="w-6 h-6 text-gray-800 text-primary mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            </svg>            
            <h4 class="mb-4">Usuarios</h4>
            <p class="mb-4 text-secondary">Administra los usuarios que tienen acceso a la herramienta.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-xl-3">
        <div class="card border-0 border-bottom border-primary shadow-sm">
          <div class="card-body text-center p-4 p-xxl-5">
            <svg  class="w-6 h-6 text-gray-800 text-primary mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            </svg>   
            <h4 class="mb-4">Administracion</h4>
            <p class="mb-4 text-secondary">Gestiona otros ajustes de la herramienta, segun tu conveniencia.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

  <a href="{{route('checklist')}}" class="btn-flotante"><i style="font-size: 2rem;" class="bi bi-plus-circle-fill"></i></a>

</body>
</html>