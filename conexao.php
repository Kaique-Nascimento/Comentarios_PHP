<?php
try {
  $banco = new PDO("mysql:host=localhost;dbname=tb_comentarios", "root", "");
  $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
?>