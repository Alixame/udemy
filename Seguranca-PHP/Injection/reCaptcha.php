<?php



?>
<!-- 
<form action="cadastrar.php" method="post">

    <input type="email" name="inputEmail">

    <button type="submit">Enviar</button>

</form>
-->

<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>

</head>
  <body>

    <form action="cadastrar.php" method="POST">

        <input type="email" name="inputEmail">
        
        <br>

        <div class="g-recaptcha" data-sitekey="6Lf-vx8cAAAAAPLrqlf57kpzzFv3e7PI-_kr9MyP"></div>
        
        <br>

        <button class="g-recaptcha" data-sitekey="6Lf-vx8cAAAAAPLrqlf57kpzzFv3e7PI-_kr9MyP" data-callback='onSubmit' data-action='submit' type="submit">ENVIAR</button>

    </form>
    
  </body>
</html>