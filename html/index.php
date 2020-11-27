<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web PHP-MySQL con Docker</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class = "container">
    <div class="jumbotron">
      <h1 class="display-4">SQL Injection</h1>
      <p class="lead">Ejemplo de aplicacion de SQL INJECTION</p>
      <hr class="my-4">
      <p>Usa un SQL Injection para conseguir el hash para el proyecto final.</p>
    </div>
	<table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Name</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Password</th>
          <th>HASH</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conexion = new mysqli("mysql", "root", "secret", "SG");

        $cadenaSQL = "select * from s_user";
        $resultado = $conexion->query($cadenaSQL);

        while ($fila = $resultado->fetch_object()) {
         echo "<tr><td> " .$fila->firstname . 
         "</td><td>" . $fila->lastname .
         "</td><td>" . $fila->email .
         "</td><td>" . $fila->pass .
         "</td><td>" . $fila->hash .
         "</td></tr>";
       }

       ?>
     </tbody>
   </table>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>