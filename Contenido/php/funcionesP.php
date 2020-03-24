<?php

if("RegistrarPrograma" == isset($_POST['NombreProceso2']))

      {

                $IDInstructor = $_POST['IDInstructor'];
                $Nombre = $_POST['Nombre'];
                $Estado = $_POST['Estado'];
                $NivelFormacion = $_POST['NivelFormacion'];
                
                
                
                require_once 'Conexion.php';
                
                
                $ComandoSql="INSERT INTO `programas`(`IDInstructor`, `Nombre`, `Estado`, `NivelFormacion`) VALUES ('".$IDInstructor."','".mb_strtoupper($Nombre)."','".strtoupper($Estado)."','".strtoupper($NivelFormacion)."');";
                
                      $resultado = $conexion->query($ComandoSql);

                          if($resultado==true)

                              {
                              

                              }

                          else

                              {
                                  
                                  echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE REGISTRO EL Programa !!' ;
                                  echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                                  <span aria-hidden="true">&times;</span>
                                  </a>
                                  </div>';

                              }
            
      }



else
      {


      if("updateInstructor" == isset($_POST['NombreProceso3']))
      
            {

                    $IDPrograma = $_POST['IDPrograma'];
                    $IDInstructor = $_POST['IDInstructor'];
                    $Nombre = $_POST['Nombre'];
                    $Estado = $_POST['Estado'];
                    $NivelFormacion = $_POST['NivelFormacion'];
                  

                    
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
                    
                  $ComandoSql="UPDATE `programas` SET `IDInstructor`='".$IDInstructor."',`Nombre`='".strtoupper($Nombre)."',`Estado`='".strtoupper($Estado)."',`NivelFormacion`='".strtoupper($NivelFormacion)."'  WHERE IDPrograma='".$IDPrograma."' ";
                  
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
                              
                              echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE ACTUALIZO LA INFORMACIÓN DEL PROGRAMA !!' ;
                              echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                              <span aria-hidden="true">&times;</span>
                              </a>
                              </div>';
                          
                          }
            
            }


      else

            {

                if($_POST['Proceso']=="TraerProgramaActualizar")

                      {
                          require_once 'Conexion.php';

                              $conexion = new mysqli($hostname, $username, $password,$database); 

                                  if ($conexion -> connect_errno)

                                        {
                                          die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                        }

                                              $IDPrograma= $_POST['IDPrograma']; 

                                              $query="SELECT * FROM `programas` WHERE `IDPrograma`='".$IDPrograma."'";
                                              //echo "Sentencia: ".$query;
                                              $buscarProgramas=$conexion->query($query);

                                              $Vector= array();
                                              
                                              while($filaProgramas= $buscarProgramas->fetch_array())

                                              {
                                                
                                              $Vector[]=$filaProgramas; 

                                              }

                                              echo json_encode($Vector);
                      }

            }


      }




?>


