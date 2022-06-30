<?php
// include do footer
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once '_dados.php';

$a = array(1);
if(isset($_POST['txtNome'])){
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $msg = $_POST['txtMsg'];
    $arrayO = array('nome'=>$nome, 'email'=>$email, 'telefone'=>$telefone, 'msg'=>$msg);
    $array1[]['nome'] = $nome;

    $array3 = array();
    array_push($array3['nome'],$nome);
    
    print_r($arrayO);
    //echo " Usuário: $nome <br> Email: $email <br> Telefone: $telefone <br> Mensagem: $msg";
}


?>

<h1>Contato</h1>

<div class="container">
<form action="contato.php" method="post" id="form">
    <label for="txtNome">Nome</label>
    <input tpye="text" name="txtNome" id="txtNome">
    <label for="txtEmail">E-mail</label>
    <input tpye="text" name="txtEmail" id="txtEmail">
    <label for="txtTelefone">Telefone</label>
    <input tpye="text" name="txtTelefone" id="txtTelefone">
    <label for="txtMsg">Mensagem</label>
    <input type="text" name="txtMsg" id="txtMsg">


    <input type="submit" name="submit" value="Enviar">
</form>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>