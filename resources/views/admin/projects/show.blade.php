@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-5">
        <h1>{{ $project->name }}</h1>
        <p>Data ultimo aggiornamento: {{ Helper::formatDate($project->date_updated) }}</p>
        @if ($project->type)
        <p>Tipo: {{ $project->type->name }}</p>
        @endif
        <p>Ultima Versione: v-{{ $project->version }}</p>
        <p>{!! $project->description !!}</p>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna indietro</a>
    </div>
</div>

@endsection
