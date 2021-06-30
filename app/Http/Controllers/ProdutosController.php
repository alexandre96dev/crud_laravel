<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;
class ProdutosController extends Controller
{
    public function create()
    {
        return view('criar_produto');
    }
    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto Criado com Sucesso!";
    }
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('listar_produto', ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('editar_produto', ['produto' => $produto]);
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Produtos Atualizado com Sucesso!";
    }
}
