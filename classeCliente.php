<?php
include "db.php";

class Cliente{

    public $db;

    public function __construct(){
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
        if(mysqli_connect_errno()) {
    
            echo "Erro: Não foi possível conectar no banco de dados.";
    
            exit;

        }else{

            mysqli_set_charset($this->db,"utf8");
        }
    }

    public function inserir($dsNome, $dsEmail, $nrIp){


        $sql="INSERT INTO bdmetagam.tb_cliente SET dsNome='$dsNome', dsEmail = '$dsEmail', nrIp = '$nrIp', datahoraCadastro = now()";

        msg = "<script>alert($sql)</script>";
        print $msg;

        $result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()." Erro ao inserir.");

        if ($result == true){

            $retorno = '1;Sucesso';
        }else{ 
            $retorno = '0;'.$result;
        }

        //return $retorno;
                    
    }

        
}

?>