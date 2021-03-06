<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IdBITS- Creacion Contrato - Trabajo término fijo</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- ContrApp Styelesheet -->
    <link rel="stylesheet" href="css/ContrAppstyles.css">
    <!-- Compiled and minified jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
   
</head>

<body class="grey lighten-4" >  

 <!-- php file to sesion start --> 
 <?php include 'php/sesion.php';?>
 <!-- php file to set profile image file path  -->
 <?php include 'php/rutaimagen.php';?>
 <!-- php file to show datauser -->
 <?php include 'php/datauser.php';?>
 <!-- php file to sesion start --> 
 <?php include 'php/my_contacts.php';?>
 <!-- php file to show employee data  -->
 <?php include 'php/dataemployee.php'; ?>

    <header>
    <!-- php file navbar and sidenav --> 
    <?php include 'nav_sidenav_bar.php';?>
    </header>

    <main >  

      <!-- in this section is the main content -->  
        <!-- breadcrumb starts -->
            <nav class="transparent z-depth-1 " >
              <div class="nav-wrapper ">
                <div class="col s12">
                  <a href="home.php" class="breadcrumb">IdBITS</a>
                  <a href="#!" class="breadcrumb">Creacion Contrato - Trabajo término fijo</a>
                </div>
              </div>
            </nav>
        <!-- breadcrumb ends -->
        
        <!-- Main container starts -->
            <div class="container" style="margin-top: 20 px;" >
                <div class="masonry-row" style="position:relative;">
                  <form action="" method="POST">
                    <div class="row">

                      <div class="card z-depth-0" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px;">
                        <div class="card-content">
                          <span class="card-title">Contrato de trabajo - Término fijo</span>
                        </div>
                        <div class="card-tabs">
                          <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">Datos del empleador</a></li>
                            <li class="tab"><a class="active" href="#test5">Datos del trabajador</a></li>
                            <li class="tab"><a href="#test6">Condiciones del contrato</a></li>
                          </ul>
                        </div>
                        <div class="card-content grey lighten-4" style="min-height:374px">

                          <div id="test4">
                            <div class="row">
                              <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">portrait</i>
                                <input name="name" id="name" type="text" class="validate" value = "<?php echo $NAME;?>"  required>
                                <label for="name" class="">Nombre</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">portrait</i>
                                <input name="ident" id="ident" type="text" class="validate" value = "<?php echo $IDENT;?>" >
                                <label for="ident" class="">Documento de identidad</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div>

                              <div class="input-field col s12">
                                <i class="material-icons prefix">home</i>
                                <input name="address" id="address" type="text" class="validate" value = "<?php echo $ADDRESS;?>" >
                                <label for="address" class="">Dirección de residencia</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div> 
                            </div>      
                          
                          </div>

                          <div id="test5">
                          
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">portrait</i>
                                <input name="select_employee" id="select_employee" type="text" class="validate" value = "<?php echo $NAME_emp;?>"  required>
                                <label for="select_employee" class="">Nombre</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div>

                              <div class="input-field col s12">
                                <i class="material-icons prefix">home</i>
                                <input name="address_emp" id="address_emp" type="text" class="validate" value = "<?php echo $ADDRESS_emp;?>" >
                                <label for="address_emp" class="">Dirección de residencia</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">portrait</i>
                                <input name="ident_emp" id="ident_emp" type="text" class="validate" value = "<?php echo $IDENT_emp;?>" >
                                <label for="ident_emp" class="">Documento de identidad</label>
                                <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" name="date_emp" id="date_emp" class="datepicker" value = "<?php echo $DATE_emp;?>">
                                <label for="date_emp" class="">Fecha de nacimiento</label>
                              </div> 
                            </div>  
                                                      
                          </div>

                          <div id="test6">
                          
                            <div class="row">

                              <div class="input-field col s12 m12 l6">
                                <input name="oficio" id="oficio"  type="text" class="validate" required>
                                <label for="oficio" class="">Oficio que desempeñará</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                              <input type="text" name="salario" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Salario Mínimo 877.803 COP" required>
                                <label for="salario" id="label_salario" class="">Salario Mensual</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <!-- <div class="input-field col s12 m12 l6">
                                <input name="periodo" id="periodo"  type="text" class="validate" required>
                                <label for="periodo" class="">Periodo de pago</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div> -->
                              <div class="input-field col s12 m12 l6">
                                <input name="inicio" id="inicio"  type="date" class="validate" placeholder="" onchange="cal()" required>
                                <label for="inicio" class="">Fecha de iniciación de labores</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <input name="terminacion" id="terminacion"  type="date" class="validate" placeholder="" onchange="cal()" required>
                                <label for="terminacion" class="">Fecha de Terminación de labores</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <select name="periodo" id="type_c" class="form-control" type="text" required>
                                  <option value="" disabled selected>Elija el tipo de pago</option>
                                  <option value="Diario">Diario </option>
                                  <option value="Semanal">Semanal</option>
                                  <option value="Quincenal">Quincenal</option>
                                  <option value="Mensual">Mensual</option>
                                </select>
                                <label>Periodo de pago</label>
                              </div> 



                              <div class="input-field col s12 m12 l6">
                                <input name="duracion" id="duracion"  type="number" min="1" class="validate" placeholder="" onchange="cal_date()" required>
                                <label for="inicio" class="">Duración en días</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <input name="lugar" id="lugar"  type="text" class="validate" required>
                                <label for="lugar" class="">lugar donde desempeñará las labores</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <input name="ciudad" id="ciudad"  type="text" class="validate" required>
                                <label for="ciudad" class="">Ciudad</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                              <div class="input-field col s12 m12 l6">
                                <input name="horario" id="horario"  type="number" class="validate" min="1" max="8" required>
                                <label for="horario" class="">Jornada Diaria de Trabajo en Horas</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                              </div>

                            </div>
                          
                          </div>

                        </div>
                      </div>
                      <div class="row">

                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" name="action" type="submit" onclick = "this.form.action = 'contratolaboral.php'; this.form.submit()" >Crear Contrato</button>
                        </div>
                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" type="submit" style="display:none" onclick = "this.form.action = 'contratolaboral.php'; this.form.submit()" >Guardar Contrato</button>
                        </div>
                        <div class="center col l4">                               
                          <a class="btn waves-effect waves-light" href="./home.php" >Cancelar Contrato</a>
                        </div>

                      </div>
                      
                    
                    </div>
                  </form>   
                    
                            
                             
                </div>                          
            </div>
             
    </main>
            
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  <script src="./JavaScript/moneyInput.js"></script>
 
  <script>
        function GetDays(){
                var inicio = new Date(document.getElementById("inicio").value);
                var terminacion = new Date(document.getElementById("terminacion").value);
                console.log("calculo tiempo: ")
                return parseInt((terminacion - inicio) / (24 * 3600 * 1000));
        }
        function GetDate(){
                var inicio = new Date(document.getElementById("inicio").value);
                var duracion = document.getElementById("duracion").value;
                inicio.setDate(inicio.getDate()+parseInt(duracion));
                return inicio;
        }
        function cal(){
        if(document.getElementById("terminacion"))
          {
            document.getElementById("duracion").value=GetDays();
          }
        }  
        function cal_date(){
        if(document.getElementById("inicio"))
          {
            document.getElementById("terminacion").valueAsDate=GetDate();
          }  
        }

    </script>

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

<!-- this script send information to the server without reloading the page-->
  <script>
    function sendForm() {
      var output = document.getElementById("output");
      var data = new FormData(document.getElementById("fileinfo"));
      
      data.append("CustomField", "This is some extra data");
      
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "nuevo_contrato.1.php", false)
      xhr.send(data);
      if (xhr.status == 200) {
        output.innerHTML += "Uploaded!<br />";
      } else {
        output.innerHTML += "Error " + xhr.status + " occurred uploading your file.<br />";
      }
    } 
  </script>

<!-- this script shows contacts in select element-->
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
   
</body>
</html>