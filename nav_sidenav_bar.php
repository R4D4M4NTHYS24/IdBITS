 
 
<!-- Navbar starts --> 
        <div class="navbar-fixed">
          <nav class="navbar white z-depth-0" style=" border-bottom: 1px solid #cfd8dc" >
            <div class="nav-wrapper transparent" >
              <a href="#" data-target="slide-out"  class="sidenav-trigger"><i style="color:grey;" class="material-icons">menu</i></a>
              <a id="brand_logo" href="home.php" style="color:grey; left:310px; font-size:25px;" class="brand-logo">Solemne</a>

              <ul class="right hide-on-med-and-down">
                           
                <li><a href="#" class="waves-effect" title="Notifications"><i style="color:grey;" class="material-icons">notifications</i></a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger waves-effect no-autoinit" href="#" data-target="dropdown-settings" title="Settings"><i style="color:grey;" class="material-icons">settings</i></a></li>
                <!-- Dropdown Structure -->
                <ul id='dropdown-settings' class='dropdown-content'>
                  <li><a href="config.php">Ajustes</a></li>
                  <li><a href="#!">Ayuda</a></li>
                </ul>  
                
              </ul>
              <ul class=right>
                <li><div><a href="#"><img class="circle dropdown-trigger no-autoinit" data-target="dropdown-user" style=" vertical-align: middle; height:40px" src="uploads/<?php echo $ruta_img;?>"></a></div></li>
                  <!-- Dropdown Structure -->
                  <ul id='dropdown-user' class='dropdown-content'>
                    <li><a href="config.php">Usuario</a></li>
                    <li><a href="#!">Ayuda</a></li>
                    <li><a href="php/cerrar_sesion.php" title="Sign out">Cerrar sesión</a></li>
                  </ul> 
              </ul>
              
              </ul>
            </div>
          </nav>
        </div>
<!-- Navbar ends -->

<!-- Sidenav starts -->
              <ul id="slide-out" class="sidenav sidenav-fixed z-depth-0"  style=" border-right: 1px solid #cfd8dc"  >
                <li style="border-bottom: 1px solid #cfd8dc; ">
                  <a  style="min-height: 58px; font-size:30px; color:grey; margin-top:5px; " class=" center brand-logo teal transparent z-depth-0" href="home.php">
                    Solemne
                  </a>
                </li> 

                <li>
                  <div href="config.php" class="user-view center">
                    <div class="file-field input-field">
                      <a href="config.php"><img class="circle" style="height: 100px; width: 85px; margin:auto;" src="uploads/<?php echo $ruta_img;?>"></a>
                    </div>
                      <a href="config.php"><span class="black-text name">Bienvenido, <br> <b href="config.php"><?php echo $NAME ?></b></span></a>
                      <li><div class="divider"></div></li>
                  </div>
                </li>

               
                <ul class="collapsible">
                  <li>
                  <div class="collapsible-header" > <a class="modal-trigger waves-effect waves-teal"href="#modal_new_contract"  style="width: 350px; color:black;" ><i class="material-icons">add_circle</i><b>Nuevo contrato</b></a> </div>
                  </li>
                </ul> 

                <li><div class="divider"></div></li>

                <ul class="collapsible">
                  <li>
                  <div class="collapsible-header" > <a href="home.php" style="width: 350px; color:black;" ><i class="material-icons">home</i>Mis contratos</a> </div>
                  </li>
                </ul> 

                <ul class="collapsible">
                  <li>
                  <div class="collapsible-header" > <a href="contactos.php" style="width: 350px; color:black;" ><i class="material-icons">contacts</i>Contactos</a> </div>
                  </li>
                </ul> 
                <ul class="collapsible">
                <li>
                    <div class="collapsible-header"> <span><i class="material-icons">payment</i>Gestionar Firma</span> </div>
                     <div class="collapsible-body">
                      <ul>
                       <li><a href="crear_firma.php">Crear</a></li>
                       <li><a href="recargar_firma.php">Recargar</a></li>
                       <li><a href="verificar_firma.php">Verificar</a></li>
                      </ul>
                     </div>
                  </li>
                </ul> 
                
               

                
              </ul>        
<!-- Sidenav ends -->
