<?php

// php code to Update data from mysql database Table
session_start();
if(isset($_POST['update']))
{

  include 'database.php';
   
   // get values form input text and number
   
   $id = $_GET['id'];
   $name = $_POST['name'];
   $lastname = $_POST['lastname'];

           
   // mysql query to Update data
   $query = "UPDATE customer SET name='$name', lastname='$lastname' WHERE id = $id";
   
   $result = mysqli_query($database, $query);
   
  

   if($result)
   {
      header("Location:list.php");
      $_SESSION['teste'] = 'Dados Atualizados';
   }else{
       echo 'Dados não atualizados';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste - Miguel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

  <div class="row">
    <div class="col-12 mt-4 mb-4 text-end">
      <div class="btn-group">
        <a href="index.php" class="btn btn-primary active" aria-current="page">Inserir cliente</a>
        <a href="list.php" class="btn btn-primary">Listar clientes</a>
      </div>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid">
        <h1 class="display-5 fw-bold">Teste Miguel</h1>
        <p class="col-md-8 fs-4">Atualizar Cliente.</p>
      </div>
    </div>
    
    <form action="" method="post">
      <div class="row">
        <div class="col-6">

            <input type='hidden' name='id'>

          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="col-6">
          <label for="name">Apelido</label>
          <input type="text" class="form-control" name="lastname" id="lastname">
        </div>

        <div class="col-md-12 mt-4 text-end">
          <input type="submit" class="btn btn-primary" name="update" value="Atualizar Dados">
        </div>
      </div>
    </form>
  </div>
</body>
</html>