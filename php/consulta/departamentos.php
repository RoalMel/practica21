<?php
$servername = "localhost";
$username = "root";
$pwd = "";
$db = "mydb1";

// Create connection
$conn = mysqli_connect($servername, $username, $pwd, $db);
// Check connection
if (!$conn) {
  die("Conección.faida: " . mysqli_connect_error());
}else{
    echo 'Todo bien';
}


//xxjk
/*$sql = "INSERT INTO clientes (nombre, saldo)
VALUES ('Saul', 20.50)";*/

$consulta = "SELECT * FROM gendepartamentos";  
$res = mysqli_query($conn, $consulta) or die ("Error en el query");

if($res){
  if (mysqli_num_rows($res) >1){
    while ( $fila = mysqli_fetch_array($res)){
     //echo $fila['Nombre'] . "<br/>" . "<h1>Bien bien</h1>";//
      /*echo '<option value = "'.$fila['Nombre']. '">'. $fila['Nombre'] .'</option>' . "Prueba";*/
      echo '<option>'. $fila['Nombre'] .'</option>' ;
    }
  }else{
    
  }
 /* echo "Todo Bien";*/


}else{
  echo "Ocurrio un error";
}

/*
if (mysqli_query($conn, $sql)) {
  echo "Registro añadido";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} */

mysqli_close($conn);
?> 