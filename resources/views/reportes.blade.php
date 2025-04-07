@extends('layouts.nvar')
@section('title', 'Reportes')
@section('content')

@section('subtitle') Reportes @endsection

    <form action="" class="form-inline">
        <div class="mt-3 mb-3 ml-3 mr-3 p-3">
        {{--  <label style="padding: 0.5rem;">Selecciona un mes para realizar la busqueda</label> --}}
            <h6>Selecciona un mes para realizar la busqueda</h6>
            <div class="input-group">
                <select class="form-select"  id="select">
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="abril">Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                    <option value="julio">Julio</option>
                    <option value="agosto">Agosto</option>
                    <option value="septiembre">Septiembre</option>
                    <option value="octubre">Octubre</option>
                    <option value="noviembre">Noviembre</option>
                    <option value="diciembre">Diciembre</option>
                </select>
                <div class="input-group-append" style="padding-left: 0.5rem;">
                    <button type="submit" class="btn btn-success" >Buscar  <i class="bi bi-search"></i></button>
                </div>
            </div>
           
        </div>
    </form>
</body>
</html>

@endsection

{{-- <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Buscar...">
    <div class="input-group-append">
        <button class="btn btn-primary" type="button">Buscar</button>
    </div>
</div> --}}
