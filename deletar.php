<?php
$numero = $_GET['numero'];
require_once('conexao.php');
$sql = "delete from aluno where numero = $numero";
mysqli_query($con, $sql);

?>