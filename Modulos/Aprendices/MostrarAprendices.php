
<script src="js/ListarTablas.js"></script>
    <div class="col-sm-15" style="padding:12px">
        <div class="row" style="padding:25px" id="TablaRecarga">
            <h1 class="page-header">Actualizar Datos</h1>
               <!--TABLA RESPONSIVA--> 
                   <div class="bs-example" data-example-id="simple-responsive-table">
                      <div class="table-responsive" padding>
                         <table  class="table table-striped table-bordered" id="tabla">
                            <br>
                              <br>
                                <br>
                                <thead>
                                    <tr>
                                        <th>DOCUMENTO DEL APRENDIZ</th>
                                        <th>NOMBRES COMPLETOS</th>
                                        <th>CORREO</th>
                                        <th>TELÉFONO</th>
                                        <th>FICHA</th>
                                        <th>FECHA DE FINALIZACIÓN DE ETAPA LECTIVA</th>
                                        <th>NOMBRE DEL PROGRAMA</th>
                                        <th>TIPO DE ACTIVIDAD</th>
                                        <th>ESTADO</th>
                                        <th>PAZ Y SALVO</th>
                                        <th>ACTUALIZAR</th>
                                    </tr>
                                </thead>
                            <tbody id="ResultadoTabla">
                                <?php
                                   require_once('../Conexion.php');
                                        $ComandoSql = "SELECT aprendices.IDAprendiz, aprendices.NombresyApellidos, aprendices.Correo, aprendices.Telefono, aprendices.NumeroDeFicha, DATE_SUB(ficha.FechaFinalizacion, INTERVAL 6 MONTH) as fechadefinalizacion, aprendices.Nombre, aprendices.TipoActividad, aprendices.Estado, aprendices.Pazysalvo FROM aprendices,ficha WHERE aprendices.NumeroDeFicha = ficha.NumeroDeFicha ORDER BY `IDAprendiz`";
                                            if ($Resultado = $conexion->query($ComandoSql)) 
                                            
                                                {
                                                /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                    while ($fila = $Resultado->fetch_array()) 
                                                    
                                                        {
                                                            echo '<tr>';
                                                            echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['fechadefinalizacion'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['Nombre'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['Estado'], "UTF-8") . '</td>';
                                                            echo '<td>' . mb_convert_encoding($fila['Pazysalvo'], "UTF-8") . '</td>';
                                                            echo '<td><button id="ActualizarRegistro" class="btn btn-warning" onclick="TraerAprendizActualizar(' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '); obtenerfoco2();" >Actualizar</button></td>';
                                                        }
                                                }
                                ?>
                            </tbody>
                         </table>
                       <?php
                     echo '<td><button id="ActualizarRegistro" class="btn btn-danger" onclick="InactivarAprendices(' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . ');" >Inactivar Monitores</button></td>';
                   ?>
               </div>
            </div>
        </div>
    </div>



     





