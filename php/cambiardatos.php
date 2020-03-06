<?php


session_start ();
if (!isset($_SESSION["usuario"])) {
  header("location:../index.php");
} 
// definir los elementos que se recuperan del POST
$usuario=$_SESSION["usuario"];
$reg_name= $_POST["name"];
$reg_mail= $_POST["mail"];
$reg_ident= $_POST["ident"];
$reg_tel= $_POST["tel"];
$reg_address= $_POST["address"];
$reg_company= $_POST["company"];
$reg_date= $_POST["date"];


// iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    $sql="UPDATE REGISTER SET NAME='$reg_name', MAIL='$reg_mail', IDENT='$reg_ident', TEL='$reg_tel', ADDRESS='$reg_address', COMPANY='$reg_company', DATE='$reg_date' WHERE MAIL= '$usuario'";        
    //$sql="UPDATE REGISTER SET IMAGE='$usuario_sesion' WHERE USERNAME='$usuario_sesion'";
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array(":name"=>$reg_name, ":mail"=>$reg_mail, ":ident"=>$reg_ident, ":tel"=>$reg_tel, ":address"=>$reg_address, ":company"=>$reg_company, ":date"=>$reg_date  ));

    header("location:../config.php");
    $resultado->closeCursor ();
   
   

} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es


}


?>