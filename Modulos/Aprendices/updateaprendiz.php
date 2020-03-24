  
        <?php
        
                require_once '../Conexion.php';
                
                $sqlprogramas="select IDPrograma, Nombre, NivelFormacion from programas where Estado='ACTIVO'"; 

                $programas=$conexion->query($sqlprogramas);        
                            
                $sql5="select NumeroDeFicha, Nombre, Jornada from ficha where Estado='ACTIVO'"; 
                
                $fichas=$conexion->query($sql5);    

    
        ?>
             
 <!-- Start Formoid form-->
 <link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />
 <form name="ejemplo" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="updateaprendiz.php" method="POST" target="_self"><div class="title"><h2>Actualizar Aprendices</h2></div>
	
    <div class="element-number"><label class="title"></label>
        <div class="item-cont">
           <input class="large" readonly type="number"  name="CajaNumero1" id="CajaNumero1" required="required" placeholder="Documento" />
           <span class="icon-place"></span>
        </div>
    </div>

	<div class="element-input"><label class="title"></label>
        <div class="item-cont">
           <input class="large" type="text" maxlength="55" name="CajaNumero2" id="CajaNumero2" placeholder="Nombres y Apellidos Completos" onkeypress='return validar(event)'  oninput="maxLengthCheck(this)" onkeyup="verif(this)" maxlength="55" required="required" />
           <span class="icon-place"></span>
        </div>
    </div>

	<div class="element-email"><label class="title"></label>
        <div class="item-cont">
           <input class="large" type="email" maxlength="50" name="CajaNumero3" id="CajaNumero3" placeholder="Correo" required="required" onblur="pruebaemail(CajaNumero3.value);"/>
           <span class="icon-place"></span>
        </div>
    </div>

	<div class="element-phone"><label class="title"></label>
        <div class="item-cont">
           <input class="large" type="number" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="10" name="CajaNumero4" id="CajaNumero4" placeholder="Teléfono" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="11" required="required" />
           <span class="icon-place"></span>
        </div>
    </div>

    <div class="element-select"><label class="title"></label>
        <div class="item-cont">
             <div class="large">
                  <span>
                        <select type="select" name="programa" id="programa">
                                        <option value="0" >--Seleccione un programa de formación--</option>
                                            <?php

                                                while($ficha=$fichas->fetch_object())
                                                        
                                                    {
                                                    
                                            ?>
                                                    <option value='<?php echo  "[" . '"'.$ficha->NumeroDeFicha .'"' ; ?> , <?php echo  '"'.$ficha->Nombre .'"' . "]"; ?> '>
                                                    <?php echo $ficha->NumeroDeFicha."-".$ficha->Nombre."-".$ficha->Jornada; ?>
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

    <div class="element-select"><label class="title"></label>
        <div class="item-cont">
            <div class="large">
               <span>
                    <select type="select" name="CajaNumero6" id="CajaNumero6" >
                            <option value="0" >--Seleccione el tipo de actividad--</option>
                            <option value="APOYO FIC">APOYO FIC</option>
                            <option value="APOYO REGULAR">APOYO REGULAR</option>
                            <option value="MONITORIAS">MONITORIAS</option>
                    </select>
                   <i></i>
                <span class="icon-place"></span>
             </span>
          </div>
       </div>
    </div>

	<div class="element-select"><label class="title"></label>
        <div class="item-cont">
            <div class="large">
                 <span>
                        <select type="select" name="CajaNumero5" id="CajaNumero5">
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


	<div class="element-select"><label class="title"></label>
        <div class="item-cont">
            <div class="large">
                <span>
                       <select type="select" name="CajaNumero10" id="CajaNumero10">
                                <option value="0" >--Indique si tiene o no tiene paz y salvo--</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                       </select>
                     <i></i>
                   <span class="icon-place"></span>
                </span>
            </div>
        </div>
    </div>
   
    <?php

    ?>        
               
    <br>

        <!--Boton de inserción-->
        <div class="submit">
            <input type="button" value="Ingresar" onclick="updateAprendiz();"/><br>
        </div>
        <!--Boton de inserción-->
  
    <script>
    
            var datos;
            var ficha;
            datos = $("#programa").val();
            datos= document.getElementById("programa").value; 
            // alert(datos);
            console.log(datos);
            var da = JSON.parse(datos);  

    </script>  

 </form>

    <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>
                    
   