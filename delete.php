<?php

include "config.php";

    if(isset($GET['idtabela'])){
        $idtabela = $GET['idtabela'];
        $sql = "DELETE FROM `teste`.`tabela` WHERE 'idtabela'='$idtabela'";

        $result = $conn ->query($sql);
        if($result==TRUE){
            echo "Registro deletado com sucesso!";
        }else{
           echo "Erro:".$sql. "<br>" . $conn->error;
        }
    }
?>