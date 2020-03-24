                    
<!DOCTYPE html>
    <html lang="en">

        <!-- archivo para validacion de ID repetido -->
        <script  src="../Modulos/Fichas/indexValidacion.js"></script>

    </script> 

    <?php

            require_once '../Conexion.php';

            $sql2="select IDPrograma, Nombre, NivelFormacion from programas where Estado='ACTIVO'";   
                    
            $programas=$conexion->query($sql2);   

    ?> 
             
                    
    <!-- Start Formoid form-->
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />
 <form name="ejemplo" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" >
    
    <div class="title">
        <h2>Ingresar Fichas</h2>
    </div>

    <div class="element-number">
        <label class="title"></label>
            <div class="item-cont">
                <span id="result"></span>
                   <input class="large" type="number" maxlength="90" name="cajaNumero1" id="search" placeholder="Numero De Ficha" required="required"  />
              <span class="icon-place"></span>
        </div>
    </div>

    <div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                    <span>
                        <select type="select" name="programa" id="programa">
                            <option value="0" >--Seleccione un programa de formación--</option>
                                <?php
                    
                                     while($programa=$programas->fetch_object())

                                        {
                    
                                ?>
                                        <option value="<?php echo $programa->Nombre; ?> ">
                                        <?php echo $programa->IDPrograma.  "-" .$programa->Nombre. "-" .$programa->NivelFormacion; ?>
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

    <div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="element-select">
                    <label class="title"></label>
                         <div class="item-cont">
                             <div class="large">
                                 <span>
                                    <select type="select" name="cajaNumero2" id="cajaNumero2" required="required">
                                        <option value="0" >--Seleccione una jornada--</option>
                                        <option value="MAÑANA">MAÑANA</option>
                                        <option value="TARDE">TARDE</option>
                                        <option value="NOCHE">NOCHE</option>  
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

    <label style="text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA DE INICIO </label>
        <div class="element-date"><label class="title">
            </label>
                 <div class="item-cont">
                     <div class="element-date">
                         <label class="title"></label>
                             <div class="item-cont">
                                 <input type="date" name="CajaNumero3" id="CajaNumero3" required="required">
                             <span class="icon-place"></span>
                        </div>
                   </div>
              </div>
        </div>

    <label style="text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA DE FINALIZACION </label>
        <div class="element-date">
             <label class="title"></label>
                 <div class="item-cont">
                     <div class="element-date">
                         <label class="title"></label>
                             <div class="item-cont">
                                  <input type="date" name="CajaNumero4" id="CajaNumero4" required="required"  >
                             <span class="icon-place"></span>
                         </div>
                    </div>
                </div>
          </div>

    <div class="element-select" style="width: 40%">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                   <span>
                           <select type="select" name="cajaNumero5" id="cajaNumero5" required="required" >
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
           
         <!--Boton de inserción-->
         <div class="submit"><input type="button" value="Ingresar" onclick="RegistrarFicha();"/><br></div>
         <!--Boton de inserción-->
  
    </form>

    <!-- /Section: formulario -->

    </html>
