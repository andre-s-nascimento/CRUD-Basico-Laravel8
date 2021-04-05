<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um produto</title>
</head>

<body>
    <h1>Excluir o produto: "{{$produto->nome}}" </h1>
    <form action="{{ route( 'excluir_produto', ['id' => $produto->id] ) }}" method="post">
        @csrf
        <label for="nome">Tem certeza que deseja excluir esse produto?</label><br>
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br>
        <button>Sim</button>
    </form>
</body>

</html>