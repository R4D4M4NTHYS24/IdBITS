<?php
                                                            
                                                            try {
                                                    
                                                              $usuario=$_SESSION["usuario"];
                                                              include 'php/conexion_ddbb.php';
                                                              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                                                              $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
                                                              
                                                              $sql="SELECT * FROM contacts WHERE FROM1='$ID'  OR TO1='$ID' ";
                                                              $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
                                                              $resultado->execute (array());
                                                              $amigos=array();
                                    
                                                              while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                                                              
                                                                if($fila["FROM1"] ==$ID && $fila["STATE1"]== 2){

                                                                  array_push($amigos,$fila["TO1"]);

                                                                }

                                                                if ($fila["TO1"] == $ID && $fila["STATE1"]== 2){
                              
                                                                  array_push($amigos,$fila["FROM1"]);
                                                                }


                                                              }

                                                            if (empty($amigos)){
                                                              $newarray=$ID;
                                                            }else{
                                                              $newarray = implode(", ", $amigos);
                                                            }
                                                            
                                                            
                                    
                                                          } catch (Exception $e){
                                    
                                                              die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es
                                    
                                                          }

                                                            
                                                            // iniciar un bloque try/catch para detección de errores de ejecución
                                                            try {

                                                                $usuario=$_SESSION["usuario"];
                                                                include 'php/conexion_ddbb.php';
                                                                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                                                                $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
                                                                
                                                                $sql="SELECT * FROM REGISTER WHERE ID IN ($newarray)";
                                                                $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
                                                                $resultado->execute (array());
                                                                $name_array =array();
                                                                $img_array=array();
                                                                while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                                                                  $nombres1=$fila["NAME"];
                                                                  $imagenes1=$fila["IMAGE"];

                                                                  array_push($name_array,$nombres1);
                                                                  array_push($img_array,$imagenes1);
                                                                  
                                                        
                                                                }

                                                                if (empty($name_array) && empty($img_array) ){
                                                                  $new_name_array = implode(", ", "nombre");
                                                                  $new_img_array = implode(", ","default");
                                                                }else{
                                                                  $new_name_array = implode(", ", $name_array);
                                                                  $new_img_array = implode(", ", $img_array);
                                                                }



                                                              } catch (Exception $e){

                                                                die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es
                                      
                                                            }
                                                          ?>