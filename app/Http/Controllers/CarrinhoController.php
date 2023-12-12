<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = \Cart::getContent();
        dd($itens);
    }

    public function adicionaCarrinho(Request $request) {
        \Cart::add([
            'id' => $request->id,
            'nome' => $request->nome,
            'valor' => $request->valor,
            'categoria' => $request->categoria,
            'attributes' => array(
                'image'=> $request->img
            ) 
        ]);
    }
}
