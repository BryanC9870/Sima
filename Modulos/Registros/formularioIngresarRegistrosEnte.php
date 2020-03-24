
<html lang="en">

        <?php

                session_start();
        
        ?>

        <!-- archivo para validacion de ID repetido -->
        <script  src="../Modulos/Registros/indexValidacion.js"></script>

        <script type="text/javascript">
                
       
                function comparar()
                    {
                    
                        
                        if (document.getElementById("CajaNumero3").value > document.getElementById("CajaNumero4").value) 
                        
                
                            {
                                swal("Alerta!", "La fecha de entrada no concuerda con la fecha de salida!", "warning");
        
                                caja=document.getElementById('CajaNumero3');
                                caja.focus();
        
                            }

                        else
                            
                            {

                            }
                            

                    }
    
        </script>

        <?php

                    require_once '../Conexion.php';

                    $sql2="select IDSupervisor, NombresyApellidos, AreaAsignada from supervisores where IDSupervisor = '".$_SESSION['Usuario']."' "; 

                    $supervisores=$conexion->query($sql2);  
                    //---------------------------------------------------//

        ?>

<div class="bootstrap-iso" >
   <div class="container">
      <div class="row" >
          <div class="col-sm-3 col-sm-3 col-xs-12"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel panel-default">
                       <div class="panel panel-default"  style="background-color:#3fbbc0;color:#FFFFFF; height:60px;">
                           <div style="background-color:#3fbbc0;color:#FFFFFF; height:60px;"><div class="title"><h2 >&nbsp; Ingresar Registros</h2></div></div>
                                </div>   
                                    <div class="panel-body">
                                       <form method="post">

                                           <div class="form-group ">
                                                <label class="control-label " for="name"></label>
                                                    <input class="form-control" type="text" id="search" placeholder="Nombres Completos" name="CajaNumero2" type="text" onkeypress='return validar(event)'/>
                                                </span>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label " for="select">Seleccione el aprendiz</label>
                                                    <select class="select form-control" type="select" id="aprendices" name="aprendices">
                                                        <option value="0">--Seleccione el aprendiz--</option>
                                                        </option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label " for="select">Seleccione el Supervisor</label>
                                                    <select class="select form-control" type="select" id="supervisor" name="supervisor">
                                                        <option value="0" >--Seleccione el Supervisor--</option>
                                                                    <?php
                                                                            
                                                                            while($supervisor=$supervisores->fetch_object())
                                                                                
                                                                                {
                                                                            
                                                                                    ?>
                                                                                    <option value="<?php echo $supervisor->IDSupervisor; ?> ">
                                                                                    <?php echo $supervisor->IDSupervisor. "-" .$supervisor->NombresyApellidos. "-" .$supervisor->AreaAsignada; ?>
                                                                                    </option>
                                                                                    <?php
                                                                            
                                                                                }
                                                                    ?>   
                                                        </option>
                                                 </select>
                                            </div>

                                            <div class="row">
                                                <div class="panel-body">                            
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                         <label for="FechaSalida">Fecha Entrada</label>
                                                               <div class='input-group date' id='datetimepickerb'>
                                                                   <input type="datetime" class="form-control" name="CajaNumero3" id="CajaNumero3"  />
                                                                   <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                         </div>
                                                    </div>
                                                    
                                                <script>

                                                $('#CajaNumero3').datetimepicker({
                                                    format: 'YYYY-MM-DD HH:mm'       
                                                });

                                                $('#CajaNumero4').datetimepicker({
                                                    format: 'YYYY-MM-DD HH:mm'       
                                                });

                                                </script>


                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <label for="FechaSalida">Fecha Salida</label>
                                                            <div class='input-group date' id='datetimepicker2'>
                                                                    <input type="datetime" class="form-control"  name="CajaNumero4" id="CajaNumero4"  onblur="comparar();"/>
                                                                    <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
              
                                      <br>

                                            <div class="form-group">
                                                <label class="control-label " for="textarea">Observaciones</label>
                                                <textarea class="form-control" cols="40"  name="CajaNumero6" type="textarea" id="CajaObservaciones" placeholder="Observaciones" rows="10" maxlength="200"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <div>
                                                    <button type="button"  class="btn btn-primary " onclick="RegistrarRegistro();">
                                                    Ingresar
                                                    </button>
                                                </div>
                                            </div>
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-3 col-sm-3 col-xs-12"></div>
                </div>
            <br>
            <div style="padding:12px">

                 <span id="Resultado" style="padding:20px;"></span>

            </div>
        </div>
    </div>
    
</html>
