<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once '_dados.php';
?>

<div class="container">
    <h1>Promo</h1>
    <div class="row m-3" id="cards">
        <?php
        for ($i=0; $i < 3; $i++) { 
            # code...
            # code...
        ?>
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
            <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
            <p class="card-text"><?php echo $produtos[$i]['preco'];?></p>
            <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        <?php
        } // <-- fechando o for aqui
        ?>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>