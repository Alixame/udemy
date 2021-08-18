<?php

date_default_timezone_set('America/Sao_Paulo');

$images = scandir('images'); 

$data = array();

foreach ($images as $image) {
    
    if (!in_array($image, array(".",".."))) {
        
        $filename = "images". DIRECTORY_SEPARATOR . $image;

        $info = pathinfo($filename);
        
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/cursos/udemy/Manipulando-Arquivos/".str_replace("\\","/",$filename);

        array_push($data,$info);

    }

}

echo '<pre>';
echo json_encode($data);
echo '</pre>';