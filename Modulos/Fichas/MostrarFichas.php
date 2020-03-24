
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
                                                        <th>N° DE FICHA</th>
                                                        <th>JORNADA</th>
                                                        <th>FECHA DE INICIO</th>
                                                        <th>FECHA DE FINALIZACIÓN</th>
                                                        <th>ESTADO</th>
                                                        <th>ACTUALIZAR</th>
                                                     </tr>
                                                </thead>
                                            <tbody id="ResultadoTabla">
                                                 <?php
                                                     require_once('../Conexion.php');
                                                          $ComandoSql = "SELECT * FROM ficha ORDER BY NumeroDeFicha";
                                                               if ($Resultado = $conexion->query($ComandoSql)) 
                                                               
                                                               {
                                              
                                                                    /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                    while ($fila = $Resultado->fetch_array()) 
                                                            
                                                                        {
                                                                            echo '<tr>';
                                                                            echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Jornada'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['FechaInicio'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['FechaFinalizacion'], "UTF-8") . '</td>';
                                                                            echo '<td>' . mb_convert_encoding($fila['Estado'], "UTF-8") . '</td>';
                                                                            echo '<td><button id="ActualizarRegistro" class="btn btn-warning" onclick="TraerFichasctualizar(' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '); obtenerfoco2();" >Actualizar</button></td>';
                                                                        }
                                                               }
                                                ?>
                                      </tbody>
                              </table>
                        </div>
                  </div>
             </div>
        </div>



     





