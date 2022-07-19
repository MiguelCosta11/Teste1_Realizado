<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste - Miguel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php 
session_start();
?>
  <div class="container">

  <div class="row">
    <div class="col-12 mt-4 mb-4 text-end">
      <div class="btn-group">
        <a href="index.php" class="btn btn-primary" aria-current="page">Inserir cliente</a>
        <a href="list.php" class="btn btn-primary active">Listar clientes</a>
      </div>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid">
        <h1 class="display-5 fw-bold">Teste Miguel</h1>
        <p class="col-md-8 fs-4">Listar clientes.</p>
      </div>
    </div>

    <div class="col-12">
      <table id="tablelist" class="table table-striped table-hover">
        <thead>
          <tr>
            <th style='text-align:center;'>#</th>
            <th style='text-align:center;'>Nome</th>
            <th style='text-align:center;'>Apelido</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr>
            <td>#</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td><a href="update.php" class="btn btn-sm btn-info">Alterar</a></td>
          </tr> -->
          <?php
            include 'database.php';

            $sql = "SELECT * from customer";
            $dbquery = $database->query($sql);
            if($dbquery -> num_rows > 0){
              while($row = $dbquery -> fetch_assoc()){
                echo "<tr><td style='text-align:center;'>". $row["id"] ."</td><td style='text-align:center;'>". $row["name"] ."</td><td style='text-align:center;'>" . $row["lastname"] . "</td><td><a href='db_update.php?id=$row[id]' class='btn btn-sm btn-info'>Alterar</a> </td></tr>";
              }
              echo "</table>";
            }
            else{
             echo"<td colspan = 4 style='text-align:center; height:200px;'> <p style='margin-top: 85px;'>Não existem dados ou informação para se apresentar</p></td>"; 
            }
          ?>
        </tbody>
      </table>
    </div>

  </div>
<?php 

if(isset($_SESSION['teste']) && ! empty($_SESSION['teste'])){
  echo '<div id="success" style="color:blue;">'.$_SESSION['teste'].'</div>';
}

if(isset($_SESSION['teste2']) && ! empty($_SESSION['teste2'])){
  echo '<div id="success2" style="color:blue;">'.$_SESSION['teste2'].'</div>';
}
  session_destroy()
?>
<script>
    $('#success').fadeIn().delay(1500).fadeOut();
    $('#success2').fadeIn().delay(1500).fadeOut();
</script>
</body>
</html>


