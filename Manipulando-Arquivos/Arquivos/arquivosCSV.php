<?php 



$pessoas['Lucas']['idade'] = 20;
$pessoas['Ana']['idade'] = 20;
$pessoas['Maria']['idade'] = 17;
$pessoas['Joao']['idade'] = 32;

$headers = array();

foreach ($pessoas as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");


fwrite($file, implode(",", $headers)."\r\n");

foreach ($pessoas as $row) {
    $data = array();

    foreach ($row as $key => $value) {
        array_push($data,$value);
    }

    fwrite($file, implode(",",$data). '   ');
}

fclose($file);

echo '<pre>';
var_dump($pessoas);
echo '</pre>';