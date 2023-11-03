<?php

?>

<!<!doctype html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      #tamanho {
        width: 350px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
      }
    </style>

  </head>

  <body>
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
      <div style="padding: 10px">
        <div style="text-align: center">
          <img src="src/imagem/cad" width="75px" height="75px">
        </div>
        <form>
          <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control">
          </div>
          <div>
            <label>Email</label>
            <input type="email" name="usuario" class="form-control">
          </div>
          <div>
            <label>Senha</label>
            <input type="password" name="usuario" class="form-control">
          </div>
        </form>
        <div style="text-align: right">
          <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
      </div>
    </div>

    <div style="text-align: center; margin-top: 8px">
      <small> Você não possui cadastro? Clique <a href="src/login/cadastro_usuario_externo.php">aqui</a></small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>

  </html>