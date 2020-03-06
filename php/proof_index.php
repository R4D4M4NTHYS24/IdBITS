<?php

include 'conexion_ddbb.php';

try {
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // establece los atributos de la conexión entre el servidor y la base de datos
    $sql="SELECT * FROM REGISTER WHERE MAIL= :mail"; // sentencia SQL para consultar los datos que se introducen en el formulario
    $resultado=$base->prepare($sql); // se crea una consulta preparada
    $mail=htmlentities(addslashes($_POST["mail"])); // Almacena la variable mail que el usuario ha introducido en el formulario
    $password=htmlentities(addslashes($_POST["password"])); // Almacena la variable password que el usuario ha introducido en el formulario
    $contador=0; // contador para saber si el mail que se ha introducido está o no está en la base de datos
    $resultado->execute(array(":mail"=>$mail)); // se ejecuta la consulta diciendole que en el marcador tiene que introducir lo que el usuario ha introducido en la casilla de $mail
   
   // este while usa la funcíon fetch y el array asociativo FETCH_ASSOC para recorrer todos los resultados que nos arroje la consulta 
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
        // verifica el hash del password almacenado con el password introducido en el formulario
        if (password_verify($password, $registro['PASSWORD'])) {
            $contador++;
        }
    }

    if ($contador>0) {
        
        session_start (); // inicia la sesión del usuario que hace login o crea una sesión para este usuario si no la tiene
        $_SESSION["usuario"]=$_POST["mail"]; // variable super global $_SESSION["variable con la que queremos identificar, puede ser cualquier nombre"]
        header("location:../home.php");
 
    }

     else{ 
        
        header("location:../index.php");
       
    }

} catch (Exception $e){

    die ("Error: " . $e->getMessage ());

}


?>
