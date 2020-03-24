
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
                                                <th>N° DEL PROGRAMA</th>
                                                <th>DOCUMENTO DEL INSTRUCTOR</th>
                                                <th>NOMBRE DEL PROGRAMA</th>
                                                <th>ESTADO</th>
                                                <th>NIVEL DE FORMACIÓN</th>
                                                <th>ACTUALIZAR</th>
                                             </tr>
                                        </thead>
                                    <tbody id="ResultadoTabla">
                                        <?php
                                            require_once('../Conexion.php');
                                                $ComandoSql = "SELECT * FROM programas ORDER BY IDPrograma";
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                    {
           
                                                            /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                            while ($fila = $Resultado->fetch_array()) 
                                                            
                                                                {
                                                                    echo '<tr>';
                                                                    echo '<td>' . mb_convert_encoding($fila['IDPrograma'], "UTF-8") . '</td>';
                                                                    echo '<td>' . mb_convert_encoding($fila['IDInstructor'], "UTF-8") . '</td>';
                                                                    echo '<td>' . mb_convert_encoding($fila['Nombre'], "UTF-8") . '</td>';
                                                                    echo '<td>' . mb_convert_encoding($fila['Estado'], "UTF-8") . '</td>';
                                                                    echo '<td>' . mb_convert_encoding($fila['NivelFormacion'], "UTF-8") . '</td>';
                                                                    echo '<td><button id="ActualizarRegistro" class="btn btn-warning" onclick="TraerProgramaActualizar(' . mb_convert_encoding($fila['IDPrograma'], "UTF-8") . '); obtenerfoco2();" >Actualizar</button></td>';
                                                                }
                                                    }
                                        ?>
                                    </tbody>
                             </table>
                      </div>
               </div>
        </div>
   </div>


     





