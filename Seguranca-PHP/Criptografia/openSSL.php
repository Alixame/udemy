<?php

$senha = pack('a16','admin');
$confirmaSenha = pack('a16','admin');

$data = [
    "nome" => "Lucas"
];


if($confirmaSenha === $senha){
    $openSSL = openssl_encrypt(
        json_encode($data),
        'AES-128-CBC',
        $senha,
        0,
        $confirmaSenha
    );

    var_dump($openSSL);


}else{

    echo 'As senhas não conferem';

}


if (isset($openSSL)) {
    $string = openssl_decrypt(
        $openSSL,
        'AES-128-CBC',
        $senha,
        0,
        $confirmaSenha
    );

    var_dump(json_decode($string,true));

}
