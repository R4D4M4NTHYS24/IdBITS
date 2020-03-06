<?php
 // Extraer los datos del empleado para la creación del contrato

$emp_name= $_POST["select_employee"];



     // iniciar un bloque try/catch para detección de errores de ejecución
                      try {
                        
                          include 'conexion_ddbb.php';
                          $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                          $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
                          
                          $sql="SELECT * FROM REGISTER WHERE NAME='$emp_name'";
                          $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
                          $resultado->execute (array());
                         
                          while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                              $NAME_emp = $fila["NAME"];
                              $MAIL_emp = $fila["MAIL"];
                              $IDENT_emp = $fila["IDENT"];
                              $ADDRESS_emp = $fila["ADDRESS"];
                              $TEL_emp = $fila["TEL"];
                              $DATE_emp = $fila["DATE"];
                              $COMPANY_emp = $fila["COMPANY"];
                              $ID_emp = $fila["ID"];
                              $DATE_emp =$fila["DATE"];
                            

                          }

                      } catch (Exception $e){

                          die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es

                      }
?>