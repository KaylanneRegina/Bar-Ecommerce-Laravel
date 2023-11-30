<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index() {

        $search = request('search');

        if($search) {

            $products = Product::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $products = Product::all();
        }


        return view('welcome', ['products' => $products, 'search' => $search]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request){

        $product = new Product;

        $product -> nome = $request -> nome;
        $product -> descricao = $request -> descricao;
        $product -> valor = $request -> valor;
        $product -> categoria = $request -> categoria;
        $product -> items = $request -> items;

        if($request -> hasFile('image') && $request -> file('image') -> isValid()) {

            $requestImage = $request -> image;
            $extension = $requestImage -> extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request -> image -> move(public_path('img/products'), $imageName);

            $product -> image = $imageName;
            

        }

        $product -> save();
        
        return redirect('/')->with('msg', 'Evento concluido com sucesso!');
    }

    public function show($id) {

        $product = Product::findOrFail($id);

        return view('products.show', ['product' => $product]);
    }
}

