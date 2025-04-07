@extends('layouts.nvar')
@section('title', 'Reportes')
@section('content')

@section('subtitle') Checklist Cámaras @endsection

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

@endsection