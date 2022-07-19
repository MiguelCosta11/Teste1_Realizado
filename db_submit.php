<?php
session_start();
include 'database.php';

$name = $_POST["name"];
$lastname = $_POST["lastname"];

$sql = "INSERT INTO customer (name, lastname) VALUES ('$name','$lastname')";

if ($database->query($sql) == TRUE) {
  header("Location:list.php");
      $_SESSION['teste2'] = 'Inserido com sucesso';
} else {
  echo "Erro ao inserir.";
}

?>