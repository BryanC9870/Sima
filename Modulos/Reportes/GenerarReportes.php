
<html lang="en">

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
                <label style=" tex">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA INICIAL DEL REPORTE </label>
                    <div class="element-date">
                        <label class="title"></label>
                            <div class="item-cont">
                                <div class="element-date">
                                    <label class="title"></label>
                                        <div class="item-cont">
                                            <input type="date" name="FechaInicio" id="FechaInicio" required="required"  >
                                            <span class="icon-place"></span>
                                    </div>
                                </div>
                          </div>
                    </div>
     
                <label style=" tex">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; FECHA FINAL DEL REPORTE </label>
                    <div class="element-date">
                        <label class="title"></label>
                            <div class="item-cont">
                                <div class="element-date">
                                    <label class="title"></label>
                                        <div class="item-cont">
                                            <input type="date" name="FechaFin" id="FechaFin" required="required"  >
                                            <span class="icon-place"></span>
                                    </div>
                                </div>
                          </div>
                    </div>
    
                <br>

                        <!--Boton de inserción-->
                        <div class="submit"><input type="button" value="Ingresar" onclick="llamarReporte();"/><br></div>
                        <!--Boton de inserción-->
    </form>

<!--FIN DEL FORMULARIO-->
                    
</html>
