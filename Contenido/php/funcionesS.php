<?php

if("RegistrarSupervisor" == isset($_POST['NombreProceso']))

    {

        $IDSupervisor = $_POST['IDSupervisor'];
        $NombresyApellidos = $_POST['NombresyApellidos'];
        $AreaAsignada = $_POST['AreaAsignada'];
        $Correo = $_POST['Correo'];
        $Estado = $_POST['Estado'];
        $Telefono = $_POST['Telefono'];
        $Ip = $_POST['Ip'];
        $Contrasena = $_POST['Contrasena'];
        $Rol = $_POST['Rol'];

        @$passs=sha1($_POST['Contrasena']);

        require_once 'Conexion.php';


        $ComandoSql="INSERT INTO `supervisores`(`IDSupervisor`,`NombresyApellidos`,`AreaAsignada`,`Correo`,`Estado`,`Telefono`,`Ip`) VALUES ('".$IDSupervisor."','".strtoupper($NombresyApellidos)."','".strtoupper($AreaAsignada)."','".strtoupper($Correo)."','".strtoupper($Estado)."','".$Telefono."' ,'".$Ip."');";
        $resultado = $conexion->query($ComandoSql);

        $ComandoSql1="INSERT INTO `usuarios`(`Usuario`, `NombreUsuario`, `ApellidoUsuario`, `Contrasena`, `Rol`, `Estado`) VALUES ('".$IDSupervisor."','".strtoupper($NombresyApellidos)."','','".$passs."','".strtoupper($Rol)."','".strtoupper($Estado)."');";
        $resultado1 = $conexion->query($ComandoSql1);

        if( ($resultado && $resultado1)  ==true)

            {

               

            }

        else
        
            {
                
                echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE REGISTRO EL SUPERVISOR !!' ;
                echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                <span aria-hidden="true">&times;</span>
                </a>
                </div>';

            }

    }



else

    {


    if("updateSupervisores" == isset($_POST['NombreProceso6']))
    
       {

            $IDSupervisor = $_POST['IDSupervisor'];
            $NombresyApellidos = $_POST['NombresyApellidos'];
            $AreaAsignada = $_POST['AreaAsignada'];
            $Correo = $_POST['Correo'];
            $Estado = $_POST['Estado'];
            $Telefono = $_POST['Telefono'];
            $Ip = $_POST['Ip'];
            $Contrasena = $_POST['Contrasena'];
            $Rol = $_POST['Rol'];

            @$passs=sha1($_POST['Contrasena']);

            // echo "IDSupervisor".$IDSupervisor;
            // echo "NombresyApellidos".$NombresyApellidos;
            // echo "AreaAsignada".$AreaAsignada;
            // echo "Correo".$Correo;
            // echo "Estado".$Estado;
            // echo "Telefono".$Telefono;
            // echo "Ip".$Ip;
            // echo "Contrasena".$Contrasena;
            // echo "Rol".$Rol;

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
            $ComandoSql="UPDATE `supervisores` SET `NombresyApellidos`='".strtoupper($NombresyApellidos)."',`AreaAsignada`='".strtoupper($AreaAsignada)."',`Correo`='".strtoupper($Correo)."',`Estado`='".strtoupper($Estado)."',`Telefono`='".$Telefono."' ,`Ip`='".$Ip."'  WHERE IDSupervisor='".$IDSupervisor."' ";
            $resultado = $conexion->query($ComandoSql);

            $ComandoSql1="UPDATE `usuarios` SET `NombreUsuario`='".strtoupper($NombresyApellidos)."',`ApellidoUsuario`='',`Contrasena`='".$passs."',`Rol`='".strtoupper($Rol)."',`Estado`='".strtoupper($Estado)."' WHERE Usuario='".$IDSupervisor."' ";
            $resultado1 = $conexion->query($ComandoSql1);

            if ( ($resultado && $resultado1) ==true)

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
                    
                    echo '<br><div class="alert alert-danger" role="alert" id="Resultado">¡NO SE ACTUALIZO LA INFORMACIÓN DEL SUPERVISOR !!' ;
                    echo '<a class="close" data-dismiss="alert" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                    </a>
                    </div>';

                }
           
       }


    else

        {



            if($_POST['Proceso']=="TraerSupervisor")
            
                {

                    require_once 'Conexion.php';

                        $conexion = new mysqli($hostname, $username, $password,$database); 

                              if ($conexion -> connect_errno)

                                  {
                                      die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
                                  }

                                        $IDSupervisor= $_POST['IDSupervisor'];
                                      
                                        $query="SELECT * FROM `supervisores` WHERE `IDSupervisor`='".$IDSupervisor."'";
                                        //echo "Sentencia: ".$query;
                                        $buscarSupervisores=$conexion->query($query);
                                        $Vector= array();
                                        
                                        while($filaSupervisores= $buscarSupervisores->fetch_array())

                                            {
                                              
                                              $Vector[]=$filaSupervisores;  

                                            }

                                        echo json_encode($Vector);
                }

        }

    }

?>


