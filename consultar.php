<?php
include "config.php";


$sql = "SELECT * FROM  `teste`.`tabela`";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Usuários:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>idtabela</th>
                    <th>Primeiro Nome</th>
                    <th>Ultimo Nome</th>
                    <th>Email</th>
                    <th>Gênero</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
             
                
                ?>

                                <tr>
                                    <td><?php echo $row['idtabela']; ?></td>
                                    <td><?php echo $row['primeironome']; ?></td>
                                    <td><?php echo $row['ultimonome']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['genero']; ?></td>

                                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row ['idtabela']; ?>">Editar</a>&nbsp;
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row ['idtabela']; ?>">Deletar</a>&nbsp;
                                    </td>

                                </tr>
                <?php
                }}
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>