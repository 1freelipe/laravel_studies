@extends('layouts.main_layout')

@section('content')

{{-- for --}}
{{-- @for ($i = 0; $i < 5; $i++)
    <h1>{{ $i }}</h1>
@endfor --}}

{{-- foreach --}}
{{-- @foreach ($cities as $item)
    <h1>{{ $item }}</h1>
@endforeach --}}

{{-- forelse --}}
{{-- @forelse ($names as $name)
    <p>{{ $name }}</p>
@empty
    <p>Nenhum nome encontrado</p>
@endforelse --}}

{{-- while --}}
{{-- @while ($index < 10)
    <p>{{ $index++ }}</p> {{-- Incrementando a variável de controle diretamente no código --}}

    {{-- Podendo também incrementar injetando diretamente no php --}}
    {{-- @php
        $index++
    @endphp --}}

{{-- @endwhile --}}

@endsection
