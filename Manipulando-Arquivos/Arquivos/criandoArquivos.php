<?php

date_default_timezone_set('America/Sao_Paulo');

$file = fopen("log.txt", "w+");

fwrite($file, date("Y/m/d H:i:s"));

fclose($file);

echo "Arquivo criado com sucesso!";

