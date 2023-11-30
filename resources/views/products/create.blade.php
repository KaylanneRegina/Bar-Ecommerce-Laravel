@extends('layouts.main')

@section('title', 'Cadastrar Produto')

@section('content')

<main class="produtos" id="Products">
    <div id="product-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastro de produto</h1>
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">        
                <label for="image">Imagem do Produto</label>       
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">        
                <label for="title">Nome</label>       
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto" required>
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição do produto" required></textarea>
            </div>
            <div class="form-group">
                <label for="title">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite o valor do produto" step="any" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="title">Categoria</label>
                <select name="categoria" id="categoria" class="form-control">
                    <option value="petisco">Petisco</option>
                    <option value="cerveja">Cerveja</option>
                    <option value="bebida">Bebidas</option>
                    <option value="baldes">Balde de Bebidas/Cervejas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">O combo conta com:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Não é um combo!"> Não é um combo.
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Petisco Misto"> Petisco Misto R$10
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Petisco Mistao"> Petisco Mistão R$15
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Batata Frita"> Batata-Frita Pequena R$5
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Coca-Cola"> Coca-Cola Lata R$5
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Coca-Cola 1L"> Coca-Cola 1L R$7
                </div>
            </div>
            <input type="submit" class="btn btn-warning" id="btn-submit" value="Criar Produto">
        </form>
    </div>
</main>


@endsection