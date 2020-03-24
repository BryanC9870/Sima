<?php

session_start();

?>

<script src="js/ListarTablas.js"></script>
<h1 class="page-header">Mostrar Datos</h1>
 <!--TABLA RESPONSIVA--> 
<div class="bs-example" data-example-id="simple-responsive-table">
    <div class="table-responsive" padding>
        <table class="table table-striped table-bordered" id="tabla">
            <br>
               <br>
                  <br>
                      <?php
                            if("llamarReporte" == isset($_POST['NombreProcesoreport']) || "llamarReporte3" == isset($_POST['NombreProcesoreport3']))

                                {
                                    ?>
                                        <thead>
                                                <tr>
                                                <th>CÉDULA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>FICHA</th>
                                                <th>CORREO</th>
                                                <th>TELEFONO</th>
                                                <th>TIPO DE ACTIVIDAD</th>
                                                <th>HORAS TOTALES</th>    
                                            </tr>
                                        </thead>
                                    <?php
                                }


                            if("llamarReporte4" == isset($_POST['NombreProcesoreport4']))

                                {
                                    ?>
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
                                             </tr>
                                        </thead>
                                    <?php
                                }


                            else

                                {

                                    if("llamarReporte2" == isset($_POST['NombreProcesoreport2']))

                                        {
                                            ?>
                                                <thead>
                                                        <tr>
                                                        <th>CÉDULA</th>
                                                        <th>NOMBRES Y APELLIDOS</th>
                                                        <th>FICHA</th>
                                                        <th>CORREO</th>
                                                        <th>TELEFONO</th>
                                                        <th>TIPO DE ACTIVIDAD</th> 
                                                        </tr>
                                                </thead>
                                            <?php

                                        }
                                }
                      ?>
                 
              <tbody id="ResultadoTabla">  

                      <?php

                            require_once 'Conexion.php';

                                if("llamarReporte" == isset($_POST['NombreProcesoreport']))

                                    {
                                      
                                        $FechaInicio = $_POST['FechaInicio'];
                                        $FechaFin = $_POST['FechaFin'];

                                        $fecha = $FechaFin;
                                        $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
                                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                
                                             if($_SESSION['Rol']=="ENTE")
                                             {
                                                $ComandoSql = "SELECT aprendices.IDAprendiz, aprendices.NombresyApellidos, aprendices.NumeroDeFicha,aprendices.Correo,aprendices.Telefono, aprendices.TipoActividad ,SEC_TO_TIME(SUM(TIME_TO_SEC(HorasTotales))) HorasTotales FROM `registros`,aprendices WHERE aprendices.IDAprendiz=registros.IDAprendiz AND aprendices.Estado ='ACTIVO' AND registros.HoraIngreso BETWEEN  '".$FechaInicio."' AND  '".$nuevafecha."' AND registros.IDSupervisor = '".$_SESSION['Usuario']."' GROUP BY registros.IDAprendiz";
                                             
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                            {
                                                            /* echo"SE EJECUTO LA CONSULTA CORRECTAMENTE"; */
                                                            /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                while ($fila = $Resultado->fetch_array()) 
                                                                
                                                                        {
                                                                                echo '<tr>';
                                                                                echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';      
                                                                                echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['HorasTotales'], "UTF-8") . '</td>';
                                                                        }
                                                            }

                                            }

                                            

                                            else

                                            {


                                             $ComandoSql = "SELECT aprendices.IDAprendiz, aprendices.NombresyApellidos, aprendices.NumeroDeFicha,aprendices.Correo,aprendices.Telefono, aprendices.TipoActividad ,SEC_TO_TIME(SUM(TIME_TO_SEC(HorasTotales))) HorasTotales FROM `registros`,aprendices WHERE aprendices.IDAprendiz=registros.IDAprendiz AND aprendices.Estado ='ACTIVO' AND registros.HoraIngreso BETWEEN  '".$FechaInicio."' AND  '".$nuevafecha."' GROUP BY registros.IDAprendiz";
                                                    
                                             if ($Resultado = $conexion->query($ComandoSql)) 
                                             
                                                     {
                                                     /* echo"SE EJECUTO LA CONSULTA CORRECTAMENTE"; */
                                                     /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                         while ($fila = $Resultado->fetch_array()) 
                                                         
                                                                 {
                                                                         echo '<tr>';
                                                                         echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                                         echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                         echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';      
                                                                         echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                         echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                         echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                                         echo '<td>' . mb_convert_encoding($fila['HorasTotales'], "UTF-8") . '</td>';
                                                                 }
                                                     }

                                            }

                                    }


                                    if("llamarReporte3" == isset($_POST['NombreProcesoreport3']))

                                    {
                                        $IDAprendiz =  $_POST['documento'];
                                        $FechaInicio = $_POST['FechaInicio'];
                                        $FechaFin = $_POST['FechaFin'];

                                        $fecha = $FechaFin;
                                        $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
                                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                
                                             if($_SESSION['Rol']=="APRENDIZ")
                                             {
                                                
                                                $ComandoSql = "SELECT aprendices.IDAprendiz, aprendices.NombresyApellidos, aprendices.NumeroDeFicha,aprendices.Correo,aprendices.Telefono, aprendices.TipoActividad ,SEC_TO_TIME(SUM(TIME_TO_SEC(HorasTotales))) HorasTotales FROM `registros`,aprendices WHERE aprendices.IDAprendiz=registros.IDAprendiz AND aprendices.Estado ='ACTIVO' AND registros.HoraIngreso BETWEEN '".$FechaInicio."' AND '".$nuevafecha."' AND registros.IDAprendiz = '".$IDAprendiz."' GROUP BY registros.IDAprendiz";
                                             
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                            {
                                                            /* echo"SE EJECUTO LA CONSULTA CORRECTAMENTE"; */
                                                            /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                while ($fila = $Resultado->fetch_array()) 
                                                                
                                                                        {
                                                                                echo '<tr>';
                                                                                echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';      
                                                                                echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                                                echo '<td>' . mb_convert_encoding($fila['HorasTotales'], "UTF-8") . '</td>';
                                                                        }
                                                            }

                                            }

                                    }

                                    
                                    if("llamarReporte4" == isset($_POST['NombreProcesoreport4']))

                                    {
                                        $IDAprendiz =  $_POST['documento'];
                                        $FechaInicio = $_POST['FechaInicio'];
                                        $FechaFin = $_POST['FechaFin'];

                                        $fecha = $FechaFin;
                                        $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
                                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                                
                                             if($_SESSION['Rol']=="APRENDIZ")
                                             {
                                                
                                                $ComandoSql = "SELECT registros.IDRegistro, aprendices.IDAprendiz, supervisores.IDSupervisor, aprendices.NombresyApellidos as apellidosaprendiz, supervisores.NombresyApellidos, registros.HoraIngreso, registros.HoraSalida, registros.HorasTotales, registros.Observaciones, registros.FechaDeIngreso FROM registros, aprendices, supervisores WHERE aprendices.IDAprendiz = registros.IDAprendiz AND registros.IDAprendiz = '".$IDAprendiz."' AND registros.HoraIngreso BETWEEN  '".$FechaInicio."' AND  '".$nuevafecha."' AND supervisores.IDSupervisor = registros.IDSupervisor";
                                             
                                                    if ($Resultado = $conexion->query($ComandoSql)) 
                                                    
                                                            {
                                                            /* echo"SE EJECUTO LA CONSULTA CORRECTAMENTE"; */
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
                                                                        }
                                                            }

                                            }

                                    }


                                else
                                
                                    {

                                        if("llamarReporte2" == isset($_POST['NombreProcesoreport2']))

                                             {

                                                        $FechaInicio = $_POST['FechaInicio'];
                                                        $FechaFin = $_POST['FechaFin'];
                                                
                                                                    $ComandoSql = "SELECT DISTINCT aprendices.IDAprendiz, aprendices.NombresyApellidos, aprendices.NumeroDeFicha, aprendices.Correo, aprendices.Telefono, aprendices.TipoActividad FROM aprendices WHERE aprendices.Estado ='ACTIVO' AND aprendices.IDAprendiz NOT IN (SELECT IDAprendiz FROM registros WHERE HoraIngreso BETWEEN '".$FechaInicio."' AND '".$FechaFin."') ORDER BY IDAprendiz";
                                                                    
                                                                    if ($Resultado = $conexion->query($ComandoSql))

                                                                            {
                                                                            /* echo"SE EJECUTO LA CONSULTA CORRECTAMENTE"; */
                                                                            /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/
                                                                                    while ($fila = $Resultado->fetch_array()) 

                                                                                        {
                                                                                                echo '<tr>';
                                                                                                echo '<td>' . mb_convert_encoding($fila['IDAprendiz'], "UTF-8") . '</td>';
                                                                                                echo '<td>' . mb_convert_encoding($fila['NombresyApellidos'], "UTF-8") . '</td>';
                                                                                                echo '<td>' . mb_convert_encoding($fila['NumeroDeFicha'], "UTF-8") . '</td>';      
                                                                                                echo '<td>' . mb_convert_encoding($fila['Correo'], "UTF-8") . '</td>';
                                                                                                echo '<td>' . mb_convert_encoding($fila['Telefono'], "UTF-8") . '</td>';
                                                                                                echo '<td>' . mb_convert_encoding($fila['TipoActividad'], "UTF-8") . '</td>';
                                                                                        }

                                                                            }

                                             }

                                    }
                        ?>                 
            </tbody>
        </table>
    </div>
</div>
 