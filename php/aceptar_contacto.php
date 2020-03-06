<?php

if (isset($_POST["rechazar"])) {

    include 'sesion.php'; 
    include 'datauser.php'; 
    // definir los elementos que se recuperan del POST
    $usuario=$_SESSION["usuario"];
    $ID_amigo= $_POST["ID_amigo"];
    $ID = $ID;
    $state=0;
    
    try {
                            
        include 'conexion_ddbb.php';
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
        $sql="UPDATE CONTACTS SET STATE1='$state' WHERE FROM1 = '$ID_amigo'";             
        $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
        $resultado->execute (array(":$state"=>$state, ":ID_amigo"=>$ID_amigo));
        header("location:../contactos.php");
        $resultado->closeCursor ();

    } catch (Exception $e){

        die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

    }

} 

else if (isset($_POST["aceptar"])) {

    include 'sesion.php'; 
    include 'datauser.php'; 
    // definir los elementos que se recuperan del POST
    $usuario=$_SESSION["usuario"];
    $ID_amigo= $_POST["ID_amigo"];
    $state=2;
    try {
                            
        include 'conexion_ddbb.php';
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
        $sql="UPDATE CONTACTS SET STATE1='$state' WHERE FROM1= '$ID_amigo'";        
        $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
        $resultado->execute (array(":$state"=>$state, ":ID_amigo"=>$ID_amigo));

        header("location:../contactos.php");
        $resultado->closeCursor ();

    } catch (Exception $e){

        die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

    }

} 

else if (isset($_POST["cancelar"])) {

    include 'sesion.php'; 
    include 'datauser.php'; 
    // definir los elementos que se recuperan del POST
    $usuario=$_SESSION["usuario"];
    $ID_amigo= $_POST["ID_amigo"];
    $state=0;
    try {
                            
        include 'conexion_ddbb.php';
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
        $sql="UPDATE CONTACTS SET STATE1='$state' WHERE TO1= '$ID_amigo' AND FROM1='$ID'";        
        $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
        $resultado->execute (array(":$state"=>$state, ":ID_amigo"=>$ID_amigo));

        header("location:../contactos.php");
        $resultado->closeCursor ();

    } catch (Exception $e){

        die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

    }

} 



?>