<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solemne - Home</title>

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

<body class="grey lighten-4">

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
                                <h2 class="title-1 m-b-25">Recargar Firma</h2>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">Ingrese la Firma que desea recargar</div>
                                        <div class="card-body card-block">
                                            <form id="myform">
                                                <input id="myfile" name="file" type="file" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Plan Basico</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" height="100" width="100" src="Images/icons/firma.png" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">10 Firmas</h5>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" onclick="click_basico()">
                                                <i class="fa fa-dollar"></i>&nbsp;
                                                <span id="payment-button-amount">50.000 COP</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Plan Macro</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" height="100" width="100" src="Images/icons/sello.png" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">25 Firmas</h5>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" onclick="click_macro()">
                                                <i class="fa fa-dollar"></i>&nbsp;
                                                <span id="payment-button-amount">100.000 COP</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Plan Premiun</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" height="100" width="100" src="Images/icons/documentos.png" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">50 Firmas</h5>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" onclick="click_premiun()">
                                                <i class="fa fa-dollar"></i>&nbsp;
                                                <span id="payment-button-amount">150.000 COP</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="alert_recarga" style="display:none;">
                            <span class="badge badge-pill badge-success">Transacción Exitosa</span>
                            Su firma fue recargada exitosamente
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div>
                            <input type="button" id="modal_button" class="btn btn-primary  py-2 px-5" data-toggle="modal" data-target="#staticModal" style="display:none">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
 <script src="JavaScript/wallet.js"></script>
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
    <script src="JavaScript/carga_firma.js"></script>
    <script src="JavaScript/recargar_cuenta.js"></script>

    <script>
    function click_basico(){
        valor_recarga=10;
        consultar_IDu(valor_recarga)
    }
    function click_macro(){
        valor_recarga=25;
        consultar_IDu(valor_recarga)
    }
    function click_premiun(){
        valor_recarga=50;
        consultar_IDu(valor_recarga)
    }
    function consultar_IDu(valor_recarga){
        console.log("Valor de la Recarga:" + valor_recarga);
        console.log("Address a recargar:"+ owner);
        contract.methods.address2IDu(owner).call().then(IDu => {
            IDu.onload=consultar_datos(IDu, valor_recarga);
        })
    }
    function consultar_datos(IDu, valor_recarga){
        console.log("ID de Usuario:"+ IDu);
        contract.methods.usuarios(IDu).call().then(user => {
            user.onload=imprimir_datos(user, valor_recarga);
        })  
    }
    function imprimir_datos(user, valor_recarga){
        console.log("usuario: "+user[1]);
        console.log("Abriendo Modal");
        swal({
        title: 'Recargando Firma',
        text: 'Esta a punto de recagar '+ valor_recarga +' Diplomas a la firma a nombre de: '+user[1],
        type: 'success',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Confirmar',
        // cancelButtonText: false
      }).then((isConfirm) => {
        console.log("listo para recargar"+ user[4]+"el valor de: "+valor_recarga);
        let timerInterval
        swal({
            title: 'Recargando Firma',
            text: 'En unos momentos tu firma estará recargada',
            timer: 15000,
            timerProgressBar: true,
            onBeforeOpen: () => {
                swal.showLoading()
                // timerInterval = setInterval(() => {
                // swal.getContent().querySelector('b')
                //     //.textContent = swal.getTimerLeft()
                // }, 100)
            },
            onClose: () => {
                // clearInterval(timerInterval)
            }
            }).then((result) => {
            if (
                /* Read more about handling dismissals below */
                result.dismiss === swal.DismissReason.timer
            ) {
                console.log('I was closed by the timer') // eslint-disable-line
            }
            })
        recargar_cuenta(owner,valor_recarga);
      });
    }
    </script>

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