

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
            echo '<p id="mensagem">'.$registro["tb01_mensagem"].'</p>'; 
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