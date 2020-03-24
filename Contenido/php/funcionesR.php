<?php

if("RegistrarRegistro" == isset($_POST['NombreProceso']))

        {

            
                require_once 'Conexion.php';

                $IDAprendiz = $_POST['IDAprendiz'];
                $IDSupervisor = $_POST['IDSupervisor'];
                $HoraIngreso = $_POST['HoraIngreso'];
                $HoraSalida = $_POST['HoraSalida'];
                $Observaciones = $_POST['Observaciones'];
                $FechaDeIngreso = date('Y-m-d');

                $inicio= $HoraIngreso;
                $fin= $HoraSalida;

                $mesconsulta= explode('-', $fin);

                    
                    function resta($inicio, $fin)
                    
                            {
                                $dif=date("H:i:s", strtotime("00:00:00") + strtotime($fin) - strtotime($inicio) );
                                return $dif;
                            }
                    
                    $diferencia=resta($inicio,$fin);

                    

                $comandofechas="SELECT count(IDAprendiz) as num from Registros where IDAprendiz ='".$IDAprendiz."' and  (SELECT '".$HoraIngreso."') between HoraIngreso and HoraSalida";
                $resultadofechas=mysqli_query($conexion,$comandofechas);
                /* Si Hay Resultados*/

                    if(mysqli_num_rows($resultadofechas)>0)

                        {

                                $fila5 = $resultadofechas->fetch_array(MYSQLI_ASSOC);
                                /* Asignamos A Sessión el valor de la columna Name*/
                                $numerodeaprendices= $fila5['num'];

                        }

                            if($numerodeaprendices > 0)
                            
                                {


                                    ?>
                                           <script>

                                                swal("Alerta!", "EL APRENDIZ YA CUENTA CON REGISTROS CON ESTAS FECHAS.", "warning");

                                               limpiarcajas2();

                                            </script>

                                    <?php

                                }

                    else
                    
                        {



                                $comandoSqlId="SELECT `TipoActividad` FROM `aprendices` WHERE `IDAprendiz`='".$IDAprendiz."';";
                                $resultadoAprendiz = $conexion->query($comandoSqlId);


                                while($resultadoAprendiz1=$resultadoAprendiz->fetch_object())

                                    {

                                                if($resultadoAprendiz1->TipoActividad=='MONITORIAS')

                                                    {
                                                    

                                                        $consulta="SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(HorasTotales))) AS sumahoras FROM registros WHERE IDAprendiz='".$IDAprendiz."' AND MONTH(HoraIngreso)='$mesconsulta[1]';";
                                                        $resultadohoras=mysqli_query($conexion,$consulta);
                                                        /* Si Hay Resultados*/

                                                        if(mysqli_num_rows($resultadohoras)>0)
                                                        
                                                            {

                                                                $fila2 = $resultadohoras->fetch_array(MYSQLI_ASSOC);
                                                                $numerodehoras= $fila2['sumahoras'];

                                                            }

                                                        $rest1 = substr($numerodehoras, 0, -6);
                                                        $topedehoras=60;
                                                        $diferencia2 = substr($diferencia, 0, -6);
                                                        $totaldehoras2= $diferencia2+$rest1;

                                                        if($rest1 >= $topedehoras || $totaldehoras2 > $topedehoras) 
                                                        
                                                            {

                                                                echo "<script>alert('horas anteriores:".$numerodehoras."');</script>";
                                                                echo "<script>alert('recorte de horas anteriores:".$rest1."');</script>";
                                                                echo "<script>alert('horas a ingresar:".$diferencia2."');</script>";
                                                                echo "<script>alert('suma o total:".$totaldehoras2."');</script>";
                                                                echo "<script>alert('mes:".$mesconsulta[1]."');</script>";
                                                                    
                                                                        ?>

                                                                        <script>
                             
                                                                             swal("Alerta!", "EL APRENDIZ YA CUENTA CON EL NÚMERO DE HORAS REQUERIDAS.", "warning");
                             
                                                                             limpiarcajas2();
                             
                                                                         </script>
                             
                                                                        <?php
                                                            
                                                            }

                                                        else

                                                            {

                                                                echo "<script>alert('horas anteriores:".$numerodehoras."');</script>";
                                                                echo "<script>alert('recorte de horas anteriores:".$rest1."');</script>";
                                                                echo "<script>alert('horas a ingresar:".$diferencia2."');</script>";
                                                                echo "<script>alert('suma o total:".$totaldehoras2."');</script>";
                                                                        
                                                                        $ComandoSql="INSERT INTO `registros`(`IDAprendiz`, `IDSupervisor`, `HoraIngreso`, `HoraSalida`, `HorasTotales`, `Observaciones`, `FechaDeIngreso`) VALUES ('".$IDAprendiz."','".$IDSupervisor."','".$HoraIngreso."','".$HoraSalida."','".$diferencia."','".strtoupper($Observaciones)."','".$FechaDeIngreso."');";
                                                                        $resultado = $conexion->query($ComandoSql);

                                                                
                                                            }

                                                    
                                                    }



                                                if( $resultadoAprendiz1->TipoActividad=='APOYO REGULAR')

                                                    {

                                                        
                                                                $consulta="SELECT SUM(HorasTotales) AS sumahoras FROM registros WHERE IDAprendiz='".$IDAprendiz."'and MONTH(HoraIngreso)='$mesconsulta[1]';";
                                                                $resultadohoras=mysqli_query($conexion,$consulta);
                                                                /* Si Hay Resultados*/

                                                                        if(mysqli_num_rows($resultadohoras)>0)
                                                                        
                                                                                {

                                                                                    $fila2 = $resultadohoras->fetch_array(MYSQLI_ASSOC);
                                                                                    /* Asignamos A Sessión el valor de la columna Name*/
                                                                                    $numerodehoras= $fila2['sumahoras'];

                                                                                }

                                                                                        $rest1 = substr($numerodehoras, 0, -4);
                                                                                        $topedehoras=40;
                                                                                        $diferencia3 = substr($diferencia, 0, -6);
                                                                                        $totaldehoras3= $diferencia3+$rest1;

                                                                                        if($rest1 >= $topedehoras || $totaldehoras3 > $topedehoras) 

                                                                                            {
                                                                        
                                                                                                    ?>
                                                                                                    
                                                                                                    <script>
                                                        
                                                                                                        swal("Alerta!", "EL APRENDIZ YA CUENTA CON EL NÚMERO DE HORAS REQUERIDAS.", "warning");
                                                        
                                                                                                        limpiarcajas2();
                                                        
                                                                                                    </script>
                                                        
                                                                                                    <?php

                                                                                            }

                                                                                        else

                                                                                            {

                                                                                                        $ComandoSql="INSERT INTO `registros`(`IDAprendiz`, `IDSupervisor`, `HoraIngreso`, `HoraSalida`, `HorasTotales`, `Observaciones`, `FechaDeIngreso`) VALUES ('".$IDAprendiz."','".$IDSupervisor."','".$HoraIngreso."','".$HoraSalida."','".$diferencia."','".strtoupper($Observaciones)."','".$FechaDeIngreso."');";
                                                                                                        $resultado = $conexion->query($ComandoSql);


                                                                                            }
                                                                
                                                    }

                                                if($resultadoAprendiz1->TipoActividad=='APOYO FIC')
                                                        
                                                    {


                                                                    $ComandoSql="INSERT INTO `registros`(`IDAprendiz`, `IDSupervisor`, `HoraIngreso`, `HoraSalida`, `HorasTotales`, `Observaciones`, `FechaDeIngreso`) VALUES ('".$IDAprendiz."','".$IDSupervisor."','".$HoraIngreso."','".$HoraSalida."','".$diferencia."','".strtoupper($Observaciones)."','".$FechaDeIngreso."');";
                                                                    $resultado = $conexion->query($ComandoSql);

                                                                    
                                                    }

                                    }

                        }
        }


