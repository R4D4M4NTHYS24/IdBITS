<?php

// definir los elementos que se recuperan del POST

// datos del empleador
// ltf = laboral_termino_fijo

    $ltf_nombre_empleador = $_POST["name"];
    $ltf_documento_empleador = $_POST["name"];
    $ltf_dirección_empleador = $_POST["name"];

// documentos del trabajador

    $ltf_nombre_trabajador = $_POST["name"]; 
    $ltf_documento_trabajador = $_POST["name"]; 
    $ltf_direccion_trabajador = $_POST["name"]; 
    $ltf_fecha_trabajador = $_POST["name"]; 

// condiciones del contrato

    $ltf_oficio = $_POST["name"];
    $ltf_salario = $_POST["name"];
    $ltf_periodo_pago = $_POST["name"];
    $ltf_inicio_labores = $_POST["name"];
    $ltf_finalizacion_labores = $_POST["name"];
    $ltf_lugar = $_POST["name"];
    $ltf_horario = $_POST["name"];
    $ltf_propietario = $_POST["name"];
    $ltf_estado = $_POST["name"];
    $ltf_documento_fisico = $_POST["name"];

    

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







?>