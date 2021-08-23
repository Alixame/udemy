<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello  World!</h1>
<h2>Bem Vindos ao Canal <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>

<p>Vamos Trabalhar com PHP na versão: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>