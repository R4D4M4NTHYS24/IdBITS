<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solemne - Creacion Prestación de Servicios</title>

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
                  <a href="home.php" class="breadcrumb">ContrApp</a>
                  <a href="#!" class="breadcrumb">Creacion Prestación de Servicios</a>
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
                          <span class="card-title">Contrato Prestación de Servicios</span>
                        </div>
                        <div class="card-tabs">
                          <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#test4">Las Partes</a></li>
                            <li class="tab"><a href="#test5">El tiempo</a></li>
                            <li class="tab"><a href="#test6">Las Obligaciones</a></li>
                          </ul>
                        </div>
                        <div class="card-content grey lighten-4" style="min-height:374px">

                          <div id="test4">
                           
                            <div class="row">
                              
                                <div class="center col s12 m4 l4">
                                  <h5>
                                    ¿En el contrato de prestación de servicios qué parte en el contrato eres?
                                  </h5>
                                </div> 
                              
                                <div class=" center input-field col s12 m2 l2">
                                  <p>
                                    <label>
                                      <input type="checkbox" />
                                      <span>El Contratante</span>
                                    </label>
                                  </p>
                                </div> 

                                <div class=" center input-field col s12 m2 l2">
                                  <p>
                                    <label>
                                      <input type="checkbox" />
                                      <span>El Contratista</span>
                                    </label>
                                  </p>
                                </div> 

                                <div class="card grey lighten-4 z-depth-0 center col s12 m12 l4" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px;">
                                  <div class="card-title">Preguntas frecuentes</div>
                                  <br><a class="tooltipped" data-position="top" data-tooltip="Es la parte que toma la iniciativa de requerir un servicio externo a su propia actividad.">¿Quién es el Contratante?</a><br><br>
                                      <a class="tooltipped" data-position="bottom" data-tooltip="Persona que por contrata, a cambio de un precio, se copromete a realizar una obra o prestar un servicio.">¿Quién es el Contratista?</a> <br><br>
                                  
                                </div> 

                            </div>
                            

                                <br><div class="divider"></div><br><br>
                            
                            
                            <div class="row">

                                    <div class="center col s4">
                                      <h5>
                                        ¿La otra parte del contrato es una persona?
                                      </h5>
                                    </div> 
                                  
                                    <div class=" center input-field col s2">
                                      <p>
                                        <label>
                                          <input type="checkbox" />
                                          <span>Natural</span>
                                        </label>
                                      </p>
                                    </div> 

                                    <div class=" center input-field col s2">
                                      <p>
                                        <label>
                                          <input type="checkbox" />
                                          <span>Jurídica</span>
                                        </label>
                                      </p>
                                    </div> 

                                    <div class="card grey lighten-4 z-depth-0 center col s4" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px;">
                                      <div class="card-title">Preguntas frecuentes</div>
                                      <br><a class="tooltipped" data-position="top" data-tooltip="Es la parte que toma la iniciativa de requerir un servicio externo a su propia actividad.">¿Quién es una persona natural?</a><br><br>
                                          <a class="tooltipped" data-position="bottom" data-tooltip="Persona que por contrata, a cambio de un precio, se copromete a realizar una obra o prestar un servicio.">¿Quién es una persona jurídica?</a> <br><br>
                                      
                                    </div> 

                            </div>
                                

                                <br><div class="divider"></div><br><br>
                            
                            
                            <div class="row">

                                    <div class="input-field col s7">
                                      <i class="material-icons prefix">portrait</i>
                                      <input name="name" id="name" type="text" class="Autocomplete validate"  required>
                                      <label for="name" class="">Nombres y apellidos completos / Denominación social o razón social de la sociedad</label>
                                      <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                    </div>

                                    <div class="input-field col s12">
                                      <i class="material-icons prefix">home</i>
                                      <input name="address_emp" id="address_emp" type="text" class="validate" >
                                      <label for="address_emp" class="">Domicilio / Dirección física</label>
                                      <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                    </div>

                                    <div class="input-field col s12 m12 l6">
                                      <i class="material-icons prefix">portrait</i>
                                      <input name="ident_emp" id="ident_emp" type="text" class="validate" >
                                      <label for="ident_emp" class="">Numero de documento de identificación sin puntos ni guiones </label>
                                      <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                    </div>

                                    <div class="input-field col s12 m12 l6">
                                      <i class="material-icons prefix">portrait</i>
                                      <input name="mail" id="mail" type="email" value="" class="validate" >
                                      <label for="mail" class="">Correo electrónico </label>
                                      <span class="helper-text" data-error="Por favor rellene este espacio" data-success=""></span>
                                    </div>

                            </div>  

                          </div>
                          
                          <div id="test5">

                            <div class="row">
                              
                                <div class="center col s12 m4 l4">
                                  <h5>
                                    ¿En el contrato de prestación de servicios qué parte en el contrato eres?
                                  </h5>
                                </div> 
                              
                                <div class=" center input-field col s12 m2 l2">
                                  <p>
                                    <label>
                                      <input type="checkbox" />
                                      <span>El Contratante</span>
                                    </label>
                                  </p>
                                </div> 

                                <div class=" center input-field col s12 m2 l2">
                                  <p>
                                    <label>
                                      <input type="checkbox" />
                                      <span>El Contratista</span>
                                    </label>
                                  </p>
                                </div> 

                                <div class="card grey lighten-4 z-depth-0 center col s12 m12 l4" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px;">
                                  <div class="card-title">Preguntas frecuentes</div>
                                  <br><a class="tooltipped" data-position="top" data-tooltip="Es la parte que toma la iniciativa de requerir un servicio externo a su propia actividad.">¿Quién es el Contratante?</a><br><br>
                                      <a class="tooltipped" data-position="bottom" data-tooltip="Persona que por contrata, a cambio de un precio, se copromete a realizar una obra o prestar un servicio.">¿Quién es el Contratista?</a> <br><br>
                                </div> 
                          
                            </div>
                            
                          </div>
                          
                            <div id="test6">
                          
                              <div class="row">

                              

                              </div>
                          
                            </div>

                        </div>
                      </div>

                      <div class="row">

                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" name="action" type="submit" onclick = "this.form.action = 'contratolaboral.php'; this.form.submit()" >Crear Contrato</button>
                        </div>
                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" type="submit" onclick = "this.form.action = 'contratolaboral.php'; this.form.submit()" >Guardar Contrato</button>
                        </div>
                        <div class="center col l4">                               
                          <button class="btn waves-effect waves-light" type="submit" name="action">Cancelar Contrato</button>
                        </div>

                      </div>
                      
                    
                    </div>
                  </form>   
                    
                            
                             
                </div>                          
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