<?php

$id = (isset($_GET['id'])) ? $_GET['id']:2;

if (!is_numeric($id) || strlen($id) > 4){
    exit("Pegamos voce!");
}

$con = mysqli_connect('localhost','root','','systema_login');

$sql = "SELECT * FROM usuarios WHERE id_usuario = $id ";

$result = mysqli_query($con,$sql);

while ($result = mysqli_fetch_object($result)){

    var_dump($result);

}