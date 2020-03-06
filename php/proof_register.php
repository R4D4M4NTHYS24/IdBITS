<?php

// definir los elementos que se recuperan del POST

$reg_ROL= $_POST["ROL"];

    $reg_name= $_POST["name"];
    $reg_mail= $_POST["mail"];
    $reg_password= $_POST["password"];
    $reg_pubkey= $_POST["pubkey"];

    $password_cifrado=password_hash($reg_password, PASSWORD_DEFAULT, array("cost"=>15)); // está funcíon encripta la contrasña con un algoritmo BLOWFISH

    // iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    $sql="INSERT INTO REGISTER (NAME, MAIL, PASSWORD, ROL, PBK) VALUES (:razon, :mail, :password, :rol, :pubkey)"; // sentencia SQL
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array(":razon"=>$reg_name, ":mail"=>$reg_mail, ":password"=>$password_cifrado,":rol"=>$reg_ROL, ":pubkey"=>$reg_pubkey));
    header("location:../index.php");
    $resultado->closeCursor ();
   
} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

}

?>
