<?php

date_default_timezone_set('America/Sao_Paulo');
$nome = 'Lucas Alixame';
$idade = 18;

$file = fopen("log.txt", "w+");

fwrite($file, date("Y/m/d H:i:s"));
fwrite($file, '
Nome: '.$nome);
fwrite($file, '
Idade: '.$idade);


fclose($file);

echo "Arquivo criado com sucesso!";

