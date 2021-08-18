<?php

// Dando um nome para nossa pasta 
$name = "images";

// Verifica se ja existe um diretorio com esse nome
if(!is_dir($name)){

    // Cria o diretorio
    mkdir($name);
    echo "Diretorio ". $name . " criado com sucesso!";

} else {
    
    
    //Retorna que já existe
    echo "O Diretorio já existe!";

}

