<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContrApp - Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <style>
    .dropdown-content {
	min-width: 0;
	min-height: 0;
  overflow: visible !important;
}

.secondDropDown {
  /*adjust by your needs*/
	margin-left: 124px !important;
	margin-top: -50px !important;
}
    </style>
     
</head>

<body  background="images/contract4.jpg">
  <main>  
    <!-- Dropdown Trigger -->
  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a class="dropdown-button" href="#!" data-activates="secondDRP">three</a></li>
</ul>


<ul id='secondDRP' class='dropdown-content secondDropDown'>
  <li><a class="truncate" href="#!">Lorem ipsum dolor</a></li>
  <li><a class="truncate" href="#!">Quisque tempus</a></li>
  <li><a class="truncate" href="#!">Pellentesque</a></li>
</ul>
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

<script>

$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrain_width: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left' // Displays dropdown with edge aligned to the left of button
		}
	);

</script>
</body>
</html>