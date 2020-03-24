<?php

if("RegistrarFicha" == isset($_POST['NombreProceso']))

      {

            $NumeroDeFicha = $_POST['NumeroDeFicha'];
            $Nombre = $_POST['Nombre'];
            $Jornada = $_POST['Jornada'];
            $FechaInicio = $_POST['FechaInicio'];
            $FechaFinalizacion = $_POST['FechaFinalizacion'];
            $Estado = $_POST['Estado'];

            require_once 'Conexion.php';


            $ComandoSql="INSERT INTO `ficha`(`NumeroDeFicha`, `Nombre`, `Jornada`, `FechaInicio`, `FechaFinalizacion`, `Estado`) VALUES ('".$NumeroDeFicha."','".strtoupper($Nombre)."','".strtoupper($Jornada)."','".$FechaInicio."','".$FechaFinalizacion."','".strtoupper($Estado)."');";
            
            $resultado = $conexion->query($ComandoSql);
                  
                  if($resultado==true)
                  
                      {

                        

                      }

                  else

                      {
                          
                          echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE REGISTRO LA FICHA !!' ;
                          echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                          <span aria-hidden="true">&times;</span>
                          </a>
                          </div>';
                          
                      }

      }



else

      {


       if("updateFichas" == isset($_POST['NombreProceso1']))

            {

                    $NumeroDeFicha = $_POST['NumeroDeFicha'];
                    $Nombre = $_POST['Nombre'];
                    $Jornada = $_POST['Jornada'];
                    $FechaInicio = $_POST['FechaInicio'];
                    $FechaFinalizacion = $_POST['FechaFinalizacion'];
                    $Estado = $_POST['Estado'];

                      
                    //  echo $Estado;
                    //  echo $NombresyApellidos;
                    //  echo $Correo;
                    //  echo $Telefono;
                    //  echo $IdInstructor;

                    require_once 'Conexion.php';

                    // if($_POST)
                    // {
                        
                    // if($IDInstructor=='' || $NombresyApellidos=='' || $Estado=='0' || $Correo=='' || $Telefono=='')
                    // {
                    //    echo"<script>alert('Usted esta siendo redireccionado a la pagina buscar instructores por no completar los campos correctamente')</script>";
                        
                    //  echo "<script language=\"javascript\">
                    // window.location.href=\"\";
                    // </script>";
                    // }
                                  
                    //  else
                    //  {
                    
                    $ComandoSql="UPDATE `ficha` SET `Nombre`='".strtoupper($Nombre)."',`Jornada`='".strtoupper($Jornada)."',`FechaInicio`='".$FechaInicio."',`FechaFinalizacion`='".$FechaFinalizacion."',`Estado`='".strtoupper($Estado)."'  WHERE NumeroDeFicha='".$NumeroDeFicha."' ";
                    
                    $resultado = $conexion->query($ComandoSql);
                    
                        if($resultado==true)

                              {

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

                              else
                              
                              {
                                  
                                    echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE ACTUALIZO LA INFORMACIÓN DE LA FICHA !!' ;
                                    echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                                    <span aria-hidden="true">&times;</span>
                                    </a>
                                    </div>';

                              }
            
            }


       else

            {



              if($_POST['Proceso']=="TraerFichasctualizar")

                  {
                        require_once 'Conexion.php';

                            $conexion = new mysqli($hostname, $username, $password,$database);   

                                if ($conexion -> connect_errno)
                                    
                                    {
                                      die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                    }

                                        $NumeroDeFicha= $_POST['NumeroDeFicha'];
                                      
                                        $query="SELECT * FROM `ficha` WHERE `NumeroDeFicha`='".$NumeroDeFicha."'";
                                        //echo "Sentencia: ".$query;
                                        $buscarIntructores=$conexion->query($query);
                                        $Vector= array();
                                    
                                            while($filaInstructores= $buscarIntructores->fetch_array())

                                                {

                                                    $Vector[]=$filaInstructores; 

                                                }
                                                
                                            echo json_encode($Vector);
                  }

            }

      }

?>


