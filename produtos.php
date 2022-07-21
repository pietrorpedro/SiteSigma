<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/Banco.php';

$sql = "SELECT * FROM produtos WHERE ativo = 1 LIMIT 3";
$exec = mysqli_query($conn,$sql);
$numProdutos = mysqli_num_rows($exec);
?>


<div class="container">
<h1>Produtos</h1>    
    <div class="row m-3" id="cards">
        <?php
        //laço de repeticao, vai exibir os 3 primeiros produtos
        while($dados = mysqli_fetch_assoc($exec)):
        
        ?>
        <div class="card" style="width: 18rem;">
        <img src="<?= $dados['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $dados['Nome'];?></h5>
            <p class="card-text"><?= $dados['Preco'];?></p>
            <a href="produto-detalhe.php?id=<?= $dados['ProdutoID'];?>&tipo=produto" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        <?php
        endwhile;
        ?>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>