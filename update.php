<?php

include "config.php";

    if(isset($_POST['update'])){
        $idtabela = $_POST['idtabela'];
        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];

        $sql = "UPDATE `teste`.`tabela` SET
        `primeironome` = '$primeironome',
        `ultimonome`= '$ultimonome',
        `email`= '$email',
        `password`= '$password',
        `genero`= '$genero',
        WHERE `idtabela`= '$idtabela'";

        $result = $conn->query($sql);
        
        if($result == TRUE){
            echo "Atualizado com sucesso!";
        }else{
            echo "erro:"  .$sql."<br>". $conn->error;
        };
    }
    
if(isset($_GET['idtabela'])){
    $idtabela = $_GET['idtabela'];
  
    $sql = "SELECT * FROM `cliente`.`usuarios` WHERE `idtabela`='$idtabela'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $idtabela = $row['idtabela'];
            $primeironome = $row['primeironome'];
            $ultimonome = $row['ultimonome'];
            $email = $row['email'];
            $password = $row['password'];
            $genero = $row['genero'];
        
        
        }
        ?>
   

        <h2>FORMULÁRIO DE ATUALIZAÇÃO</h2>

        <form action=""method="post">
            <fieldset>
                <legend>Informações Pessoais:</legend>
                Primeiro Nome: <br>
                <input type="text" name="primeironome" value="<?php echo $primeironome; ?>">
                <br><br>

                Último Nome: <br>
                <input type="text" name="ultimonome" value="<?php echo $ultimonome;?>">
                <br><br>

                E-mail: <br>
                <input type="email" name="email" value="<?php echo $email;?>">
                <br><br>
                
                Password: <br>
                <input type="password" name="password" value="<?php echo $password;?>">
                <br><br>

                Gênero: <br>
                <input type="radio" name="genero" value="Masculino"> 
                    <?php if($genero == 'Masculino') { echo "marcado";} ?>>Masculino
                <input type="radio" name="genero" value="Feminino"> 
                    <?php if($genero == 'Feminino') { echo "marcado";} ?>>Feminino
                <input type="radio" name="genero" value="Outros"> 
                    <?php if($genero == 'Outros') { echo "marcado";} ?>>Outros
                <br><br>

                <input type="submit" name="submit" value="update">
            </fieldset>
        </form>
<?php

 }else{
    header('location:consultar.php');
 }   

}
?>