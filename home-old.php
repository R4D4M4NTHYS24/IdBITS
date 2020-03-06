<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContraApp - Pendientes</title>

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

<body class="grey lighten-4" onload="consultar_contratos_enviados()">

    <!-- php file to sesion start --> 
    <?php include 'php/sesion.php'; ?>
    <!-- php file to set profile image file path  -->
    <?php include 'php/rutaimagen.php'; ?>
    <!-- php file to show datauser  -->
    <?php include 'php/datauser.php'; ?>
    <!-- php file to sesion start --> 
    <?php include 'php/my_contacts.php'; ?>
     <!-- php file to show employee data  -->
     
    <!-- creates a new contract modal --> 
    <?php include 'create_new_contract.php'; ?>

      <header>

        <!--file to sidenav and  navbar --> 
        <?php include 'nav_sidenav_bar.php'; ?>
      
      </header>

      <main >  
            
       <!-- in this section is the main content -->

            <!-- breadcrumb starts -->
              <nav class="transparent" >
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">IdBITS</a>
                    <a href="#!" class="breadcrumb">Contratos</a>
                  </div>
                </div>
              </nav>
            <!-- breadcrumb ends -->

            <!-- main container -->     
              <div class="container">
               <div class="masonry-row" style="position:relative;">
                <!--Tab Cards starts -->
                <div class="row">   
                   <div class="col s12 m4 l4">   
                    
                          <div class="card hoverable" onclick="enviados_tab.click()">
                            <div class="card-content">
                              <span class="card-title red-text" ><b>Enviados</b></span>
                              <a class="red-text" id="total_enviados" onclick="enviados_tab.click()">0</a>
                            </div>
                            <div class="card-action red" onclick="enviados_tab.click()">

                            </div>
                          </div>

                   </div>

                   <div class="col s12 m4 l4">   
                    
                          <div class="card hoverable" onclick="recibidos_tab.click()">
                            <div class="card-content ">
                              <span class="card-title orange-text"><b>Recibidos</b></span>
                              <a class="orange-text" id="total_recibidos" onclick="recibidos_tab.click()">0</a>
                            </div>
                            <div class="card-action orange">

                            </div>
                          </div>

                   </div>

                   <div class="col s12 m4 l4">   
                      <div class="card hoverable" onclick="concretados_tab.click()">
                        <div class="card-content">
                          <span class="card-title green-text"><b>Concretados</b></span>
                          <a class="green-text" id="total_concretados" onclick="concretados_tab.click()">0</a>
                        </div>
                        <div class="card-action green">
                        </div>
                      </div>
                    </div>
                    
                  </div> 
              
                  <div class="card">
                    <div class="card-content">
                      <div class="card-title">Mis contratos</div>
                      <p id="owner" style ="display:none"><?php echo $PBK;?></p>
                    </div>
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#test4" id="enviados_tab">Enviados</a></li>
                        <li class="tab"><a class="active" href="#test5" id="recibidos_tab">Recibidos</a></li>
                        <li class="tab"><a href="#test6" id="concretados_tab">Concretados</a></li>
                      </ul>
                    </div>
                    <div class="card-content grey lighten-4">

                      <div id="test4">

                          <!-- DATATABLES1 START -->
                          <div class="col s12" style="position: relative;">
                              
                                
                          
                              <div id="table2_warapper" class="dataTables_wrapper no-footer">                
                                  <div style="float: right; padding-right: 1%;" id="table2_filter" class="dataTables_filter">
                                    <!-- <label> <input type="search" id="input_table2" class="" placeholder="Enter search term" aria-controls="table2" ></label>  -->
                                  </div>
                                  <div style="float: left; padding-left: 1%; width:70px;" id="length_table" class="dataTables_length" style="display: inline;">
                                    <label> <select class="" name="select2" id="select2" aria-controls="table">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="-1">All</option>
                                    </select> </label>
                                  </div>
                                        
                                  <table id="tabla_enviados" class="display nowrap dataTable dtr-inline collapsed cell-border responsive" style="width: 100%;" role="grid">

                                    <thead>
                                        <tr>
                                            <th>IDc</th>
                                            <th>Trabajador</th>
                                            <th>Oficio</th>
                                            <th>Pagos</th>
                                            <th>Inicio</th>
                                            <th>Horario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    
                                  </table>

                                  <div class="footer-wrapper">
                              
                                    <div class="paging-info" >
                                      <div class="dataTables_info" id="table2_info" role="status" aria-live="polite" style="float: left; padding-left: 1%;"></div>
                                    </div>
                                              
                                    <div class="dataTables_paginate paging_full" id="page1_paginate" style="float: right; padding-right: 1%;">
                                        <a class="paginate_button first waves-effect" aria-controls="table2" id=table2_first tabindex="0" data-dt-idx="0"><i class="material-icons">first_page</i></a>
                                        <a class="paginate_button previous waves-effect" aria-controls="table2" id=table2_previous tabindex="0" data-dt-idx="1" ><i class="material-icons">navigate_before</i></a>
                                        <a class="paginate_button next waves-effect" aria-controls="table2" id=table2_next tabindex="0" data-dt-idx="2"><i class="material-icons">navigate_next</i></a>
                                        <a class="paginate_button last waves-effect" aria-controls="table2" id=table2_last tabindex="0" data-dt-idx="3"><i class="material-icons">last_page</i></a>
                                    </div>
                                  </div>
                              </div>
                          
                          
                        </div>
                          <!-- DATATABLES1 End -->
                      
                      </div>

                      <div id="test5">
                      
                      <!-- DATATABLES2 START -->
                              <div class="col s12" style="position: relative;">
                              
                                
                          
                                    <div id="table2_warapper" class="dataTables_wrapper no-footer">                
                                        <div style="float: right; padding-right: 1%;" id="table2_filter" class="dataTables_filter">
                                          <!-- <label> <input type="search" id="input_table2" class="" placeholder="Enter search term" aria-controls="table2" ></label>  -->
                                        </div>
                                        <div style="float: left; padding-left: 1%; width:70px;" id="length_table" class="dataTables_length" style="display: inline;">
                                          <label> <select class="" name="select2" id="select2" aria-controls="table">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="-1">All</option>
                                          </select> </label>
                                        </div>
                                              
                                        <table id="tabla_recibidos" class="display nowrap dataTable dtr-inline collapsed cell-border responsive" style="width: 100%;" role="grid">

                                          <thead>
                                              <tr>
                                                  <th>IDc</th>
                                                  <th>Empleador</th>
                                                  <th>Oficio</th>
                                                  <th>Pagos</th>
                                                  <th>Inicio</th>
                                                  <th>Horario</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          </tbody>
                                          
                                        </table>

                                        <div class="footer-wrapper">
                                    
                                          <div class="paging-info" >
                                            <div class="dataTables_info" id="table2_info" role="status" aria-live="polite" style="float: left; padding-left: 1%;"></div>
                                          </div>
                                                    
                                          <div class="dataTables_paginate paging_full" id="page1_paginate" style="float: right; padding-right: 1%;">
                                              <a class="paginate_button first waves-effect" aria-controls="table2" id=table2_first tabindex="0" data-dt-idx="0"><i class="material-icons">first_page</i></a>
                                              <a class="paginate_button previous waves-effect" aria-controls="table2" id=table2_previous tabindex="0" data-dt-idx="1" ><i class="material-icons">navigate_before</i></a>
                                              <a class="paginate_button next waves-effect" aria-controls="table2" id=table2_next tabindex="0" data-dt-idx="2"><i class="material-icons">navigate_next</i></a>
                                              <a class="paginate_button last waves-effect" aria-controls="table2" id=table2_last tabindex="0" data-dt-idx="3"><i class="material-icons">last_page</i></a>
                                          </div>
                                        </div>
                                    </div>
                                
                                
                              </div>
                      <!-- DATATABLES2 End -->
                      
                      </div>

                      <div id="test6">
                      
                      <!-- DATATABLES3 START -->
                      <div class="col s12" style="position: relative;">
                              
                                
                          
                              <div id="table2_warapper" class="dataTables_wrapper no-footer">                
                                  <div style="float: right; padding-right: 1%;" id="table2_filter" class="dataTables_filter">
                                    <!-- <label> <input type="search" id="input_table2" class="" placeholder="Enter search term" aria-controls="table2" ></label>  -->
                                  </div>
                                  <div style="float: left; padding-left: 1%; width:70px;" id="length_table" class="dataTables_length" style="display: inline;">
                                    <label> <select class="" name="select2" id="select2" aria-controls="table">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="-1">All</option>
                                    </select> </label>
                                  </div>
                                        
                                  <table id="tabla_concretados" class="display nowrap dataTable dtr-inline collapsed cell-border responsive" style="width: 100%;" role="grid">

                                    <thead>
                                        <tr>
                                            <th>IDc</th>
                                            <th>Empleador</th>
                                            <th>Trabajador</th>
                                            <th>Oficio</th>
                                            <th>Pagos</th>
                                            <th>Inicio</th>
                                            <th>Horario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    
                                  </table>

                                  <div class="footer-wrapper">
                              
                                    <div class="paging-info" >
                                      <div class="dataTables_info" id="table2_info" role="status" aria-live="polite" style="float: left; padding-left: 1%;"></div>
                                    </div>
                                              
                                    <div class="dataTables_paginate paging_full" id="page1_paginate" style="float: right; padding-right: 1%;">
                                        <a class="paginate_button first waves-effect" aria-controls="table2" id=table2_first tabindex="0" data-dt-idx="0"><i class="material-icons">first_page</i></a>
                                        <a class="paginate_button previous waves-effect" aria-controls="table2" id=table2_previous tabindex="0" data-dt-idx="1" ><i class="material-icons">navigate_before</i></a>
                                        <a class="paginate_button next waves-effect" aria-controls="table2" id=table2_next tabindex="0" data-dt-idx="2"><i class="material-icons">navigate_next</i></a>
                                        <a class="paginate_button last waves-effect" aria-controls="table2" id=table2_last tabindex="0" data-dt-idx="3"><i class="material-icons">last_page</i></a>
                                    </div>
                                  </div>
                              </div>
                          
                          
                        </div>
                      <!-- DATATABLES3 End -->
                      
                      </div>
                    </div>
                  </div>
      
                <!--Tab Cards Ends -->
          



               </div>            
              </div>
              <div class="row" style="display:none">
                <form action="./doc_enviado.php" method="POST">
                  <input type="text" name="firmante_e" id="firmante_e" value="">
                  <input type="text" name="ID_e" id="ID_e" value="">
                  <input type="submit" id="click_rec" onclick = "this.form.action = './doc_enviado.php'; this.form.submit()">
                </form>
                <form action="./doc_recibido.php" method="POST">
                  <input type="text" name="firmante_r" id="firmante_r" value="">
                  <input type="text" name="ID_r" id="ID_r" value="">
                  <input type="submit" id="click_env" onclick = "this.form.action = './doc_recibido.php'; this.form.submit()">
                </form>
                <form action="./doc_concretado.php" method="POST">
                  <input type="text" name="firmante_c" id="firmante_c" value="">
                  <input type="text" name="ID_c" id="ID_c" value="">
                  <input type="submit" id="click_con" onclick = "this.form.action = './doc_concretado.php'; this.form.submit()">
                </form>
              </div>
             
      </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

 <!-- Perform DataTables -->
 <script src="JavaScript/DataTables.js"></script>
 <script src="JavaScript/consultar_enviados.js"></script>
 <script src="JavaScript/consultar_recibidos.js"></script>
 <!-- <script src="JavaScript/carga_firma.js"></script> -->
 <script src="JavaScript/bundle.js"></script>
 <script src="JavaScript/mostrar_contrato.js"></script>
 <script src="JavaScript/carga_contrato.js"></script>


<!-- this script initializes Dropdown for settings -->
<script>
enviados_tab=document.getElementByID("enviados_tab");
recibidos_tab=document.getElementByID("recibidos_tab");
concretados_tab=document.getElementByID("concretados_tab");
 </script>

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
 
 var current_page = "Mis Contratos";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>

<script>
    function changeAction (value){
      if (value=="4"){
        document.getElementById("form1").action= "creacion_prestacion_servicios.php";
        
      }
    
    }
  </script>
   
</body>
</html>