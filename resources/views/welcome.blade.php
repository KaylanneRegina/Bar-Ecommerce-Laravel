@extends('layouts.main')

@section('title', 'Quiosque do Papai')

@section('content')

<section>

    <div id="search-container" class="col-md-12">
        <h1>BUSQUE UM <span>PRODUTO</span></h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar...">
        </form>
    </div>

    <div id="products-container" class="col-md-12">
        <h2>Produtos</h2>
        <p class="subtitle">Confira os nossos produtos</p>
        <div id="cards-container" class="row">
            @foreach($products as $product)
            <div class="card col-md-3">
                <img src="/img/baldeHei.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nome }}</h5>
                    <p class="card-text">{{ $product->descricao }}</p>
                    <p class="card-valor">R$ {{ $product->valor }}</p>
                    <a href="#" class="btn btn-warning" id="btn-comprar">Comprar</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection