<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';


$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>
<div class="center">
    <img src="<?php echo $produtos[$id]['imagem'];?>">
    <h1><?php echo $produtos[$id]['nome'];?></h1>
    <h5><?php echo $produtos[$id]['preco'];?></h5>
    <p><?php echo $produtos[$id]['descricao'];?></p>

    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>