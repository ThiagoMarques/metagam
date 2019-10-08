<?php  
    header('Content-Type: text/html; charset=utf-8');

    include "classeCliente.php";

    $objCliente = new Cliente();
    
    $nome = $_POST["varNome"];
    $email = $_POST["varEmail"];
    $ip = $_POST["varIP"];

    if(strlen($nome) == 0) {
        $output = $objCliente->inserir($nome, $email, $ip); 
        msg = "<script>alert('".$output."')</script>";
        print $msg;

        //caminho do arquivo no servidor para fazer o download
    }

    echo $output;


