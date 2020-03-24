    <?php

            require_once '../Conexion.php';

            $sql2="select IDInstructor, NombresyApellidos from instructores"; 
            
            $instructores=$conexion->query($sql2);   

    ?> 
             
<!-- Start Formoid form-->
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />
 <form name="ejemplo" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="updateprogramas.php" method="POST" target="_self">
 
    <div class="title">
          <h2>Actualizar Programas</h2>
    </div>
	
    <div class="element-number">
        <label class="title"></label>
            <div class="item-cont">
                <input class="large" readonly type="number" min="1" max="12" name="CajaNumero1" id="CajaNumero1" placeholder="ID Programa" required="required"/>
            <span class="icon-place"></span>
        </div>
    </div>

	<div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                    <span>
                         <select type="select" name="CajaNumero2" id="CajaNumero2" required="required" >
                               <option value="0" >--Seleccione un Instructor--</option>
                                            <?php

                                                while($instructor=$instructores->fetch_object())
                                                    
                                                        {
                                                    
                                                            ?>
                                                            <option value="<?php echo $instructor->IDInstructor;?>">
                                                            <?php echo $instructor->IDInstructor.  "-" .$instructor->NombresyApellidos;?>
                                                            
                                                            <?php

                                                        }
                                            ?>    
                                      </option>
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
                   <input class="large" type="text" maxlength="90" name="CajaNumero3" id="CajaNumero3" placeholder="Nombre del Programa" onkeypress='return validar(event)' required="required" onkeyup="verif(this)"/>
               <span class="icon-place"></span>
          </div>
    </div>

	<div class="element-select">
        <label class="title"></label>
            <div class="item-cont">
                <div class="large">
                    <span>
                        <select type="select" name="CajaNumero4"  id="CajaNumero4" required="required">
                            <option value="0">--Seleccione un estado--</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
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
                                <select type="select" name="CajaNumero5" id="CajaNumero5" required="required" >
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
                  
    <br>
        
            <!--Boton de inserción-->
            <div class="submit"><input type="button" value="Ingresar" onclick="updatePrograma();"/><br></div>
            <!--Boton de inserción-->
 

    </form>

     <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>

 

