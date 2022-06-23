<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once '_dados.php';
for ($i=0; $i <2; $i++){
    echo $produtos[$i]['nome'].'<br>';
    echo $produtos[$i]['preco'].'<br';
    echo $produtos[$i]['imagem'].'<br>';
    echo '<img src="'.$produtos[$i]['imagem'].'">'.'<br>';
    echo '<br>';
}
?>

<h1>Home</h1>
<?php
echo $produtos[$id]['nome'];
echo $produtos[$id]['preco'];

?>
<img src="<?php echo $produtos[$id]['imagem']?>">

<?php
// include do footer
include_once './includes/_footer.php';
?>