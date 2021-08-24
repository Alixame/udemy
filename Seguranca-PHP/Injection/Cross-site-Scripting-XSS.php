<form method="POST">

        <input type="text" name="busca">
        <button type="submit">Pesquiosar</button>
   
</form>
<?php

if (isset($_POST['busca'])) {
    
    // deixa passar as tag
    echo $_POST['busca'];

    // Retira as Tag (sendo possivel escolher qual tag pode funcionar)
    echo strip_tags($_POST['busca']).'<br>';

    // Transforma as tag em  string normal
    echo htmlentities($_POST['busca']);
}