<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solemne - Configuración</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- ContrApp Styelesheet -->
    <link rel="stylesheet" href="css/ContrAppstyles.css">
    <!-- Compiled and minified jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
   
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
                  <a href="home.php" class="breadcrumb"> Solemne</a>
                  <a href="#!" class="breadcrumb">Configuración de perfil</a>
                </div>
              </div>
            </nav>
        <!-- breadcrumb ends -->

        <!-- Main container starts -->
          <div class="container" style="margin-top: 20 px;" >
            <div class="masonry-row" style="position:relative;">

              <div class="card grey lighten-3">  

                <span style="padding-left: 1%;" class="card-title"><b>Datos de usuario</b></span>        
                  <div class="row"><br>

                  <!-- User Image starts -->    

                        <div class="col s12 m2 center">
                          <a class = "modal-trigger" href="#modal1"><img class="circle" style="height: 140px; width: 115px; margin: auto;" src="uploads/<?php echo $ruta_img;?>"></a>

                            <!-- Modal Structure starts -->

                                <div id="modal1" class="modal">
                                  <form action="php/datosImagen.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-content">
                                      <h4>Cambiar imagen de perfil</h4>                                 
                                      <input type="file" name="imagen" size="20">
                                    </div>
                                      <div class="modal-footer">
                                        <input type="submit" class="modal-close waves-effect waves-green btn" value="Cambiar imagen">
                                      </div>
                                  </form> 
                                </div>
    
                            <!-- Modal Structure ends -->
                        </div>

                  <!-- User Image ends -->
                

                    <!-- Data User starts -->

                            <div class="col s12 m10">
                                <ul class="collapsible">
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">portrait</i>Perfil</div>

                                          <div class="collapsible-body">
                                            <div class="row">
                                              <form action="php/cambiardatos.php" method="POST"  >

                                                <div class="input-field col s12">
                                                  <i class="material-icons prefix">portrait</i>
                                                  <input name="name" id="name" type="text" class="validate" value = "<?php echo $NAME;?>"  required>
                                                    <label for="name" class="">Nombre</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>
                                                                
                                                <div class="input-field col s12">
                                                  <i class="material-icons prefix">mail_outline</i>
                                                  <input name="mail" id="mail" type="email" class="validate" value = "<?php echo $MAIL;?>" required>
                                                    <label for="mail" class="">Correo electrónico</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>

                                                <div class="input-field col s12 m12 l6">
                                                  <i class="material-icons prefix">portrait</i>
                                                  <input name="ident" id="ident" type="text" class="validate" value = "<?php echo $IDENT;?>" >
                                                    <label for="ident" class="">Documento de identidad</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>

                                                <div class="input-field col s12 m12 l6">
                                                  <i class="material-icons prefix">local_phone</i>
                                                  <input name="tel" id="tel" type="text" class="validate" value = "<?php echo $TEL;?>">
                                                    <label for="tel" class="">Telefono</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>

                                                <div class="input-field col s12">
                                                  <i class="material-icons prefix">home</i>
                                                  <input name="address" id="address" type="text" class="validate" value = "<?php echo $ADDRESS;?>" >
                                                    <label for="address" class="">Dirección de residencia</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>

                                                <div class="input-field col s12">
                                                  <i class="material-icons prefix">business</i>
                                                  <input name="company" id="company" type="text" class="validate" value = "<?php echo $COMPANY;?>" >
                                                    <label for="company" class="">Organización</label>
                                                    <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                                </div>

                                                <div class="input-field col s12">
                                                <i class="material-icons prefix">date_range</i>
                                                <input type="text" name="date" id="date" class="datepicker" value ="<?php echo $DATE;?>">
                                                <label for="date" class="">Fecha de nacimiento</label>
                                                </div>

                                                <div style="padding-left: 40%;">                               
                                                  <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                                                    <i class="material-icons right">send</i>
                                                  </button>
                                                </div>

                                              </form>     
                                              
                                            </div>
                                                        
                                          </div>
                                    </li>   

                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">lock_outline</i>Cambiar contraseña</div>
                                        <div class="collapsible-body">
                                          <div class="row">
                                          
                                            <div class="input-field col s12"> 
                                              <i class="material-icons prefix">lock_outline</i>
                                              <input name="password" id="password" type="password" class="validate" minlength="8" required>
                                              <label for="password">Contraseña</label>
                                              <span class="helper-text" data-error="la contraseña debe contener minimo 8 caracteres" data-success="¡correcto!"></span>
                                            </div>

                                            <div class="input-field col s12">
                                              <i class="material-icons prefix">lock_outline</i>
                                              <input name="cpassword" id="cpassword" type="password" class="validate" required>
                                              <label for="cpassword">Confirmar Contraseña</label>
                                              <span class="helper-text" data-error="Las contraseñas no coinciden" data-success="¡correcto!"></span>
                                            </div>

                                            <div style="padding-left: 40%;">
                                              <button class="btn waves-effect waves-light" type="submit" name="action">Cambiar
                                                <i class="material-icons right">send</i>
                                              </button>
                                              </div>

                                          </div>
                                        
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                    <!-- Data User ends -->
                  </div>    

              </div>           

            </div>                          
          </div>
        <!-- Main container ends -->
      <div class="col s30 m50">
         <a href="php/cerrar_sesion.php" style="padding-left:400px"title="Sign out">Cerrar sesión</a>
      </div>  
    </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
 
 <!-- this script initializes all Materialize javascript components -->
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

<!-- Birth Date Initialization -->
 <script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
 </script>

<script>
 
 var current_page = "Configuración de perfil";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>
   
</body>
</html>