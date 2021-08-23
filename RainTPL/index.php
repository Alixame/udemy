<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';


use Rain\Tpl;

$config = array(
    "tpl_dir" => "tpl/",
    "cache_dir" => "cache/",
);

Tpl::configure($config);

$tpl = new Tpl;

/* <-- INDEX -->
$tpl->assign("name", "Hey Devs!");
$tpl->assign("version", PHP_VERSION);

$tpl->draw('index');
*/

$tpl->assign("URL", "http://localhost/cursos/udemy/RainTPL");
$tpl->assign("titulo", "Titulo Teste");
$tpl->assign("nome", "Hey Devs!");
$tpl->assign("version", PHP_VERSION);
$tpl->draw('teste');