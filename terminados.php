<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContraApp - Terminados</title>

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
            
       <!-- in this section is the main content -->

            <!-- breadcrumb starts -->
              <nav class="transparent" >
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">ContrApp</a>
                    <a href="#!" class="breadcrumb">Contratos Terminados</a>
                  </div>
                </div>
              </nav>
            <!-- breadcrumb ends -->

            <!-- main container -->    
              <div class="container">
               <div class="masonry-row" style="position:relative;">

          



               </div>            
              </div>
             
      </main>
            
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

 <!-- Perform DataTables -->
 <script src="JavaScript/DataTables.js"></script>

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
 
 var current_page = "Mis Contratos Terminados";
 document.getElementById("brand_logo").innerHTML=current_page;
 
 </script>
   
</body>
</html>