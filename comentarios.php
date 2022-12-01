
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" media="screen">
    <title>Comentários</title>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>
<body>
        <h1>Comentários</h1>

<?php
include("conexao.php");
        $sql = "SELECT * FROM tb01_comentarios order by tb01_id";
        $consulta = $banco->prepare($sql);
        $consulta ->execute();    
        ($registro = $consulta -> fetch()); 
       
        while ($registro = $consulta->fetch()){
            echo "<div class='caixa'>";
            echo"<h2> <strong>".$registro["tb01_nome"]."</strong></h3>";
            echo '<p id="pe">'.$registro["tb01_mensagem"].'</p>'; 
            echo '</div>';   
            }  
        ?>
        <center>
    <a href="index.php">
<button> Voltar</button>
</a>
<center>
</body>
</html>