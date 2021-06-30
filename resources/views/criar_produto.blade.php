<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo produto</title>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <br />
        <input type="text" name="nome">

        <label for="">custo</label>
        <br />
        <input type="text" name="custo">

        <label for="">preco</label>
        <br />
        <input type="text" name="preco">

        <abel for="">quantidade</label>
        <br />
        <input type="text" name="quantidade">
        <button>Salvar</button>
    </form>
</body>
</html>