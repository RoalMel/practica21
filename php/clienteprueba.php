<?php 
$mysqli = new mysqli (
    "localhost", "root", "", "mydb1"
)

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="conexionprueba.php">
    <label for="">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"><br><br>
    <!--<select name="" id=""></select><br><br>//-->
    <label for="">Guardar</label>
    <input type="submit" name="guardar" id="guardar">
    
    <input list ="Departamento" name = "Departamento" />
    <datalist name = "Departamento" id="Departamento"> 
       <option value =""></option>
         <?php
        $consulta = $mysqli -> query ( "SELECT * FROM gendepartamentos");  
       
        while ( $fila = mysqli_fetch_array($consulta)){
   
            echo '<option value="'.$fila[idDepartamentos].'">'.$fila[Nombre].'</option>';
        
}
        ?>
       
    </datalist>
    <p>
        Mostrar lista
        
    </p>
    <button>Mostrar</button>
    
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="clientesprueba1.js"></script>
</body>
</html>