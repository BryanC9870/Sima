    
<!-- Start Formoid form-->
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css"/>
    <form name="ejemplo" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="updatesupervisores.php" method="POST" target="_self">

        <div class="title">
            <h2>Actualizar Supervisores</h2>
        </div>
      
	<div class="element-number">
            <label class="title"></label>
                <div class="item-cont">
                    <input class="large" readonly type="number" name="CajaNumero1" id="CajaNumero1" placeholder="Documento" required="required"> 
                <span class="icon-place"></span>
            </div>
        </div>
	
        <div class="element-input">
            <label class="title"></label>
                <div class="item-cont">
                    <input class="large" type="text" maxlength="55" name="CajaNumero2" id="CajaNumero2" placeholder="Nombres y Apellidos Completos" onkeypress="return validar(event)" onkeyup="verif(this)"  oninput="maxLengthCheck(this)" maxlength="55" required="required">
                <span class="icon-place"></span>
            </div>
        </div>

        <div><label>CONTRASEÑA (USUARIO)</label></div>
             <div class="element-password">
                 <label class="title"></label>
                    <div class="item-cont">
                    <input class="large" type="password" maxlength="40" name="CajaNumero0" id="CajaNumero0"  placeholder="Contraseña" oninput="maxLengthCheck(this)" onkeyup="verif(this)" maxlength="40" required="required">
                 <span class="icon-place"></span>
             </div>
        </div>

        <div><label>ROL (USUARIO)</label></div>     
            <div class="element-select">
                <label class="title"></label>
                    <div class="item-cont">
                        <div class="large">
                            <span>
                                <select name="CajaNumero01" id="CajaNumero01" required="required">
                                <option value="ENTE">ENTE</option>
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
                 <input class="large" type="text" maxlength="30" name="CajaNumero3" id="CajaNumero3" placeholder="Area Asignada" onkeypress="return validar(event)" onkeyup="verif(this)" oninput="maxLengthCheck(this)" maxlength="30" required="required"> 
               <span class="icon-place"></span>
            </div>
        </div>
        
	<div class="element-email">
            <label class="title"></label>
                <div class="item-cont">
                 <input class="large" type="email" maxlength="50" name="CajaNumero4" id="CajaNumero4" placeholder="Correo" required="required" onblur="pruebaemail(CajaNumero4.value);">  
                <span class="icon-place"></span>
            </div>
        </div>

	<div class="element-phone">
            <label class="title"></label>
               <div class="item-cont">
                  <input class="large" type="number" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="11" name="CajaNumero6" id="CajaNumero6" placeholder="Teléfono" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="11" required="required"> 
               <span class="icon-place"></span>
            </div>
        </div>

	<div class="element-number">
            <label class="title"></label>
                <div class="item-cont">
                  <input class="large" type="number" name="CajaNumero7" id="CajaNumero7" placeholder="IP" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="11" required="required"> 
                <span class="icon-place"></span>
            </div>
        </div>

        <div class="element-select">
            <label class="title"></label>
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

        <!-- Stop Formoid form-->
                          
        <br>

                <!--Boton de inserción-->
                <div class="submit"><input type="button" value="Ingresar" onclick="updateSupervisores();"/><br></div>
                <!--Boton de inserción-->
 
   </form>
</html>


    <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>
