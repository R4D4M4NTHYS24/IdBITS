<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContraApp - Contactos</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Compiled and minified CSS Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- ContrApp Styelesheet -->
    <link rel="stylesheet" href="css/ContrAppstyles.css">
    <!-- Compiled and minified jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <!-- Compiled and minified JavaScript Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</head>
<body class="grey lighten-4">  

<!-- php file to sesion start --> 
<?php include 'php/sesion.php'; ?>
<!-- php file to set profile image file path  -->
<?php include 'php/rutaimagen.php'; ?>
<!-- php file to show datauser  -->
<?php include 'php/datauser.php'; ?>
<!-- creates a new contract modal --> 
<?php include 'create_new_contract.php'; ?>

<?php include 'php/my_contacts.php'; ?>
    
    <header>

       <!-- php file to sesion start --> 
    <?php include 'nav_sidenav_bar.php'; ?>
      </header>

      <main > 

      <!-- in this section is the main content -->
        <!-- breadcrumb starts -->
          <nav class="transparent" >
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="home.php" class="breadcrumb">ContrApp</a>
                <a href="#!" class="breadcrumb">Contactos</a>
              </div>
            </div>
          </nav>
        <!-- breadcrumb ends -->

        <!-- pulse button starts -->
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal lighten-2 pulse">
                  <i class="large material-icons">add</i>
                </a>
                  <ul>
                    <li><a class="btn-floating red modal-trigger" href= "#modal1" title="Agregar contacto"><i class="material-icons">person_add</i></a></li>
                    
                  </ul>
            </div>
        <!-- pulse button ends -->
                  
              <div class="container" style="width: 95%; max-width: 1600px">
                <div class="masonry-row" style="position:relative;">
                  
                   <!-- contact cards starts -->

                   <div class="row">   
                    <div class="col s12">   
                      <div class="card">
                        
                        <div class="card-content">
                        <span class="card-title " style="font-size:36px;"><br><b>Contactos</b></span>
                          <div class="row">
                            <ul>

                              <!-- first part of php starts -->
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
                                      $visibility="none";
                                    }else{
                                      $newarray = implode(", ", $amigos);
                                      $visibility="inline";
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
                                        $resultado=$base->prepare($sql); // se almacena el  objeto de tipo PDO statement que arroja $sql
                                        $resultado->execute (array());

                                        while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                                          $nombres1=$fila["NAME"];
                                  ?>
                              <!-- first part of php ends -->

                              <!-- contact starts -->
                                <li>
                                  <div class="user-view center col s6 m6 l3 "  style="display:<?php echo $visibility; ?>;" >
                                        <div class="file-field input-field ">
                                          <a href="#user"><img class="circle" style="height: 100px; width: 85px; margin:auto;" src="uploads/<?php echo $fila["IMAGE"];?>"></a>
                                        </div>
                                          <a href="#name"><span class="black-text name"><b><?php echo $fila["NAME"] ?></b></span></a>
                                  </div>
                                </li>
                                <!-- contact ends -->

                                <!-- second part of php starts -->
                                  <?php
                                        }

                                      } catch (Exception $e){

                                        die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es
              
                                    }
                                  ?>
                                <!-- second part of php ends -->
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>

                   <!-- contact cards ends -->


                    <!-- pending request card starts -->

                      <div class="row">   
                        <div class="col s12">   
                          <div class="card">
                            
                            <div class="card-content">
                            <span class="card-title " style="font-size:36px;"><br><b>Solicitudes Pendientes</b></span>
                              <div class="row">
                                <ul>

                                  <!-- first part of php starts -->
                                      <?php
                                        
                                        try { 
                                          $usuario=$_SESSION["usuario"];
                                          $visibility_1="none";
                                          $visibility_2="none";
                                          $visibility_3="none";

                                          include 'php/conexion_ddbb.php';
                                          $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                                          $base->exec("SET CHARACTER SET utf8"); // se especifica que se está trabajando con caracteres UTF-8
                                          
                                          $sql="SELECT * FROM contacts WHERE FROM1='$ID' OR TO1='$ID' ";
                                          $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
                                          $resultado->execute (array());
                                          $pendientes=array();
                
                                          while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                                          
                                            if($fila["FROM1"] ==$ID && $fila["STATE1"]== 1){

                                              array_push($pendientes,$fila["TO1"]);
                                              $sol_state_c = "cancelar solicitud";
                                              $visibility_0="inline";
                                              $visibility_1 = "none";
                                              $visibility_2 = "none";
                                              $visibility_3 = "inline";

                                            }

                                            if ($fila["TO1"] == $ID && $fila["STATE1"]== 1){
          
                                              array_push($pendientes,$fila["FROM1"]);
                                              $sol_state_a = "Aceptar solicitud";
                                              $sol_state_r = "Rechazar solicitud";
                                              $visibility_0="inline";
                                              $visibility_1 = "inline";
                                              $visibility_2 = "inline";
                                              $visibility_3 = "none";

                                            }

                                          }

                                        if (empty($pendientes)){
                                          $newarray_pendientes=$ID;
                                          $visibility_0="none";
                                        }else{
                                          $newarray_pendientes = implode(", ", $pendientes);
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
                                            
                                            $sql="SELECT * FROM REGISTER WHERE ID IN ($newarray_pendientes)";
                                            $resultado=$base->prepare($sql); // se almacen el  objeto de tipo PDO statement que arroja $sql
                                            $resultado->execute (array());

                                            while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
                                              $image_pending = $fila["IMAGE"]; 
                                              $name_pending = $fila["NAME"];
                                              $ID_pending = $fila["ID"];
                                      ?>
                                  <!-- first part of php ends -->

                                  <!-- contact starts -->
                                    <li>
                                      <div class="user-view center col s6 m6 l3 " style="display:<?php echo $visibility_0; ?>" >
                                            <div class="file-field input-field ">
                                              <a href="#user"><img class="circle" style="height: 100px; width: 85px; margin:auto;" src="uploads/<?php echo $image_pending;?>"></a>
                                            </div>
                                              <a href="#name"><span class="black-text name"><b><?php echo $name_pending; ?></b></span></a>

                                              <form action="php/aceptar_contacto.php" method="POST"> 

                                                <input type="hidden" name="ID_amigo" id="ID_amigo" value="<?php echo $ID_pending;?>">
                                                  

                                                <div name="request_a" id="request_a" style="display:<?php echo $visibility_1; ?>;">
                                                  <br> <input type="submit"  class="modal-close waves-effect waves-green btn" name="aceptar" id="aceptar" value="<?php echo $sol_state_a; ?>"><br>
                                                </div>

                                                <div name="request_b" id="request_b" style="display:<?php echo $visibility_2; ?>;">
                                                  <br><input type="submit"  class="modal-close waves-effect waves-green btn" name="rechazar" id= "rechazar" value="<?php echo $sol_state_r; ?>">
                                                </div>

                                                <div name="request_c" id="request_c" style="display:<?php echo $visibility_3; ?>;">
                                                  <br> <input type="submit"  class="modal-close waves-effect waves-green btn" name="cancelar" id="cancelar" value="<?php echo $sol_state_c; ?>"><br>
                                                </div>

                                              </form> 
                                      </div>
                                    </li>
                                    <!-- contact ends -->

                                    <!-- second part of php starts -->
                                      <?php
                                            }

                                          } catch (Exception $e){

                                            die ("Error: " . $e->getMessage ()); // "mata" el proceso que está generando el error y arroja que tipo de fallo es
                  
                                        }
                                      ?>
                                    <!-- second part of php ends -->
                                  
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <!-- pending request card ends -->                 


                   <!-- New Contact starts -->    

                    <div class="col s12 center">
                        

                        <!-- Modal Structure starts -->

                            <div id="modal1" class="modal">
                              <form action="php/nuevo_contacto.php" method="POST"  >
                                  <div class="modal-content">
                                    <h4>Agregar nuevo contacto</h4> 
                                  <!-- Auto complete starts -->

                                  <!-- Auto complete ends -->
                                  <!-- checkbox starts -->
                                    <!-- <p>
                                      <label>
                                        <input type="checkbox" name="check" id="check" value="1"  />
                                        <span>¿La busqueda no arroja resultados?</span>
                                      </label>
                                    </p> -->
                                  <!-- checkbox ends -->  

                                  <!-- Invitation starts -->
                                
                                  <!-- <div class="input-field col s12" id="name_div" name="name_div" style="display:block;">
                                    <i class="material-icons prefix">portrait</i>
                                    <input name="name" id="name"  type="text" class="validate" >
                                    <label for="name" class="">Nombre de contacto</label>
                                    <span class="helper-text" data-error="" data-success=""></span>
                                  </div> -->


                                  <div class="input-field col s12" id="mail_div" name="mail_div" style="display:block;">
                                    <i class="material-icons prefix">mail</i>
                                    <input name="mail" id="mail"  type="email" class="validate" >
                                    <label for="mail" class="">Correo electrónico de contacto</label>
                                    <span class="helper-text" data-error="" data-success=""></span>
                                  </div>

                                  <!-- Invitiation ends -->
                                  </div>
                                    <div class="modal-footer">
                                      <input type="submit" class="modal-close waves-effect waves-green btn" value="Enviar solicitud">
                                    </div>
                              </form>
                             
                            </div><br>

                        <!-- Modal Structure ends -->
                    </div>

                   <!-- New Contact ends -->


                </div>            
              </div>
             
             </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
 
 <script>
  document.addEventListener('DOMContentLoaded', function() {
  M.AutoInit();
  });    
 </script> 

 <!-- this script initializes Dropdown for settings -->
 <script>
  document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems, {coverTrigger: false});
    });
 </script>
   
 <!-- Initialization of autocomplete -->  
 <script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });


  // Or with jQuery

  $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Apple": null,
        "Microsoft": null,
        "Google": 'https://placehold.it/250x250'
      },
    });
  });
 </script>  

  <!-- this script is for visibility control of invitation -->
  <script>

      $(document).ready(function(){
        $('#check').on('change', function() {
          if ( this.value == '1')
          {
            $("#mail_div").show();
            $("#name_div").show();

          }

          else 
          {
            $("#mail_div").hide();
            $("#name_div").hide();
           
          }
        });
    });

  </script>

<script>
 
 var current_page = "Contactos";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>
 <script>
   var employee_name = <?php echo json_encode($name_array);?>;

   var size = employee_name.length;

  for (i=0;i<size;i++){
  var x = document.getElementById("select_employee");
  var option = document.createElement("option");
  option.text = employee_name[i];
  option.value = employee_name[i];
  x.add(option);
  }
</script>

<script>
  $(document).ready(function(){
          $('#type_c').on('change', function() {

            if ( this.value == '1')
            {
              $("#div_type_p").hide();
              $("#div_type_l").show();
            }

            else if (this.value == '2')
            {
              $("#div_type_p").show();
              $("#div_type_l").hide();
            }

            else 
            {
              $("#div_type_p").hide();
              $("div_type_l").hide();
            }
          });
    });
  </script>

</body>
</html>