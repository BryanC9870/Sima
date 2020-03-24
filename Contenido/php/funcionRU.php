<?php

if("DeleteRegistro" == isset($_POST['NombreProceso20']))

            {

                    require_once 'Conexion.php';
                        
                            $IDRegistro = $_POST['IDRegistro'];
                            

                                                   $ComandoSql="DELETE FROM `registros` WHERE IDRegistro='".$IDRegistro."'";
                                                   $resultado = $conexion->query($ComandoSql);

                                                       ?>

                                                            <script>
                                                               swal("Alerta!", "El registro fue eliminado!", "success");
                                                            </script>
                                                                              
                                    
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

            if("UpdateRegistroEnte" == isset($_POST['NombreProceso25']))
            
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



      }

  

          

                            
                              
                        
          
      ?>