//fin de la insercion

else

    {


        if("UpdateRegistro" == isset($_POST['NombreProceso6']))
        
            {

                
                require_once 'Conexion.php';
                
                $IDRegistro = $_POST['IDRegistro'];
                $IDAprendiz = $_POST['IDAprendiz'];
                $IDSupervisor = $_POST['IDSupervisor'];
                $HoraIngreso = $_POST['HoraIngreso'];
                $HoraSalida = $_POST['HoraSalida'];
                $Observaciones = $_POST['Observaciones'];
                $FechaDeIngreso = date('Y-m-d');
                
                $inicio= $HoraIngreso;
                $fin= $HoraSalida;
                
                $mesconsulta= explode('-', $fin);
                
                    
                    function resta($inicio, $fin)

                        {
                                $dif=date("H:i:s", strtotime("00:00:00") + strtotime($fin) - strtotime($inicio) );
                                return $dif;
                        }
                    
                $diferencia=resta($inicio,$fin);
                
                    
                
                $comandofechas="SELECT count(IDAprendiz) as num from Registros where IDAprendiz ='".$IDAprendiz."' and  (SELECT '".$HoraIngreso."') between HoraIngreso and HoraSalida";
                $resultadofechas=mysqli_query($conexion,$comandofechas);
                /* Si Hay Resultados*/

                    if(mysqli_num_rows($resultadofechas)>0)
                    
                        {
                    
                                $fila5 = $resultadofechas->fetch_array(MYSQLI_ASSOC);
                                /* Asignamos A Sessión el valor de la columna Name*/
                                $numerodeaprendices= $fila5['num'];
                    
                        }
                

                    if($numerodeaprendices > 0)
                        
                        {
                    
                            ?>
                                                                        
                            <script>

                                 swal("Alerta!", "EL APRENDIZ YA CUENTA CON REGISTROS CON ESTAS FECHAS.", "warning");

                                   function cargar(url,div)

                                        {

                                            $.ajax({ 

                                                type: "POST",
                                                url:url,
                                                data:{},

                                                success: function(datos)

                                                    { 

                                                        var p = datos; 
                                                        $('#'+div).html(p);

                                                    }

                                            });
                                        /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                        cargar(url,"TablaRecarga");
                                        var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                        cargar(url,"TablaRecarga");*/ 
                                        }

                             </script>

                            <?php
                        
                        }
                
                    else

                        {
                    
                    
                    
                            $comandoSqlId="SELECT `TipoActividad` FROM `aprendices` WHERE `IDAprendiz`='".$IDAprendiz."';";
                            $resultadoAprendiz = $conexion->query($comandoSqlId);
                    
                    
                            while($resultadoAprendiz1=$resultadoAprendiz->fetch_object())
                    
                                    {
                                
                                
                                        if($resultadoAprendiz1->TipoActividad=='MONITORIAS')
                                
                                                {
                                                
                                        
                                                    $consulta="SELECT SUM(HorasTotales) AS sumahoras FROM registros WHERE IDAprendiz='".$IDAprendiz."'and MONTH(HoraIngreso)='$mesconsulta[1]';";
                                                    $resultadohoras=mysqli_query($conexion,$consulta);
                                                    /* Si Hay Resultados*/

                                                    if(mysqli_num_rows($resultadohoras)>0)
                                                    
                                                        {
                                            
                                                                $fila2 = $resultadohoras->fetch_array(MYSQLI_ASSOC);
                                                                $numerodehoras= $fila2['sumahoras'];
                                            
                                                        }
                                        
                                                    $rest1 = substr($numerodehoras, 0, -4);
                                                    $topedehoras=60;
                                                    $diferencia2 = substr($diferencia, 0, -6);
                                                    $totaldehoras2= $diferencia2+$rest1;
                                        
                                                    if($rest1 >= $topedehoras || $totaldehoras2 > $topedehoras) 
                                                    
                                                        {

                                                                   
                                                                   ?>

                                                                        <script>

                                                                          swal("Alerta!", "EL APRENDIZ YA CUENTA CON EL NÚMERO DE HORAS REQUERIDAS.", "warning");

                                                                            limpiarcajas();

                                                                                    function cargar(url,div)
                                                                                    
                                                                                            {

                                                                                                $.ajax({ 

                                                                                                    type: "POST",
                                                                                                    url:url,
                                                                                                    data:{},

                                                                                                        success: function(datos)

                                                                                                        { 

                                                                                                        var p = datos; 
                                                                                                        $('#'+div).html(p); 

                                                                                                        }

                                                                                                });
                                                                                                /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                                                                                cargar(url,"TablaRecarga");
                                                                                                var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                                                                                cargar(url,"TablaRecarga");*/ 
                                                                                            }
                                                                        </script>
                                                                    <?php
                                                        
                                                        }
                                        
                                                    else
                                        
                                                        {

                                                            
                                                            $ComandoSql="UPDATE `registros` SET `IDSupervisor`='".$IDSupervisor."',`HoraIngreso`='".$HoraIngreso."',`HoraSalida`='".$HoraSalida."',`HorasTotales`='".$diferencia."',`Observaciones`='".strtoupper($Observaciones)."' ,`FechaDeIngreso`='".$FechaDeIngreso."'  WHERE IDRegistro='".$IDRegistro."' ";
                                                           
                                                            $resultado = $conexion->query($ComandoSql);

                                                                    ?>

                                                                        <script>
                                                                            
                                                                            function cargar(url,div)

                                                                                {

                                                                                    $.ajax({ 

                                                                                        type: "POST",
                                                                                        url:url,
                                                                                        data:{},

                                                                                        success: function(datos)

                                                                                            { 

                                                                                                var p = datos; 
                                                                                                $('#'+div).html(p);

                                                                                            }

                                                                                    });
                                                                                /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                                                                cargar(url,"TablaRecarga");
                                                                                var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                                                                cargar(url,"TablaRecarga");*/ 
                                                                                }

                                                                        </script>

                                                                    <?php
                                                            
                                                        }
                                        
                                                
                                                }
                                        
                                
                                
                                        if($resultadoAprendiz1->TipoActividad=='APOYO REGULAR')

                                                {
                                            
                                                    
                                                                    $consulta="SELECT SUM(HorasTotales) AS sumahoras FROM registros WHERE IDAprendiz='".$IDAprendiz."'and MONTH(HoraIngreso)='$mesconsulta[1]';";
                                                                    $resultadohoras=mysqli_query($conexion,$consulta);
                                                                    /* Si Hay Resultados*/

                                                                    if(mysqli_num_rows($resultadohoras)>0)

                                                                        {
                                                        
                                                                            $fila2 = $resultadohoras->fetch_array(MYSQLI_ASSOC);
                                                                            /* Asignamos A Sessión el valor de la columna Name*/
                                                                            $numerodehoras= $fila2['sumahoras'];
                                                        
                                                                        }
                                                    
                                                                        $rest1 = substr($numerodehoras, 0, -4);
                                                                        $topedehoras=40;
                                                                        $diferencia3 = substr($diferencia, 0, -6);
                                                                        $totaldehoras3= $diferencia3+$rest1;
                                                    
                                                                    if($rest1 >= $topedehoras || $totaldehoras3 > $topedehoras) 
                                                                    
                                                                        {

                                                                            
                                                                            ?>

                                                                            <script>

                                                                            swal("Alerta!", "EL APRENDIZ YA CUENTA CON EL NÚMERO DE HORAS REQUERIDAS.", "warning");

                                                                            limpiarcajas();

                                                                            function cargar(url,div)
                                                                            
                                                                                {

                                                                                    $.ajax({ 

                                                                                        type: "POST",
                                                                                        url:url,
                                                                                        data:{},

                                                                                            success: function(datos)

                                                                                                { 

                                                                                                    var p = datos; 
                                                                                                    $('#'+div).html(p); 

                                                                                                }

                                                                                    });
                                                                                    /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                                                                    cargar(url,"TablaRecarga");
                                                                                    var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                                                                    cargar(url,"TablaRecarga");*/ 
                                                                                }

                                                                            </script>

                                                                            <?php
                                                            
                                                                        }
                                                    
                                                        else
                                                    
                                                        {

                                                    
                                                                $ComandoSql="UPDATE `registros` SET `IDSupervisor`='".$IDSupervisor."',`HoraIngreso`='".$HoraIngreso."',`HoraSalida`='".$HoraSalida."',`HorasTotales`='".$diferencia."',`Observaciones`='".strtoupper($Observaciones)."' ,`FechaDeIngreso`='".$FechaDeIngreso."'  WHERE IDRegistro='".$IDRegistro."' ";
                                                                
                                                                $resultado = $conexion->query($ComandoSql);

                                                                ?>

                                                                    <script>

                                                                    function cargar(url,div)
                                                                    
                                                                    {

                                                                        $.ajax({ 

                                                                            type: "POST",
                                                                            url:url,
                                                                            data:{},

                                                                            success: function(datos)

                                                                                { 

                                                                                    var p = datos; 
                                                                                    $('#'+div).html(p);
                                                                                
                                                                                }
                                                                        });
                                                                        /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                                                        cargar(url,"TablaRecarga");
                                                                        var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                                                        cargar(url,"TablaRecarga");*/ 
                                                                    }
                                                                    </script>

                                                                <?php
                                                    
                                                        }
                                                        
                                                }

                                        else

                                                {

                                                            if($resultadoAprendiz1->TipoActividad=='APOYO FIC')

                                                                    {


                                                                        $ComandoSql="UPDATE `registros` SET `IDSupervisor`='".$IDSupervisor."',`HoraIngreso`='".$HoraIngreso."',`HoraSalida`='".$HoraSalida."',`HorasTotales`='".$diferencia."',`Observaciones`='".strtoupper($Observaciones)."' ,`FechaDeIngreso`='".$FechaDeIngreso."'  WHERE IDRegistro='".$IDRegistro."' ";
                                                                        
                                                                        $resultado = $conexion->query($ComandoSql);

                                                                        ?>

                                                                            <script>

                                                                            function cargar(url,div)
                                                                            
                                                                            {

                                                                                $.ajax({ 

                                                                                    type: "POST",
                                                                                    url:url,
                                                                                    data:{},

                                                                                    success: function(datos)

                                                                                        { 

                                                                                            var p = datos; 
                                                                                            $('#'+div).html(p);
                                                                                        
                                                                                        }
                                                                                });
                                                                                /** var url="../modulos/parametrizacion/MostrarUsuarios.php" 
                                                                                cargar(url,"TablaRecarga");
                                                                                var url="../modulos/parametrizacion/MostrarUsuarios.php"
                                                                                cargar(url,"TablaRecarga");*/ 
                                                                            
                                                                            }
                                                                            </script>

                                                                        <?php


                                                                    }
                                                            
                                                }
                                        
                                    }
                    
                        }
                }

            else

                {

                    if($_POST['Proceso']=="TraerRegistros")
                    
                    {

                            require_once 'Conexion.php';

                                $conexion = new mysqli($hostname, $username, $password,$database);  

                                    if ($conexion -> connect_errno)

                                        {
                                            die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                        }
                                    
                                            $IDRegistro= $_POST['IDRegistro'];
                                        
                                            $query="SELECT * FROM `registros` WHERE `IDRegistro`='".$IDRegistro."'";
                                            // $query2="SELECT HoraIngreso FROM `registros` WHERE `IDRegistro`='".$IDRegistro."'";
                                            // $query3="SELECT HoraSalida FROM `registros` WHERE `IDRegistro`='".$IDRegistro."'";
                                            // echo $query2;
                                            // echo $query3;
                                            $buscarRegistros=$conexion->query($query);
                                            $Vector= array();
                                        
                                            while($fila= $buscarRegistros->fetch_array())

                                                {

                                                    $Vector[]=$fila; 

                                                }

                                            echo json_encode($Vector);
                    }
                
                }


    }


?>


