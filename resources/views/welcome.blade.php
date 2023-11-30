@extends('layouts.main')

@section('title', 'Quiosque do Papai')

@section('content')


    <div id="search-container" class="col-md-12">
        <h1>BUSQUE UM <span>PRODUTO</span></h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar...">
        </form>
    </div>

    <div id="products-container" class="col-md-12">
        @if($search)
        <h2>Buscando por <span> {{ $search }} </span> </h2>
        @else
        <h2>Produtos</h2>
        <p class="subtitle">Confira os nossos produtos</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($products as $product)
            <div class="card col-md-3">
                <img src="/img/products/{{ $product->image }}" alt="{{ $product -> nome }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nome }}</h5>
                    <p class="card-text">{{ $product->descricao }}</p>
                    <p class="card-valor">R$ {{ $product->valor }}</p>
                    <a href="/products/{{ $product->id }}" class="btn btn-warning" id="btn-omprar">Saber mais</a>
                </div>
            </div>
            @endforeach
            @if(count($products) == 0 && $search)
                <p>Não foi possivel encontrar nenhum produto com {{ $search }}! <a href="/" class="link-ver-todos">Ver todos.</a> </p> 
            @elseif(count($products) == 0)
                <p>Não há produtos disponíveis</p>
            @endif
        </div>
    </div>


@endsection