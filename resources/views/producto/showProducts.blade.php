@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($productos as $producto)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                   
                   <p class="">{{ $producto->nombre }} </p>
                   <p class="">{{ $producto->precio }} </p>
                   <p class="">{{ $producto->stock}}</p>
                   <a href="{{ url('/'.$producto->id.'/add')}}">comprar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
