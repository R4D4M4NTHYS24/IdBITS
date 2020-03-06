<?php
      // EXTRAER TODOS LOS DATOS DE USUARIO DE LA BASE DE DATOS
     // iniciar un bloque try/catch para detección de errores de ejecución
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
                            

                          }

                      } catch (Exception $e){

                          die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

                      }
?>