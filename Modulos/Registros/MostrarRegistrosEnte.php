    <?php

    session_start();
    
    ?>

    <script src="js/ListarTablas.js"></script>
        <div class="col-sm-13" style="padding:12px">
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
                                                            <th>ID DEL REGISTRO</th>
                                                            <th>NOMBRES Y APELLIDOS DEL APRENDIZ</th>
                                                            <th>NOMBRES Y APELLIDOS DEL SUPERVISOR</th>
                                                            <th>HORA DE INGRESO</th>
                                                            <th>HORA DE SALIDA</th>
                                                            <th>HORAS TRABAJADAS</th>
                                                            <th>OBSERVACIONES</th>
                                                            <th>FECHA DE INGRESO</th>
                                                            <th>ACTUALIZAR</th>
                                                            <th>ELIMINAR</th>
                                                        </tr>
                                                </thead>
                                            <tbody id="ResultadoTabla">
                                                <?php
                                                    require_once('../Conexion.php');
                                                        $ComandoSql = "SELECT registros.IDRegistro, aprendices.IDAprendiz, aprendices.NombresyApellidos AS apellidosaprendiz, supervisores.NombresyApellidos, registros.HoraIngreso, registros.HoraSalida, registros.HorasTotales, registros.Observaciones, registros.FechaDeIngreso FROM registros, aprendices, supervisores WHERE aprendices.IDAprendiz = registros.IDAprendiz AND aprendices.Estado ='ACTIVO' AND supervisores.IDSupervisor = registros.IDSupervisor AND registros.IDSupervisor = ".$_SESSION['Usuario']." ORDER BY IDRegistro";
                                                            if ($Resultado = $conexion->query($ComandoSql)) 
                                                            
                                                                {
                                                
                                                                    /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                    while ($fila = $Resultado->fetch_array()) 
                                                        
                                                                        {
                                                                            echo '<tr>';
                                                                            echo '<td>' . mb_convert_encoding($fila['IDRegistro'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['apellidosaprendiz'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['HoraIngreso'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['HoraSalida'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['HorasTotales'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Observaciones'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['FechaDeIngreso'], "UTF-8") . '</td>';
                                                                            echo '<td><button id="ActualizarRegistro" class="btn btn-warning" onclick="TraerRegistros(' . mb_convert_encoding($fila['IDRegistro'], "UTF-8") . '); obtenerfoco();" >Actualizar</button></td>';
                                                                            echo '<td><button id="EliminarTipoHabitacion" class="btn btn-danger" onclick="DeleteRegistrosEnte(' . mb_convert_encoding($fila['IDRegistro'], "UTF-8") . ');" >Eliminar</button></td>';
                                                                        }
                                                                }
                                                ?>
                                        </tbody>
                                </table>
                        </div>
                    </div>
            </div>
        </div>


     





