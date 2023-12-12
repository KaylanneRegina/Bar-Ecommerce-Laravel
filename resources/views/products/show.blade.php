@extends('layouts.main')

@section('title', $product->nome)

@section('content')

<div class="col-md-10 offset-md-1">
   <div class="row">
    <div id="image-container" class="col-md-6">
        <img src="/img/products/{{ $product->image }}" class="img-fluid" alt="{{ $product->nome}}">
    </div>
    <div id="info-container" class="col-md-6">
        <h1>{{ $product->nome }}</h1>
        <p class="product-categoria"> <ion-icon name="apps-outline"></ion-icon> {{ $product->categoria }}</p>
        <p class="product-compras"> <ion-icon name="cart-outline"></ion-icon> 36 pessoas compraram</p>
        <p class="products-valor"><ion-icon name="cash-outline"></ion-icon> {{ $product->valor }} Reais</p>
        <form action="{{ route('addcarrinho') }}">
            <a href="#" class="btn btn-warning" id="product-submit">Comprar</a>
        </form>
        <h3>O combo conta com:</h3>
        <ul id="items-list">
        @foreach($product->items as $item)
            <li><ion-icon name="play-outline"></ion-icon>  <span class="items">{{ $item }}</span> </li>
        @endforeach
        </ul>
    </div>
    <div class="col-md-12" id="descricao-container">
        <h3>Informações Adicionais</h3>
        <p class="product-descricao">{{ $product->descricao }}</p>
    </div>

   </div> 
</div>

@endsection