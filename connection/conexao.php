<?php
    $serv = "localhost";
    $usuario = "root";
    $senha = "12345";
    $dbname = "comentario";
    
    //Criar a conexao
    $conn = mysqli_connect($serv, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    } 
     #header("Location: ../app/index.php");
?>
