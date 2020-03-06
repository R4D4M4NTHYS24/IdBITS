<?php

session_start ();
if (!isset($_SESSION["usuario"])) {
  header("location:index.php");
}
 include 'datauser.php'; 
// definir los elementos que se recuperan del POST
$contact_mail= $_POST["mail"];
$reg_ID_from= $ID;
$state=1;

try {
                        
    $usuario=$_SESSION["usuario"];
    $base=new PDO("mysql:host=localhost; dbname=contrapp" , "root", ""); // conexión con base de datos SQL mediante PDO ("ubicación de DB; nombre DB","usuario de DB", "contraseña de DB")
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    
    $sql="SELECT ID FROM REGISTER WHERE MAIL='$contact_mail'";
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array());

    while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {

        $reg_ID_to = $fila["ID"];

    }

} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

}

try {
    
    $base=new PDO("mysql:host=localhost; dbname=contrapp" , "root", ""); // conexión con base de datos SQL mediante PDO ("ubicación de DB; nombre DB","usuario de DB", "contraseña de DB")
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    $sql="INSERT INTO contacts (FROM1, TO1, STATE1) VALUES (:$reg_ID_from, :$reg_ID_to, :$state)"; // sentencia SQL
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array(":$reg_ID_from"=>$reg_ID_from, ":$reg_ID_to"=>$reg_ID_to, ":$state"=>$state));
    header("location:../contactos.php");
    $resultado->closeCursor ();
   
} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

}

?>