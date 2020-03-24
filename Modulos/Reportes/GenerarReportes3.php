
<html lang="en">

<script  src="../Modulos/Reportes/indexValidacion.js"></script>

<script type="text/javascript">
      
        function comparar()

                {

                    
                    if (document.getElementById("FechaInicio").value > document.getElementById("FechaFin").value) 
                    

                        {
                            swal("Alerta!", "La fecha inicial no concuerda con la fecha final!", "warning");

                            caja=document.getElementById('FechaFin');
                            caja.focus();
                        }

                    else

                        {

                        }
                        

                }

</script>


<?php

        require_once '../Conexion.php';

?> 
            

<!-- archivo para validacion de ID repetido -->

<!-- =======================================================
Theme Name: Sima
Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
Author: BootstrapMade
Author URL: https://bootstrapmade.com
======================================================= -->


<!-- INICIO DEL FORMULARIO-->

<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />  
<form class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" id="Reporte" >

    <div class="title"><h2>Generar Reportes</h2></div>
        <br>
            <br>

                <div class="element-number">
                    <label class="title"></label>
                            <div class="item-cont">
                                <span id="result"></span>
                                    <input class="large" type="number" name="CajaNumero0" id="search" placeholder="Documento" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="12"/>
                                <span class="icon-place"></span>
                        </div>
                </div>                                                   

                <label style=" text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA INICIAL DEL REPORTE </label>
                    <div class="element-date">
                        <label class="title"></label>
                            <div class="item-cont">
                                <div class="element-date">
                                    <label class="title"></label>
                                        <div class="item-cont">
                                            <input type="date" name="FechaInicio" id="FechaInicio" required="required">
                                            <span class="icon-place"></span>
                                    </div>
                                </div>
                          </div>
                    </div>
 
                    <label style="text">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA FINAL DEL REPORTE </label>
                        <div class="element-date">
                            <label class="title"></label>
                                <div class="item-cont">
                                    <div class="element-date">
                                        <label class="title"></label>
                                            <div class="item-cont">
                                                <input type="date" name="FechaFin" id="FechaFin" required="required" onblur="comparar();">
                                                <span class="icon-place"></span>
                                        </div>
                                    </div>
                              </div>
                        </div>

                  <br>

                            <!--Boton de inserción-->
                            <div class="submit"><input type="button" value="Ingresar" onclick="llamarReporte3();"/><br></div>
                            <!--Boton de inserción-->

</form>

<!--FIN DEL FORMULARIO-->
                
</html>



       

