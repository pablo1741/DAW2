<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adicionar Usuario</title>
    </head>
    <body>
        <form action="novouser.php" method="POST">
            <h3>nome</h3><input type="text" name="nome"><br>
            <h3>email</h3><input type="text" name="email"><br>
            <h3>Senha</h3><input type="password" name="senha"><br>
            <h3>Numero de Funcionario</h3><input type="number" name="nfunc"><br>
            <h3>Celular</h3><input type="number" name="celular"><br>
            <h3>Essa pessoa é Administrador?</h3><input type="checkbox" name="adm"><br>
            <button>enviar</button>
        </form>
    </body>
</html>
