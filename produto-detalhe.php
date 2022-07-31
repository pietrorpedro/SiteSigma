<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/Banco.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = $id";
$res = mysqli_query($conn, $sql);
$produto = mysqli_fetch_assoc($res);
?>

<div class="container mt-5">
    <div class="produto">
        <div class="produto-imagem">
            <img src="<?= $produto['Imagem']?>">
        </div>
        <div class="produto-content">
            <h2><?= $produto['Preco']?></h2>
            
        </div>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>