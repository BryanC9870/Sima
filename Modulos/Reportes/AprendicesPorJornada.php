
<script src="js/ListarTablas.js"></script>
    <div class="col-sm-15" style="padding:12px">
        <h1 class="page-header">Mostrar Datos</h1>
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
                                                    <th>PROGRAMA</th>
                                                    <th>FICHA</th>
                                                    <th>NOMBRES Y APELLIDOS</th>
                                                    <th>CORREO</th>
                                                    <th>TELEFONO</th>
                                                    <th>TIPO DE ACTIVIDAD</th>
                                                    <th>JORNADA</th>    
                                                </tr>
                                        </thead>
                                    <tbody id="ResultadoTabla">
                                        <?php
                                            require_once('../Conexion.php');
                                                $ComandoSql = "SELECT aprendices.IDAprendiz, aprendices.Nombre, aprendices.NumeroDeFicha,aprendices.NombresyApellidos,aprendices.Correo,aprendices.Telefono,aprendices.TipoActividad, ficha.Jornada FROM `aprendices`, ficha WHERE aprendices.NumeroDeFicha=ficha.NumeroDeFicha and aprendices.Estado='ACTIVO' AND ficha.Estado='ACTIVO' ORDER by Jornada";
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                        {
                                            
                                                                /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                while ($fila = $Resultado->fetch_array()) 
                                                                
                                                                    {
                                                                        echo '<tr>';
                                                                        echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Nombre'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Jornada'], "UTF-8") . '</td>';
                                                                    }
                                        
                                                        }
                                        ?>
                                    </tbody>
                            </table>
                    </div>
            </div>
    </div>
<br>
    <br>
        <div class="col-sm-15" style="padding:12px">
        <div style="text-align: center;">
            <h1 class="page-header">NÚMERO DE APRENDICES POR JORNADA</h1>
            </div>
                <!--TABLA RESPONSIVA--> 
                    <div class="well" data-example-id="" style="margin-left: auto;margin-right: auto;">
                        <br>
                            <br>
                                <canvas id="oilChart" style="max-width:480px;min-width:150px;margin-left: auto;margin-right: auto;"></canvas>
                                    <script>

                                        graficarDatos1();

                                    </script>
                    </div>
        </div>






