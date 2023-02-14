<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

</head>

<body>


    <main class="container">
        <form action="validar.php" method="post">
            Usuario:
            <input name="usuario" placeholder="login" require>
            Senha:
            <input name="senha" type="password" placeholder="senha" require>
            <br>
            <button>Entrar</button>
        </form>
    </main>
</body>

</html>