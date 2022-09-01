<?php
$servername = "localhost";
$database = "sitesigma";
$username = "root";
$password = "";
// Create connection
$conn = @mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("<div class='bg-danger p-2'>Erro de conexão: " . mysqli_connect_error() . "</div>");
}
?>
