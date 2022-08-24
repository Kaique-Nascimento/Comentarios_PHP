
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
  </head>
    <title>Comentários</title>
    <style>
        .caixa{
  background-color: #B9D7EA;
  border-radius: 20px;
  margin-top: 10rem;
  padding: 20px;
  margin-left: 90px;
  margin-right: 90px;
  border-style: solid;
  border-color: #EBD6B9;
  border-width: 1px;
}
body{
  background: rgb(0,0,0);
  background: linear-gradient(180deg, rgba(0,0,0,1) 15%, rgba(212,208,200,1) 84%, rgba(212,208,200,1) 100%);
}
#pe{
  margin-left: 50px;
}
    </style>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<?php
try {
    $banco = new PDO("mysql:host=localhost;dbname=tb_comentarios", "root", "");
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
    <center>
<form action="index.php" method="post">
  <div class="caixa">
    <div class="row">
      <div class="col-sm-1">
        Nome:
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="nome" name="nome"  placeholder="Nome">
      </div>
      </div>
      <div class="row">
        <div class="col-sm-1">
          Mensagem:
        </div>
        <div class="col-sm-5">
          <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea> 
        </div>
        
        </div>
        <input type="submit" name="gravar" value="Gravar" onclick="limpar()">
</form>

</center>
<center>
    <a href="comentarios.php">
<button> Ver comentários</button>
</a>
</center>

    <script>
        function limpar(){

var nome = $("#nome");
var mensagem = $("#mensagem");
nome.val("");
mensagem.val("");
        }
        </script>
        

</body>
</html>