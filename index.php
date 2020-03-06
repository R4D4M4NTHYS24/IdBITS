<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IdBITS - Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
     
</head>

<body  background="images/IDwall.jpg">
  <main>  
    <div class="container">  
      <div class="row center">
        <div class="col s12 m6 l4  offset-m3 offset-l4">
          <div class="card">
            <div class="card-content" >
              <span class="card-title " style="font-size:36px;"><img src="images/unlock-id.png" height="50" width="50"><br><b>IdBITS</b></span>
              <h6 style="color: grey;">Ingresa tus datos</h6><br><br>
                
                <div class="row">
                  <form action="php/proof_index.php" method="POST">

                    <div class="input-field col s12">
                      <i class="material-icons prefix">portrait</i>
                      <input name="mail" id="mail"  type="email" class="validate" required>
                      <label for="mail" class="">Correo electrónico</label>
                      <span class="helper-text" data-error="" data-success=""></span>
                    </div>

                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock_outline</i>
                      <input name="password" id="password" type="password" class="validate" required>
                      <label for="password">Contraseña</label>
                      <span class="helper-text" data-error="" data-success=""></span>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión
                      <i class="material-icons right">send</i>
                    </button>
                
                  </form>
                  <br><span>¿Aún no tienes cuenta? <a href="Register.php">CREAR CUENTA</a></span>
                </div>
            </div>
          </div>
        </div>
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


        <script>
        var u_empty = document.getElementById("username");

        u_empty.addEventListener("keyup", function (event) {
            if (u_empty.validity.valueMissing) {
              u_empty.setCustomValidity("el usuario no debe estár vacío");
            } else {
              u_empty.setCustomValidity("");
            }
          });

          var p_empty = document.getElementById("password");

          p_empty.addEventListener("keyup", function (event) {
              if (p_empty.validity.valueMissing) {
                p_empty.setCustomValidity("La contraseña no debe estár vacío");
              } else {
                p_empty.setCustomValidity("");
              }
            });
        

        </script>

</body>
</html>