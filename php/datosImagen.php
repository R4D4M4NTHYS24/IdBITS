<?php

session_start ();
    if (!isset($_SESSION["usuario"])) {
      header("location:../index.php");
    }

    $usuario_sesion= $_SESSION["usuario"];

// Recibimos los datos de la imagen

$name_imagen=$_FILES['imagen'] ['name']; // toma el nombre de archivo imagen que recibe de POST 
$type_imagen=$_FILES['imagen'] ['type']; // toma el tipo de archivo imagen que recibe de POST
$size_imagen=$_FILES['imagen'] ['size']; // toma el tamaño de archivo imagen que recibe de POST
//$time = time();
//$name = $usuario_sesion . $time;

// restricción de tamaño de imagen (1 mb)
if ($size_imagen<=1000000) {

    if($type_imagen== "image/jpeg" || $type_imagen=="image/jpg" || $type_imagen=="image/png" || $type_imagen=="image/gif" ) {

        // Ruta de la carpeta destino del servidor
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/solemneapp/uploads/'; // sube la imagen a una carpeta temporal

        // Movemos la imagen del directorio temporal al directorio escogido
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$usuario_sesion ); // mueve la imagen de la carpeta temporal, a la carpeta de destino
        header("location:../config.php");

    }else{

        echo "Solo se admiten formatos de imagen: jpeg, jpg, png, gif";
        echo $type;
        
        
    }

}else {
    echo "El tamaño de la imagen es demasiado grande";
}



// iniciar un bloque try/catch para detección de errores de ejecución
try {
    
    include 'conexion_ddbb.php';
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
    //$sql="INSERT INTO TABLAEJEMPLO (IMAGE) VALUES ('$name_imagen')"; // sentencia SQL
    $sql="UPDATE REGISTER SET IMAGE='$usuario_sesion' WHERE MAIL='$usuario_sesion'";
    $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
    $resultado->execute (array($usuario_sesion));
    $resultado->closeCursor ();
   
   

} catch (Exception $e){

    die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es


}


?>