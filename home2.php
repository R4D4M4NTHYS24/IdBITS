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
    
</head>

<body class="grey lighten-4" onload="consultar_diplomas()">

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
            
       <!-- in this section is the main content -->


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
            <!-- main container -->    
              <div class="container">
               <div class="masonry-row" style="position:relative;">

              <!-- Cards Start -->
                  <div class="row">   
                   <div class="col s12 m4 l4">   
                    
                          <div class="card hoverable">
                            <div class="card-content">
                              <span class="card-title"><b>Pendientes</b></span>
                              <a class="red-text" href="Pendientes.php"> 3 Contratos pendientes</a>
                            </div>
                            <div class="card-action red"  href="Pendientes.php">

                            </div>
                          </div>

                   </div>

                   <div class="col s12 m4 l4">   
                    
                          <div class="card hoverable">
                            <div class="card-content ">
                              <span class="card-title"><b>En ejecución</b></span>
                              <a class="orange-text" href="ejecucion.php">2 Contratos en ejecución</a>
                            </div>
                            <div class="card-action orange">

                            </div>
                          </div>

                   </div>

                   <div class="col s12 m4 l4">   
                    
                         <div class="card hoverable">
                           <div class="card-content">
                             <span class="card-title"><b>Terminados</b></span>
                             <a class="green-text" href="terminados.php">25 Contratos terminados</a>
                           </div>
                           <div class="card-action green">

                           </div>
                         </div>

                   </div>

                  </div> 

              <!-- Cards End -->
               </div>            
              </div>
            
              <div class="row" id="row_tabla_diplomas" style="display:block">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="tabla_diplomas">
                                        <thead>
                                            <tr>
                                                <th>Receptor</th>
                                                <th>Oficio</th>
                                                <th>Inicio</th>
                                                <th>Periodo</th>
                                                <th>Horario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
             
      </main>            

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<!-- Perform DataTables -->
<script src="JavaScript/DataTables.js"></script>
<script src="JavaScript/bundle.js"></script>
<script src="js/consultar_tabla.js"></script>
<!-- <script src="JavaScript/dialog-active.js"></script> -->
<!-- <script src="JavaScript/sweetalert2.min.js"></script> -->
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

<!-- this script initializes Dropdown for settings -->
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
 
 var current_page = "Principal";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>

 

</body>
</html>