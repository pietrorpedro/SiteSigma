<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';

include_once './includes/Banco.php';

$id = $_GET['id'];
$tipo = $_GET['tipo'];

$sql = "SELECT * FROM produtos WHERE ativo = 1 AND ProdutoID = $id";
$exec = mysqli_query($conn,$sql);
$numProdutos = mysqli_num_rows($exec);
$dados = mysqli_fetch_assoc($exec)

?>
<div class="center">
    <img src="<?php echo $dados['imagem'];?>">
    <h1><?php echo $dados['Nome'];?></h1>
    <h5><?php echo $dados['Preco'];?></h5>
    <p><?php echo $dados['Descricao'];?></p>

    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>