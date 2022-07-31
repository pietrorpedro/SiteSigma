<?php

require '../includes/Banco.php';

$id = $_GET['id'];

$sql = "DELETE FROM `produtos` WHERE `produtos`.`ProdutoID` = {$id}";

if(mysqli_query($conn, $sql)){
    header('Location: admin.php');
}else{
    echo "Error". $sql . "<br>" . mysqli_error($conn);
}