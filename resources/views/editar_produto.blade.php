<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo produto</title>
</head>
<body>
    <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <br />
        <input type="text" name="nome" value="{{ $produto->nome }}">

        <label for="">custo</label>
        <br />
        <input type="text" name="custo" value="{{ $produto->custo }}">

        <label for="">preco</label>
        <br />
        <input type="text" name="preco" value="{{ $produto->preco }}">

        <abel for="">quantidade</label>
        <br />
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}">
        <button>Salvar</button>
    </form>
</body>
</html>