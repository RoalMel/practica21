<?php
    $servername = "localhost";
    $username = "root";
    $paswoord = "";
    $dbname = "mydb1";
    $conn = mysqli_connect($servername, $username, $paswoord, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }else{
          echo 'Todo muy bien';
      }

      if(isset($_POST['guardar']))
      {
          $nombre = $_POST['Nombre'];
          echo $nombre;
          $sql = "insert into mydb1.gendepartamentos (Nombre)
          values ('$nombre') ";
          if (mysqli_query($conn, $sql)){
              echo "Todo va bien1";
          }else{
              echo "algo salio mal2";
          }

      }else{
          echo "No entro en post2";
      }
      
      $nombre = $_POST['Departamento'];
      echo $nombre;
      $sql = "insert into mydb1.gendepartamentos (Nombre)
      values ('$nombre') ";
      if (mysqli_query($conn, $sql)){
          echo "Todo va bien1";
      }else{
          echo "algo salio mal2";
      }


?>