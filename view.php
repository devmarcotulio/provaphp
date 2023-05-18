<?php
include_once "connect.php";

$conexao = new Connection();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans leading-normal p-10">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Visualização de usuários</h1>
        <a class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4" href="register.php">Cadastrar novo usuário</a>
        <br><br>
        <table class="min-w-auto border border-gray-300">
            <tr>
                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">ID</th>
                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">USUÁRIO</th>
                <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">E-MAIL</th>
            </tr>
            <?php
            $arrUsuarios = $conexao->Execute("select * from usuarios");
            foreach ($arrUsuarios as $usuario) {
            ?>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $usuario['id'] ?></th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $usuario['nome'] ?></th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $usuario['email'] ?></th>
                </tr>
            <?php
            }
            ?>
        </table>
        <br>
        <?php
        if (isset($_GET['acao'])) {
            if ($_GET['acao'] == 1) {
                echo '<span class="bg-green-200 text-green-900 p-3 rounded-lg">Usuário cadastrado com sucesso!</span>';
            }
        }
        ?>
    </div>

</body>

</html>