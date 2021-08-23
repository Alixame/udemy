<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> <?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?> </title>
  </head>
  <body class="bg-dark text-light">
  	<div class="container">
        
        <nav class="jumbotron bg-primary p-3 my-3">
            <center>
            <h1>MVC</h1>
            <p>Model - View - Controller</p>
            <a href="<?php echo htmlspecialchars( $URL, ENT_COMPAT, 'UTF-8', FALSE ); ?>/"><button class="btn btn-light">HOME</button></a>
            <a href="<?php echo htmlspecialchars( $URL, ENT_COMPAT, 'UTF-8', FALSE ); ?>/sobre"><button class="btn btn-light">SOBRE</button></a>
            <a href="<?php echo htmlspecialchars( $URL, ENT_COMPAT, 'UTF-8', FALSE ); ?>/comentarios"><button class="btn btn-light">COMENTÁRIOS</button></a>
            </center>
        </nav>

        <main>

            <center><h2>Deixe um feedback do canal aí em baixo!</h2></center>
            <section id = "form">
                <form method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
        
                    <div class="form-group">
                        <label>Mensagem</label>
                        <textarea class="form-control" rows="5" name="mensagem" id="mensagem" required></textarea>
                    </div>
        
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </section>
            <br><br><br>

        </main>


        <footer>     
        <hr>
        <center> <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?> - <a href="www.youtube.com/channel/UCicl23jI1nPLp6w1zbKxHQQ">Canal Youtube</a> - 2021</center>
        </footer>

  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>