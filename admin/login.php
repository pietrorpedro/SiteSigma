<?php
include_once __DIR__ . '/../includes/Banco.php';
include_once __DIR__ . '/../includes/_head.php';
include_once __DIR__ . './_header.php';
include_once __DIR__ . './_menu.php';

?>

<body>
<div class="container mt-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="user">User:</label>
            <input type="text" name="user" id="user" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <button class="btn btn-primary" name="submit">Entrar</button>
    </form>
</div>
</body>

<?php
if(isset($_POST['sumit'])){
    $_POST['user'];
    $_POST['senha'];
}



?>