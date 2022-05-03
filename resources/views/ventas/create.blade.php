@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">ventas</h1>
            <button class="btn btn-primary" id="agregarProducto">agregar producto</button>
        </div>

    </div>

    <div class="justify-content-center">
        <div class="">
            <form method="post" action="{{ route('ventas.store') }}" class="my-3" id="form">
            @csrf
            <input class="col-6 " type="number" name="cedula" placeholder="cedula" required>
                            
            <input class="col-6 " type="text" name="cliente" placeholder="nombre" required>
                <div id="items">
                    <div class="item row mt-2">
                        <select name="producto[]" class="col-6">
                            @foreach($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre}}</option>
                            @endforeach
                        </select>
                        
                        <input class="col-6 " type="number" name="cantidad[]" placeholder="cantidad" required>
                                
                                
                    </div>
                    
                </div>
                <button class="btn btn-primary" type="submit">comprar</button>
            </form>
        </div>
    </div>
</div>
</div>   



@endsection
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
      let button = document.getElementById('agregarProducto');
      const html = document.getElementsByClassName('item')[0];
      button.addEventListener('click', function(event){
        let clonedElement = html.innerHTML;
       document.getElementById('items').appendChild(clonedElement)
      });
});

</script>
