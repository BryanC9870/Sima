<?php

if("RegistrarInstructor" == isset($_POST['NombreProceso']))

      {

            $IDInstructor = $_POST['IDInstructor'];
            $NombresyApellidos = $_POST['NombresyApellidos'];
            $Estado = $_POST['Estado'];
            $Correo = $_POST['Correo'];
            $Telefono = $_POST['Telefono'];


                    require_once 'Conexion.php';


                    $ComandoSql="INSERT INTO `instructores`(`IDInstructor`, `NombresyApellidos`, `Estado`, `Correo`, `Telefono`) VALUES ('".$IDInstructor."','".strtoupper($NombresyApellidos)."','".strtoupper($Estado)."','".strtoupper($Correo)."','".$Telefono."');";
                    
                    $resultado = $conexion->query($ComandoSql);

                        if($resultado==true)

                              {

                         
                              }

                        else

                              {
                                  
                                  echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE REGISTRO EL INSTRUCTOR !!' ;
                                  echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                                  <span aria-hidden="true">&times;</span>
                                  </a>
                                  </div>';
                                  
                              }

      }



else

      {


          if("updateInstructor" == isset($_POST['NombreProceso1']))

              {

                      $IDInstructor = $_POST['IDInstructor'];
                      $NombresyApellidos = $_POST['NombresyApellidos'];
                      $Estado = $_POST['Estado'];
                      $Correo = $_POST['Correo'];
                      $Telefono = $_POST['Telefono'];

                      
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
                    $ComandoSql="UPDATE `instructores` SET `NombresyApellidos`='".strtoupper($NombresyApellidos)."',`Estado`='".strtoupper($Estado)."',`Correo`='".strtoupper($Correo)."',`Telefono`='".$Telefono."'  WHERE IDInstructor='".$IDInstructor."' ";
                    
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
                              
                                echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE ACTUALIZO LA INFORMACIÓN DEL INSTRUCTOR !!' ;
                                echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                                </a>
                                </div>';
                          }
                          //}
              }


          else

              {

                  if($_POST['Proceso']=="TraerInstructorActualizar")

                      {
                        
                        require_once 'Conexion.php';

                            $conexion = new mysqli($hostname, $username, $password,$database);  
                            
                                if ($conexion -> connect_errno)
                                    
                                    {
                                        die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                    }

                                        $IdInstructor= $_POST['IdInstructor'];
                                      
                                        $query="SELECT * FROM `instructores` WHERE `IDInstructor`='".$IdInstructor."'";
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


