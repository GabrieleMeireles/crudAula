<?php

include "config.php";
    if(isset($_POST['submit'])){
        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];
        
        $sql = "INSERT INTO `teste`.`tabela`(`primeironome`,`ultimonome`,`email`,`password`,`genero`)
        VALUES('$primeironome', '$ultimonome', '$email', '$password', '$genero')";

        $result = $conn->query($sql);

        if($result == TRUE){

            echo "Novo registro criado com sucesso!";
        }else{

        echo "Erro: ". $sql. "<br>". $conn->error;


    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulário de cadastro</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>INFORMAÇÕES PESSOAIS</legend><br>
            Primeiro Nome:<br>
            <input type="text" name="primeironome">
            <br>
            Ultimo Nome:<br>
            <input type="text" name="ultimonome">
            <br>
            E-mail:<br>
            <input type="text" name="email">
            <br>
            Password:<br>
            <input type="text" name="password">
            <br>
            Genero:<br>
            <input type="radio" name="genero" value="Masculino"> Masculino
            <input type="radio" name="genero" value="Feminino"> Feminino
            <input type="radio" name="genero" value="Outros"> Outros
            <br><br><br>
            <input type="submit" name="submit" value="submit">            

        </fieldset>

    </form>
    
</body>
<?php
    echo "<a href='consultar.php'> Clique aqui para realizar uma consulta</a><br>";
?>

</html>