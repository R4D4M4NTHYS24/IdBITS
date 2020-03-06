<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Solemne - Registro</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<!-- Compiled and minified jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

</head>

<body background="images/contract4.jpg" >

  <!-- Main Register Form starts -->
    <main>
      
      <div class="container">
        <div class="row center">
          <div class="col s12 m6 l0  offset-m3" >
            <div class="card">
              <div class="card-content">
                <span  class="card-title" style="font-size:36px;"><img src="images/contract.png"  height="50" width="50"><br><b>Solemne</b></span>
                  <h6 style="color: grey;">Crea una cuenta</h6><br>

                      <div class="row">
                        <form action="php/proof_register.php" method="POST"  >
                            <div class="input-field col s12">
                              <select name="ROL" id="ROL">
                              <option value="" disabled selected required>Elija una opción</option>
                              <option value="Rol 1">Persona Jurídica</option>
                              <option value="Rol 2">Persona Natural</option>
                              </select>
                              <label>Tipo de usuario</label>
                            </div>

                            <!-- <div id="razon_div" name="razon_div" class="input-field col s12" style="display:none;">
                              <i class="material-icons prefix">portrait</i>
                              <input name="razon" id="razon" type="text" class="validate" required>
                              <label for="razon" class="">Razón Social</label>
                              <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                            </div> -->

                            <div id="name_div" name="name_div" class="input-field col s12" style="display:none;">
                              <i class="material-icons prefix">portrait</i>
                              <input name="name" id="name" type="text" class="validate" required>
                              <label for="name" class="" id="nombre">Nombre y Apellido</label>
                              <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                            </div>

                            <div id="mail_div" class="input-field col s12">
                              <i class="material-icons prefix">mail_outline</i>
                              <input name="mail" id="mail" type="email" class="validate" required>
                              <label for="mail" class="email">Correo electrónico</label>
                              <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                            </div>
                                          
                            <div id="pass_div" class="input-field col s12 m12 l6"> 
                              <i class="material-icons prefix">lock_outline</i>
                              <input name="password" id="password" type="password" class="validate" minlength="8" required>
                              <label for="password"> Contraseña</label>
                              <span class="helper-text" data-error="minimo 8 caracteres" data-success=""></span>
                            </div>

                            <div id="confpass_div" class="input-field col s12 m12 l6">
                              <i class="material-icons prefix">lock_outline</i>
                              <input name="cpassword" id="cpassword" type="password" class="validate" required>
                              <label for="cpassword">Confirmar</label>
                              <span class="helper-text" data-error="Las contraseñas no coinciden" data-success=""></span>
                            </div>
      
                            <button class="btn waves-effect waves-light" type="submit" id="boton_register" name="action" onclick="crear_billetera()">Registrar
                              <i class="material-icons right">send</i>
                            </button><br><br>
                        </form> 
                   
                          <span style="font-size:11px;"> Al crear la cuenta aceptas los <a  class="modal-trigger" href="#modal1">terminos y condiciones</a> y <a class="modal-trigger" href="#modal2">politicas de tratamiento de datos</a></span>
                          <li class="divider"></li>
                          <br><span> ¿Ya tienes una cuenta? <a href="index.php">INGRESAR</a></span>
                       
                      </div>
              </div>     
            </div>
                      <!-- Modal Structure 1 start-->
                        <div id="modal1" class="modal">
                          <div class="modal-content">
                            <h4>Terminos y Condiciones</h4>
                            <p>Escribir terminos y condiciones</p>
                          </div>
                          <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Acepto</a>
                          </div>
                        </div>
                      <!-- Modal Structure 1 ends-->

                      <!-- Modal Structure 2 starts -->
                        <div id="modal2" class="modal">
                          <div class="modal-content">
                            <h4>Politicas de tratamiento de datos</h4>
                            <p>Escribir politicas de tratamiento de datos</p>
                          </div>
                          <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Acepto</a>
                          </div>
                        </div>
                     <!-- Modal Structure 2 ends -->
          </div>
        </div>
      </div>              
                          
    </main>
  <!-- Main Register Form starts -->

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
 <script src="JavaScript/bundle.js"></script>
 <script src="JavaScript/validar_formulario_firma.js"></script>
 <script src="JavaScript/register_eth.js"></script>
 <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

  <!-- this script is for visibility control of input name -->
  <script>

      $(document).ready(function(){
        $('#ROL').on('change', function() {
          if ( this.value == 'Rol 1')
          {
            $("#name_div").show();
            $("#razon_div").hide();
            $("#razon").val('0');
            $("#name").val('');
            document.getElementById("nombre").innerHTML="Razon Social"
          }
          else if (this.value == 'Rol 2')
          {
            $("#name_div").show();
            $("#razon_div").hide();
            $("#razon").val('0');
            $("#name").val('');
            document.getElementById("nombre").innerHTML="Nombre y Apellido"
          }
          else if (this.value == 'Rol 3')
          {
            $("#name_div").show();
            $("#razon_div").hide();
            $("#razon").val('0');
            $("#name").val('');
          }
          else 
          {
            $("#name_div").hide();
            $("#razon_div").hide();
          }
        });
    });

  </script>
  
<!-- Initialize all instructions that require javascript to be executed in Materialize -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
  });    
  </script>

<!-- verify that password and cpassword be the same word -->
  <script> 
    var password = document.getElementById('password'), confirm_password = document.getElementById('cpassword');
    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity('Passwords Don\'t Match');
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword; 
  </script>




</body>

</html>