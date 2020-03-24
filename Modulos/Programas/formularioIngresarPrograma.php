          
<!DOCTYPE html>
     <html lang="en">

            <!-- archivo para validacion de ID repetido -->
            <script  src="../Modulos/Programas/indexValidacion.js"></script>

     </script> 

     <?php

                require_once '../Conexion.php';

                $sql2="select IDInstructor, NombresyApellidos from instructores"; 
                
                $instructores=$conexion->query($sql2);   

     ?> 
                    
<!-- Start Formoid form-->
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />
    <form name="ejemplo" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="../ingresarProgramas/busqueda.php" method="POST" target="_self">
    
    <div class="title">
         <h2>Ingresar Programas</h2>
    </div>

    <div class="element-select">
         <label class="title"></label>
             <div class="item-cont">
                 <div class="large">
                     <span>
                            <select type="select" name="instructor" id="instructor" required="required" >
                                <option value="0" >--Seleccione un Instructor--</option>
                                    <?php
                                                
                                                while($instructor=$instructores->fetch_object())
                                                    
                                                    {
                                                
                                                        ?>
                                                        <option value="<?php echo $instructor->IDInstructor; ?> ">
                                                        <?php echo $instructor->IDInstructor.  "-" .$instructor->NombresyApellidos; ?>
                                                        </option>
                                                        <?php

                                                    }
                                    ?>        
                              </select>
                          <i></i>
                      <span class="icon-place"></span>
                  </span>
              </div>
         </div>
    </div>

    <div class="element-input">
        <label class="title"></label>
            <div class="item-cont">
                <span id="result"></span>
                <input class="large" type="text" maxlength="90" name="cajaNumero1" id="cajaNumero1" placeholder="Nombre del Programa" required="required" onkeypress='return validar(event)' onkeyup="verif(this)" />
            <span class="icon-place"></span>
        </div>
    </div>

    <div class="element-select">
        <label class="title"></label>
           <div class="item-cont">
              <div class="element-select">
                 <label class="title"></label>
                    <div class="item-cont">
                       <div class="large">
                           <span>
                                <select type="select" name="cajaNumero3" id="cajaNumero3" required="required" >
                                    <option value="0" >--Seleccione un nivel de formación--</option>
                                    <option value="TECNICO">TÉCNICO</option>
                                    <option value="TECNOLOGO">TECNÓLOGO</option>
                                 </select>
                              <i></i>
                           <span class="icon-place"></span>
                       </span>
                    </div>
                 </div>
              </div>
           <span class="icon-place"></span>
        </div>
    </div>

    <div class="element-select">
         <label class="title"></label>
             <div class="item-cont">
                 <div class="large">
                    <span>
                        <select type="select" name="cajaNumero2" id="cajaNumero2" required="required" >
                            <option value="0" >--Seleccione un estado--</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                         </select>
                     <i></i>
                  <span class="icon-place"></span>
              </span>
           </div>
       </div>
    </div>
        
    <!-- Stop Formoid form-->

    <br>
       
            <!--Boton de inserción-->
            <div class="submit"><input type="button" value="Ingresar" onclick="RegistrarPrograma();"/><br></div>
            <!--Boton de inserción-->
        
    </form>
                        
    <!--FIN DEL FORMULARIO-->
                        
    </html>