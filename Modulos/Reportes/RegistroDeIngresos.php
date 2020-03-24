
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
                                                    <th>ID DEL REGISTRO</th>
                                                    <th>USUARIO</th>
                                                    <th>NOMBRES Y APELLIDOS</th>
                                                    <th>IP</th>
                                                    <th>HORA DE INGRESO</th>    
                                                </tr>
                                        </thead>
                                    <tbody id="ResultadoTabla">
                                        <?php
                                            require_once('../Conexion.php');
                                                $ComandoSql = "SELECT * FROM `registrologins` ORDER BY Usuario";
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                        {
                                            
                                                                /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                while ($fila = $Resultado->fetch_array()) 
                                                                
                                                                    {
                                                                        echo '<tr>';
                                                                        echo '<td>' . mb_convert_encoding($fila['NumeroRegistro'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Usuario'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['Ip'], "UTF-8") . '</td>';
                                                                        echo '<td>' . mb_convert_encoding($fila['HoraDeIngreso'], "UTF-8") . '</td>';
                                                                    }
                                        
                                                        }
                                        ?>
                                    </tbody>
                            </table>
                    </div>
            </div>
    </div>