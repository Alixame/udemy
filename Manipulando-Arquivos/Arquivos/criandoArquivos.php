<?php

date_default_timezone_set('America/Sao_Paulo');
$nome = 'Lucas Alixame';
$idade = 18;
$logradoro = 'Rua Laurindo José Basso , 08 Fundos';

$file = fopen("log.txt", "w+");

fwrite($file, date("Y/m/d H:i:s") . "\r\n");
fwrite($file, 'Nome: ' .$nome. "\r\n");
fwrite($file, 'Idade: ' .$idade. "\r\n");
fwrite($file, 'Logradoro'.$logradoro."\r\n");


fclose($file);

echo "Arquivo criado com sucesso!";

