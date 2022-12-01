



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