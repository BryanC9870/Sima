<?php

if("RegistrarAprendiz" == isset($_POST['NombreProceso4']))

      {

              $IDAprendiz = $_POST['IDAprendiz'];
              $NumeroDeFicha = $_POST['NumeroDeFicha'];
              $Nombre = $_POST['Nombre'];
              $NombresyApellidos = $_POST['NombresyApellidos'];
              $Correo = $_POST['Correo'];
              $Telefono = $_POST['Telefono'];
              $TipoActividad = $_POST['TipoActividad'];
              $Estado = $_POST['Estado'];
              $Pazysalvo = $_POST['Pazysalvo'];
              
              
              
              require_once 'Conexion.php';
        
        
                      $ComandoSql="INSERT INTO `aprendices`(`IDAprendiz`, `Nombre`, `NumeroDeFicha`, `NombresyApellidos`, `Correo`, `Telefono`, `Estado`, `TipoActividad`, `Pazysalvo`) VALUES ('".$IDAprendiz."','".strtoupper($Nombre)."','".$NumeroDeFicha."','".strtoupper($NombresyApellidos)."','".strtoupper($Correo)."','".$Telefono."','".strtoupper($Estado)."','".strtoupper($TipoActividad)."','".strtoupper($Pazysalvo)."');";
                      
                      $resultado = $conexion->query($ComandoSql);
                      
                              if($resultado==true)
                              
                                 {
                              
                                 

                                 }

                              else

                                 {
                                    
                                      echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE REGISTRO EL APRENDIZ !!' ;
                                      echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                                      <span aria-hidden="true">&times;</span>
                                      </a>
                                      </div>';

                                 }
        
      }



else

      {


          if("updateAprendiz" == isset($_POST['NombreProceso5']))

              { 

                        $IDAprendiz = $_POST['IDAprendiz'];
                        $NumeroDeFicha = $_POST['NumeroDeFicha'];
                        $Nombre = $_POST['Nombre'];
                        $NombresyApellidos = $_POST['NombresyApellidos'];
                        $Correo = $_POST['Correo'];
                        $Telefono = $_POST['Telefono'];
                        $TipoActividad = $_POST['TipoActividad'];
                        $Estado = $_POST['Estado'];
                        $Pazysalvo = $_POST['Pazysalvo'];
                      

                        


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

                $ComandoSql="UPDATE `aprendices` SET `Nombre`='".strtoupper($Nombre)."',`NumeroDeFicha`='".$NumeroDeFicha."',`NombresyApellidos`='".strtoupper($NombresyApellidos)."',`Correo`='".strtoupper($Correo)."',`Telefono`='".$Telefono."',`TipoActividad`='".strtoupper($TipoActividad)."',`Estado`='".strtoupper($Estado)."',`Pazysalvo`='".strtoupper($Pazysalvo)."'  WHERE IDAprendiz='".$IDAprendiz."' ";
                
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
                          
                            echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE ACTUALIZO LA INFORMACIÓN DEL APRENDIZ !!' ;
                            echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                            </a>
                            </div>';
                      }
            
              }


          else

              {

                  if(isset($_POST['Proceso'])=="TraerAprendizActualizar")

                      {
                          require_once 'Conexion.php';

                            $conexion = new mysqli($hostname, $username, $password,$database); 

                                if ($conexion -> connect_errno)

                                      {
                                        die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                      }

                                          $IDAprendiz= $_POST['IDAprendiz']; 
                                          
                                          $query="SELECT * FROM `aprendices` WHERE `IDAprendiz`='".$IDAprendiz."'";
                                          //echo "Sentencia: ".$query;
                                          $buscarAprendices=$conexion->query($query);

                                          $Vector= array();
                                          
                                          while($filaProgramas= $buscarAprendices->fetch_array())
                                          
                                              {

                                                  $Vector[]=$filaProgramas;  

                                              }

                                          echo json_encode($Vector);
                          
                      }

              }


      }




?>


