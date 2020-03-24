
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />  
    <br>
       <br>
 <form class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" name="IngresarInstructor" >
    
    <div class="title">
       <h2>Actualizar Instructores</h2>
    </div>

    <div class="element-number">
        <label class="title"></label>
             <div class="item-cont">
                 <span id="result"></span>
                     <input class="large" readonly type="text"  name="IdInstructor" id="IdInstructor" placeholder="Número de cédula"     />
              <span class="icon-place"></span>
         </div>
    </div>

    <div class="element-input">
        <label class="title"></label>
            <div class="item-cont">
                 <input class="large" onkeypress="return validar(event)" type="text"  maxlength="55" name="cajaNumero2" id="NombresInstructor" placeholder="Nombres y Apellidos Completos" required="required"  onkeyup="verif(this)"/>
              <span class="icon-place"></span>
        </div>
    </div>

    <div class="element-select">
        <label class="title"></label>
           </div>
               <div class="element-email">
                   <label class="title"></label>
                       <div class="item-cont">
                           <input class="large" type="email" maxlength="90" name="cajaNumero4" id="CorreoInstructor" value="" placeholder="Correo" onblur="pruebaemail(CorreoInstructor.value);" required="required" />
                       <span class="icon-place">
                   </span>
            </div>
    </div>
    
    <div class="element-phone">
        <label class="title"></label>
            <div class="item-cont">
                <input class="large" oninput="maxLengthCheck(this)" type="number" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}"  name="cajaNumero5" id="TelefonoInstructor" placeholder="Teléfono" maxlength="10" value="" onkeypress='return validaNumericos(event)' required="required" />
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
                                            <select type="select" name="cajaNumero3" id="EstadoInstructor" required="required" >
                                                <option value="0" >--Seleccione un estado--</option>
                                                <option value="ACTIVO">ACTIVO</option>
                                                <option value="INACTIVO">INACTIVO</option>
                                            </select>
                                            <i></i>
                                        <span class="icon-place">
                                   </span>
                              </div>
                          </div>
                     </div>
                <span class="icon-place"></span>
           </div>
    </div>
 
    <br>
        
            <!--Boton de inserción-->
            <div class="submit"><input type="button" value="Ingresar" onclick="updateInstructores();"/><br></div>
            <!--Boton de inserción-->

    </form>

     <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>


