<?php

session_start ();
    if (!isset($_SESSION["usuario"])) {
      header("location:../index.php");
    }

    $usuario_sesion= $_SESSION["usuario"];

    try {
                        
        $usuario=$_SESSION["usuario"];
        include 'conexion_ddbb.php';
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
        
        $sql="SELECT * FROM REGISTER WHERE MAIL='$usuario'";
        $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
        $resultado->execute (array());

        while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
            $NAME = $fila["NAME"];
            $MAIL = $fila["MAIL"];
            $IDENT = $fila["IDENT"];
            $ADDRESS = $fila["ADDRESS"];
            $TEL = $fila["TEL"];
            $DATE = $fila["DATE"];
            $COMPANY = $fila["COMPANY"];
            $ID = $fila["ID"];
            $PBK = $fila["PBK"];                       
            $ruta_firma = $fila["FIRMA"];
        }

    } catch (Exception $e){

        die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

    }

// Recibimos los datos de la imagen

$name_firma=$_FILES['firma'] ['name']; // toma el nombre de archivo firma que recibe de POST 
$type_firma=$_FILES['firma'] ['type']; // toma el tipo de archivo firma que recibe de POST
$size_firma=$_FILES['firma'] ['size']; // toma el tamaño de archivo firma que recibe de POST
//$time = time();
//$name = $usuario_sesion . $time;

// restricción de tamaño de firma (1 mb)
if ($size_firma<=1000000) {

    if($type_firma== "image/jpeg" || $type_firma=="image/jpg" || $type_firma=="image/png" || $type_firma=="image/gif" ) {

        // Ruta de la carpeta destino del servidor
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/IdBITSapp/firmas/'; // sube la firma a una carpeta temporal

        // Movemos la firma del directorio temporal al directorio escogido
        move_uploaded_file($_FILES['firma']['tmp_name'], $carpeta_destino.$IDENT); // mueve la firma de la carpeta temporal, a la carpeta de destino
        header("location:../config.php");

    }else{

        echo "Solo se admiten formatos de firma: jpeg, jpg, png, gif";
        echo $type;
        
        
    }

}else {
    echo "El tamaño de la firma es demasiado grande";
}



// iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    //$sql="INSERT INTO TABLAEJEMPLO (IMAGE) VALUES ('$name_imagen')"; // sentencia SQL
    $sql="UPDATE REGISTER SET FIRMA ='$IDENT' WHERE MAIL='$usuario_sesion'";
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array($usuario_sesion));
    $resultado->closeCursor ();
   
   

} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es


}


?>