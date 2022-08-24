
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    
    <center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<?php
try {
    $banco = new PDO("mysql:host=localhost;dbname=tb_comentarios", "root", "");
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($_POST["gravar"])) {
    $sql = "INSERT INTO tb01_comentarios
	(tb01_nome, tb01_mensagem)
	VALUES (?, ?)";
    $comando = $banco->prepare($sql);
    $comando->execute(array($_POST["nome"], $_POST["mensagem"]));
  }
        $sql = "SELECT * FROM tb01_comentarios";
        $consulta = $banco->prepare($sql);
        $consulta ->execute();    
        ($registro = $consulta -> fetch()); 
       
        while ($registro = $consulta->fetch()){   
            echo '<div class="caixa">';
                echo"<h3>".$registro["tb01_nome"]."</h3>";
                echo '<p id="pe">'.$registro["tb01_mensagem"].'</p>';
                echo '</div>';     
            }
           
        ?>

    </center>
</body>
</html>