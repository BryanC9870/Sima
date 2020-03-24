<!DOCTYPE html>
  <html lang="en">

    <!-- archivo para validacion de ID repetido -->
        <script  src="../Modulos/Aprendices/indexValidacion.js"></script>

</script> 

  <!-- =======================================================
    Theme Name: Sima
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

        
        <?php
     
                require_once '../Conexion.php';
                
                //comando sql llenar select (combobox - programa)
                $sql2="select IDPrograma, Nombre, NivelFormacion from programas where Estado='ACTIVO'"; 
                
                $programas=$conexion->query($sql2);     


                //comando sql llenar select (combobox - ficha)
                $sql5="select NumeroDeFicha, Nombre, Jornada from ficha where Estado='ACTIVO'"; 
                
                $fichas=$conexion->query($sql5);    

        ?>

    <script>

        function Insertar()
            {
                    var datos;
                    var ficha;
                    datos = $("#programa").val();
                    datos= document.getElementById("programa").value; 

                    // alert(datos);
                    console.log(datos);
                    var da = JSON.parse(datos);  
                    console.log(da);
                    console.log("este es para el nombre "+da[0]); 
                    console.log("este es"+da[1]); 
                    alert(da[0]);
                    alert(da[1]);
            }

    </script>     


   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <title></title>

            <script>
                $(document).ready(function()
                    
                    {

                        $("#frmArchivo").submit(function()
                        
                            {
                                                    
                                var datos = new FormData();
                                datos.append('archivo',$('#archivo')[0].files[0]);
                                                
                                $.ajax({

                                    type:"post",
                                    dataType:"json",
                                    url:"php/importar.php",      					
                                    contentType:false,
                                    data:datos,
                                    processData:false,
                                    cache:false
                                })

                                    .done(function(respuesta){      					
                                        alert(respuesta.mensaje);

                                });

                                return false;

                            });
                    });
                
            </script> 

    </head>
           
                    
 <!-- Start Formoid form-->
<link rel="stylesheet" href="../Estilos/estilosform/formoid_files/formoid1/formoid-solid-green.css" type="text/css" />
<form name="ejemplo" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="POST" target="_self">
   
   <div class="title">
      <h2>Ingresar Aprendices</h2>
   </div>

   <div class="element-number">
        <label class="title"></label>
            <div class="item-cont">
              <span id="result"></span>
                 <input class="large" type="number" name="CajaNumero1" id="search" placeholder="Documento" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="12" />
              <span class="icon-place"></span>
           </div>
   </div>

	<div class="element-input">
        <label class="title"></label>
           <div class="item-cont">
              <input class="large" type="text" maxlength="55" name="CajaNumero2" ID="CajaNumero2" placeholder="Nombres y Apellidos Completos" required="required" 
              onkeypress='return validar(event)' onkeyup="verif(this)" />
              <span class="icon-place"></span>
           </div>
    </div>

	<div class="element-email">
        <label class="title"></label>
           <div class="item-cont">
              <input class="large" type="email" maxlength="50" name="CajaNumero3" id="CajaNumero3" placeholder="Correo" required="required"  onblur="pruebaemail(CajaNumero3.value);" />
              <span class="icon-place"></span>
          </div>
    </div>
    
	<div class="element-phone">
        <label class="title"></label>
           <div class="item-cont">
              <input class="large" type="number" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}"  name="CajaNumero4" id="CajaNumero4" placeholder="Teléfono" value="" required="required" onkeypress='return validaNumericos(event)' oninput="maxLengthCheck(this)" maxlength="11" />
              <span class="icon-place"></span>
        </div>
    </div>

   
    <div class="element-select">
        <label class="title"></label>
           <div class="item-cont">
              <div class="large">
                  <span>
                        <select type="select" name="programa" id="programa" >
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
                        <select type="select" name="CajaNumero6" id="CajaNumero6" >
                            <option value="0">--Seleccione el tipo de actividad--</option>
                            <option value="APOYO FIC">APOYO FIC</option>
                            <option value="APOYO REGULAR">APOYO REGULAR</option>
                            <option value="MONITORIAS">MONITORIAS</option>
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
                    <select type="select" name="CajaNumero5" id="CajaNumero5" >
                       <option value="0" >--Seleccione un estado--</option>
                       <option value="ACTIVO">ACTIVO</option>
                       <option value="INACTIVO">INACTIVO</option>
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
                        <select type="select" name="CajaNumero10" id="CajaNumero10" >
                            <option value="0" >--Indique si tiene o no tiene paz y salvo--</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                           <i>
                       </i>
                     <span class="icon-place"></span>
                 </span>
             </div>
         </div>
    </div>
    
    <!-- Stop Formoid form-->
        
        <br>

    <!--Boton de inserción-->

        <div class="submit">
            <input type="button" value="Ingresar" onclick="ingresarAprendiz();"/><br>
        </div>

    <!--Boton de inserción-->

    </form>

    <div style="padding:12px">
        <span id="Resultado" style="padding:20px;"></span>
    </div>

    <script>
  
            var datos;
            var ficha;
            datos = $("#programa").val();
            datos= document.getElementById("programa").value; 
            
            
            console.log(datos);
            var da = JSON.parse(datos);  

    </script>   

    <form id="frmArchivo" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="POST">
        
        <div class="title">
            <h2>Importar Archivos Planos</h2>
        </div>

        <div class="submit">
                <input id="archivo" type="file" name="archivo" style="padding:12px" />
                <input type="hidden" name="MAX_FILE_SIZE" value="20000" />
                <input class="boton" type="submit" name="enviar" value="Importar" /><br>
        </div>
    
    </form>

 </html>
