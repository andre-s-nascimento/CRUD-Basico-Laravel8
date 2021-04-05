<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo produto</title>
</head>

<body>
    <h1>Cadastrar um novo produto</h1>
    <form action="{{ route('registrar_produto') }}" method="post">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Custo</label><br>
        <input type="text" name="custo"><br>
        <label for="">Preço</label><br>
        <input type="text" name="preco"><br>
        <label for="">Quantidade</label><br>
        <input type="text" name="quantidade"><br>
        <button>Salvar</button>
    </form>
</body>

</html>