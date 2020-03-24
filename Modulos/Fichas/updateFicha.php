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
 <form name="ejemplo" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="updateFicha.php" method="POST" target="_self"><div class="title"><h2>Actualizar Fichas</h2></div>

    <div class="element-number">
        <label class="title"></label>
            <div class="item-cont">
               <input class="large" readonly type="number" min="1" max="12" name="CajaNumero1" id="CajaNumero1" placeholder="N° De Ficha" required="required" >
            <span class="icon-place"></span>
        </div>
    </div>
	
	<div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                     <span>
                          <select type="select" name="CajaNumero2" id="CajaNumero2" required="required">
                              <option value="0" >--Seleccione un Programa--</option>
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
                           <i>
                       </i>
                    <span class="icon-place"></span>
                </span>
            </div>
        </div>
    </div>

    <div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                    <span>
                        <select type="select" name="CajaNumero3" id="CajaNumero3" required="required">
                            <option value="0">--Seleccione una Jornada--</option>
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

    <label style="text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA DE INICIO </label>
        <div class="element-date">
            <label class="title"></label>
                <div class="item-cont">
                    <input class="large" type="date" name="CajaNumero4" id="CajaNumero4" required="required">
              <span class="icon-place"></span>
         </div>
    </div>

    <label style="text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA DE FINALIZACION </label>
        <div class="element-date">
            <label class="title"></label>
                <div class="item-cont">
                   <input class="large" type="date" name="CajaNumero5" id="CajaNumero5" required="required" >
               <span class="icon-place"></span>
          </div>
    </div>
    
	<div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                    <span>
                          <select type="select" name="CajaNumero6" id="CajaNumero6" required="required">
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
        <div class="submit"><input type="button" value="Ingresar" onclick="updateFichas();"/><br></div>
        <!--Boton de inserción-->

    </form>

    
    <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>