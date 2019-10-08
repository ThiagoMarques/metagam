<?php  
    include "db.php";
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   
    $nome = $_POST["varNome"];
    $email = $_POST["varEmail"];
    $ip = $_POST["varIP"];

    $sql="INSERT INTO bdmetagam.tb_cliente SET dsNome='$nome', dsEmail = '$email', nrIp = '$ip', datahoraCadastro = now()";

    $result = mysqli_query($link,$sql) or die(mysqli_connect_errno()." Erro ao inserir.");
    echo $result;


?>