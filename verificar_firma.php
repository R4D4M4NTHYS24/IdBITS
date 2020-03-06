<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IdBITS - Home</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Compiled and minified CSS Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- ContrApp Styelesheet -->
    <link rel="stylesheet" href="css/ContrAppstyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/dialog.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css"> -->
    <!-- Compiled and minified jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <!-- Compiled and minified JavaScript Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
</head>

<body class="grey lighten-4"  onload="generar_qr() , consultar_balance() ">
<!-- onload="consultar_balance()" -->

    <!-- php file to sesion start --> 
    <?php include 'php/sesion.php'; ?>
    <!-- php file to set profile image file path  -->
    <?php include 'php/rutaimagen.php'; ?>
    <!-- php file to show datauser  -->
    <?php include 'php/datauser.php'; ?>
    <!-- php file to sesion start --> 
    <?php include 'php/my_contacts.php'; ?>
    <!-- creates a new contract modal --> 
    <?php include 'create_new_contract.php'; ?>

      <header>

        <!--file to sidenav and  navbar --> 
        <?php include 'nav_sidenav_bar.php'; ?>
      
      </header>

      <main >  
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <br>
                                <h2 class="title-1 m-b-25">Verificar Firma</h2>
                                <div class="col-lg-12">
                                <div class="col-12"> 
                                <div class="col s12 center">
                        
                              <form action="php/nuevo_contacto.php" method="POST"  >
                                    <h2>Buscar ID de Usuario por correo electrónico</h2> 

                                  <div class="input-field col s12 row" id="mail_div" name="mail_div" style="display:block;">
                                    <i class="material-icons prefix">mail</i>
                                    <input name="mail" id="mail"  type="email" class="validate" >
                                    <label for="mail" class="">Correo electrónico de Usuario</label>
                                    <span class="helper-text" data-error="" data-success=""></span>
                                    <input type="submit" class="modal-close waves-effect waves-green btn" value="Buscar">
                                  </div>
                                  </div>
                              </form>
                            </div><br>
                    </div>  
                                  
            <!-- END MAIN CONTENT-->


            <!-- pulse button starts -->
              <div class="fixed-action-btn">
                  <a class="btn-floating btn-large teal lighten-2 pulse">
                    <i class="large material-icons">add</i>
                  </a>
                  <ul>
                  <li><a class="btn-floating red modal-trigger" href= "#modal_new_contract" title="crear contrato"><i class="material-icons">add</i></a></li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                  </ul>
              </div>
            <!-- pulse button ends -->
               </div>            
              </div>
             <div id="container"></div>
      </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

 <!-- Perform DataTables -->
 <script src="JavaScript/DataTables.js"></script>
 <script src="bundle.js"></script>
 <script src="JavaScript/validar_formulario_firma.js"></script>

 <!-- <script src="JavaScript/dialog-active.js"></script> -->
 <!-- <script src="JavaScript/sweetalert2.min.js"></script> -->
 <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

 <!-- <script>
    function wallet(){
      console.log("Creando Billetera") ;
      password = document.getElementById("password").value;
      account = web3.eth.accounts.create();
      owner = account.address;
      //Archivo Json con las llaves cifradas
      jsonf = web3.eth.accounts.encrypt(account.privateKey, password);
      //-----Almacenar JSON en la base de datos, asociada al perfil del usuario
      // document.getElementById("json").innerHTML =jsonf.id;
      //Cuando el usuario requiera firmar una transacciÃ³n, se preguntara por su password y se desbloqueara su llave privada
      //var account_to_sign=web3.eth.accounts.decrypt(json,"password");
      var data = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(jsonf));
      $('<a id="descargar" target="_blank" href="data:' + data + '" download="Firma '+institucion.value+' ContrApp.json"></a>').appendTo('#container');
      var descarga = document.getElementById('descargar');
      descarga.click();
    }
 </script> -->

<!-- this script initializes Dropdown for settings -->
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="JavaScript/main.js"></script>
    <script src="JavaScript/bundle.js"></script>
    <script src="JavaScript/recargar_cuenta.js"></script>
    <script src="JavaScript/qr_gen.js"></script>


 <script>
  document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems, {coverTrigger: false});
    });
 </script>

  <!-- this script initializes all Materialize javascript components -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
  M.AutoInit();
  });    
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

 <!-- this script is for visibility control of input name -->
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

  <script>
    function changeAction (value){
      if (value=="4"){
        document.getElementById("form1").action= "creacion_prestacion_servicios.php";
        
      }
    
    }
  </script>

 <script>
 
 var current_page = "Firma";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>

 

</body>
</html>