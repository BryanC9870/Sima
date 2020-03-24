<!DOCTYPE html>
    <html lang="en">

    <!-- archivo para validacion de ID repetido -->
    <script  src="../Modulos/Supervisores/indexValidacion.js"></script>

    </script> 
    
    <!-- =======================================================
      Theme Name: Sima
      Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

    <!-- INICIO DEL FORMULARIO-->
                
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css"/>
  <form name="ejemplo" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="../ingresarSupervisores/busqueda.php" method="POST" target="_self">      
    
      <div class="title"> 
          <h2>Ingresar Supervisores</h2>
      </div>
	    
      <div class="element-number">
          <label class="title"></label>
             <div class="item-cont">
                 <span id="result"></span>
                  <input class="large" type="number" name="CajaNumero1" id="search" placeholder="Documento" value="" required="required" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="12" />
                 <span class="icon-place"></span>
            </div>
      </div>
    
      <div class="element-input"> 
          <label class="title"></label>
              <div class="item-cont">
                <input class="large" type="text" maxlength="55" name="CajaNumero2" id="CajaNumero2" placeholder="Nombres y Apellidos Completos" required="required" onkeypress="return validar(event)" onkeyup="verif(this)" oninput="maxLengthCheck(this)" maxlength="55" />
              <span class="icon-place"></span>
          </div>
      </div>

      <div><label>CONTRASEÑA (USUARIO)</label></div>
          <div class="element-password">
              <label class="title"></label>
                  <div class="item-cont">
                  <input class="large" type="password" maxlength="40"  name="cajaNumero0" id="cajaNumero0" value="cajaNumero0" placeholder="Contraseña" required="required" onkeyup="verif(this)" oninput="maxLengthCheck(this)" maxlength="40" />  
              <span class="icon-place"></span>
          </div>  
      </div>
  
      <div><label>ROL (USUARIO)</label></div>  
          <div class="element-select">  
              <label class="title"></label>
                  <div class="item-cont">
                      <div class="large">
                          <span>
                              <select type="select" name="cajaNumero01" id="cajaNumero01" required="required"> 
                                  <option value="0" >--Seleccione el Rol--</option>
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
              <input class="large" type="text" maxlength="30" name="cajaNumero3" id="cajaNumero3" placeholder="Area Asignada" required="required" onkeypress="return validar(event)" onkeyup="verif(this)" oninput="maxLengthCheck(this)" maxlength="30"/>
              <span class="icon-place"></span>
          </div>
      </div>
    
      <div class="element-email"> 
          <label class="title"></label>
              <div class="item-cont">
              <input class="large" type="email" maxlength="50" name="cajaNumero4" id="cajaNumero4" value="" placeholder="Correo" required="required" onblur="pruebaemail(cajaNumero4.value);"/>
              <span class="icon-place"></span>
          </div>
      </div>
    
      <div class="element-phone">
          <label class="title"></label>
             <div class="item-cont">
                <input class="large" type="number" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="10" name="cajaNumero6" id="cajaNumero6" placeholder="Teléfono" value="" required="required" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="11" />
                <span class="icon-place"></span>
           </div>
      </div>
    
      <div class="element-number">
          <label class="title"></label>
              <div class="item-cont">
                <input class="large" type="number" name="cajaNumero7" id="cajaNumero7" placeholder="IP" value="" required="required" onkeypress='return validaNumericos(event)' maxlength="11" oninput="maxLengthCheck(this)" />
              <span class="icon-place"></span>  
          </div>
      </div>
        
      <div class="element-select">
           <label class="title"></label>
                 <div class="item-cont"><div class="large">
                        <span>
                               <select type="select" name="cajaNumero5" id="cajaNumero5">
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
    
      <!-- INICIO DEL FORMULARIO-->
                      
      <br>

            <!--Boton de inserción-->
            <div class="submit"><input type="button" value="Ingresar" onclick="RecibeSupervisor();"/><br></div>
            <!--Boton de inserción-->

  </form>
</html>
