<?php

// definir los elementos que se recuperan del POST

$reg_ROL= $_POST["ROL"];

if ($reg_ROL== 'Rol 1'){
    $reg_name= $_POST["razon"];
    $reg_mail= $_POST["mail"];
    $reg_password= $_POST["password"];
    $reg_ROL= $_POST["ROL"];

    $password_cifrado=password_hash($reg_password, PASSWORD_DEFAULT, array("cost"=>15)); // está funcíon encripta la contrasña con un algoritmo BLOWFISH

    // iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    $sql="INSERT INTO REGISTER (NAME, MAIL, PASSWORD, ROL) VALUES (:razon, :mail, :password, :ROL)"; // sentencia SQL
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array(":razon"=>$reg_name, ":mail"=>$reg_mail, ":password"=>$password_cifrado,":ROL"=>$reg_ROL));
    header("location:../index.php");
    $resultado->closeCursor ();
   
} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

}

}

else {
    
    $reg_name= $_POST["name"];
    $reg_mail= $_POST["mail"];
    $reg_password= $_POST["password"];
    $reg_ROL= $_POST["ROL"];
    $password_cifrado=password_hash($reg_password, PASSWORD_DEFAULT, array("cost"=>15)); // está funcíon encripta la contrasña con un algoritmo BLOWFISH

    // iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    $sql="INSERT INTO REGISTER (NAME, MAIL, PASSWORD, ROL) VALUES (:name, :mail, :password, :ROL)"; // sentencia SQL
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array(":name"=>$reg_name, ":mail"=>$reg_mail, ":password"=>$password_cifrado,":ROL"=>$reg_ROL));
    header("location:../index.php");
    $resultado->closeCursor ();

} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

}
}

?>
