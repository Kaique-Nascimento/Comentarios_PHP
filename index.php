
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" media="screen">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" size="10x10" href="https://www.blogson.com.br/wp-content/uploads/2017/06/Sergio-Monte-Verde-204x300.jpg">
    <title>Comentários</title>
</head>
<body id="fundo"> 


<?php
include("conexao.php");
if(isset($_POST["gravar"])) {
  $sql = "INSERT INTO tb01_comentarios
(tb01_nome, tb01_mensagem)
VALUES (?, ?)";
  $comando = $banco->prepare($sql);
  $comando->execute(array($_POST["nome"], $_POST["mensagem"]));
}
?>  
<h1> Envie seu comentário!</h1>
<form action="index.php" method="post">
  <div class="caixa">
    <div class="row">
      <div class="col-sm-1">
        Nome:
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="nome" name="nome"  placeholder="Nome" required>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-1">
          Mensagem:
        </div>
        <div class="col-sm-5">
          <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem" required></textarea> 
        </div>
        
        </div>
        <input type="submit" name="gravar" value="Gravar" onclick="limpar()">
</div>
</form>
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