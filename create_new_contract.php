 <!-- New Contract Modal starts -->
                <div id="modal_new_contract" class="modal modal-fixed-footer" style="min-height: 450px;">
                  <form id="form1" action="creacion_trabajo_termino_fijo.php" method="POST">
                      <h4 class="teal lighten-2  fixed" style="color: white;">&nbsp Crear nuevo contrato</h4>
                    <div class="modal-content">
                        
                        <div class="row">

                          <div class="card z-depth-0 col s12" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px;">
                            <span class="card-title">&nbsp Tipo de contrato</span>
                            <div class="divider"></div>
                            
                            <div class="card-content">
                                
                                <!-- select 1 starts --> 
                                <div class="row">                             
                                  <div class="input-field col s12 m12 l6">
                                    <select name="type_c" id="type_c" onchange="changeAction(this.value);">
                                      <option value="" disabled selected>Elija el tipo de contrato</option>
                                      <option value="1">Trabajo a Termino Fijo </option>
                                      <option value="2">Trabajo a Termino Indefinido </option>
                                      <option value="3">Trabajo por Duración de Obra o labor </option>
                                      <option value="4">Prestación de Servicios</option>
                                    </select>
                                    <label>Tipo de Contrato</label>
                                  </div>
                                </div> 
                                <!-- select 1 ends -->
                            </div>
                          </div>
                            
                          <div class="card col s12 card z-depth-0" style="border-style: solid; border-width:1px; border-color: silver; border-radius: 10px; display:none;" name="div_type_l" id="div_type_l">
                            <span class="card-title">&nbsp Seleccionar Trabajador</span>
                            <div class="divider"></div>
                            <div class="card-content">
                            <label>
                              <input type="checkbox" id="check" onchange="ocultar_lista()" />
                              <span>Ingresar nombre Manual</span>
                            </label>
                            <br/>
                              <!-- select employee for select option 1 starts -->
                              <div class="row" id="manual" style="display:none">
                                Nombre: <input type="text" name="fname"><br>
                                Correo: <input type="text" name="lname"><br>
                              </div>
                              <div class="row" id="lista">                             
                                <div class="input-field col s12" >
                                  <select class="icons" id="select_employee" name="select_employee">
                                    <option value="" disabled selected>Buscar en lista de Contactos</option>              
                                  </select>
                                    <label>Seleccione Trabajador</label>
                                </div>
                              </div>
                                <!-- select employee for select option 1 ends --> 

                              </div> 
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="modal-footer">
                      </form>
                                                     
                        <button class="btn waves-effect waves-light" type="submit" name="action">Aceptar</button>
                        
                      
                                                    
                        
                        <a class="waves-effect waves-light btn red modal-close">Cancelar</a>
                      
                      
                     
                    </div>
                  
                 
                </div>
                <script>
                check=document.getElementById("check");
                function ocultar_lista(){
                  lista=document.getElementById("lista");
                  manual=document.getElementById("manual");
                  if (check.checked==true){
                    lista.style="display: none"
                    manual.style="display: block"
                  }
                  else{
                    lista.style="display: block"
                    manual.style="display: none"
                  }
                }
                </script>
<!-- New Contract Modal ends -->