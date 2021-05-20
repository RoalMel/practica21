<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb1";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }else{
          echo 'Todo bien';
      }
    
      if(isset($_POST['guardar']))
      {
         $nombre = $_POST['Nombre'];
         echo $nombre;
         //db.clientes lo cambia por su base de datos y su tabla
         $sql = "insert into mydb1.gendepartamentos (Nombre) 
         values ('$nombre')";
         if (mysqli_query($conn, $sql)){
        
              echo "Todo va bien";
        }else{
            echo "Algo salio mal";
        }

    }else{
        echo "No entro en post";
    }

?>