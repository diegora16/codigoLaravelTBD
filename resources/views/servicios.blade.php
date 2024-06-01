@extends('layout')

@section('title','Servicios')

@section('content')
    <h2 class="mx-auto container pt-5 font-bold text-2xl">Servicios</h2> 
        
    @if ($servicios)
        <ul class="container ml-32">
        @foreach($servicios as $item)
            <li>{{$item['titulo']}}</li>
        @endforeach
        </ul>
    @else
        <li class="container ml-32 font-bold text-red-600 mt-5">No existe ningun servicio que mostrar</li>    
    @endif
        
@endsection