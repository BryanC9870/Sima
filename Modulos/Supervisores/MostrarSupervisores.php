
<script src="js/ListarTablas.js"></script>
    <div class="col-sm-15" style="padding:12px">
        <div class="row" style="padding:25px" id="TablaRecarga">
            <h1 class="page-header">Actualizar Datos</h1>
                <!--TABLA RESPONSIVA--> 
                    <div class="bs-example" data-example-id="simple-responsive-table">
                        <div class="table-responsive" padding>
                            <table class="table table-striped table-bordered" id="tabla">
                                <br>
                                    <br>
                                         <br>
                                            <thead>
                                                    <tr>
                                                        <th>CÉDULA</th>
                                                        <th>NOMBRES COMPLETOS</th>
                                                        <th>AREA ASIGNADA</th>
                                                        <th>CORREO</th>
                                                        <th>TELÉFONO</th>
                                                        <th>IP</th>
                                                        <th>ESTADO</th>
                                                        <th>ACTUALIZAR</th>
                                                    </tr>
                                            </thead>
                                        <tbody id="ResultadoTabla">
                                            <?php
                                                require_once('../Conexion.php');
                                                    $ComandoSql = "SELECT * FROM supervisores ORDER BY IDSupervisor";
                                                        if ($Resultado = $conexion->query($ComandoSql)) 
                                                        
                                                            {
                                            
                                                                    /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                    while ($fila = $Resultado->fetch_array()) 
                                                                    
                                                                        {
                                                                            echo '<tr>';
                                                                            echo '<td>' . mb_convert_encoding($fila['IDSupervisor'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['AreaAsignada'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Ip'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Estado'], "UTF-8") . '</td>';
                                                                            echo '<td><button id="ActualizarRegistro" class="btn btn-warning" onclick="TraerSupervisor(' . mb_convert_encoding($fila['IDSupervisor'], "UTF-8") . '); obtenerfoco2();" >Actualizar</button></td>';
                                                                        }  
                                                            }
                                            ?>
                                        </tbody>
                                </table>
                           </div>
                     </div>
              </div>
        </div>



     





