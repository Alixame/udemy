<?php

$conn = new PDO("mysql:dbname=banco_riosoft;host=localhost","root","");


$stmt = $conn->prepare("SELECT * tb_usuario_telegram ORDER BY nome");

if($stmt->execute()){
    
    echo 'Sucesso!';

} else {    
    
    echo 'Erro!';

}