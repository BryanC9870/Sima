  
<!DOCTYPE html>
<html>
     <head>
         <meta http-equiv="content-type" content="text/html; charset=UTF-8">
         <title>RECIBE LA INFORMACION</title>
         <meta name="author" content="">
     </head>
         <script src="js/sweetalert.js"></script>
         <script src="js/sweetalert.min.js"></script>
         <link rel="stylesheet" type="text/css" href="../Estilos/css/sweetalert.css">

  <body>
        <p>

    <?php

      require_once '../../../datosConexion.php';
        
      $userTraido= strtoupper($_POST['cajaUsuario']);
      $passTraido=$_POST['cajaPass'];
        
      //ENCRIPTACION SHA1
      $passs=sha1($passTraido);    
        //echo $passs;
      // echo "Informacion traida User: ".$userTraido.", Pass->".$passTraido."<br>";
      /* $conexion = new mysqli("localhost", "root", "","adsi");  */
      $conexion = new mysqli($hostname, $username, $password,$database);     
        
      if ($conexion->connect_errno) 

          {
              echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ")<br>" . $conexion->connect_error;
              exit();
          }
        
       
      $comandoSql="select * from usuarios where Usuario='".$userTraido."' AND Estado='ACTIVO'";
         
     /*$resultado=$conexion->query($comandoSql);*/

      $resultado = $conexion->query($comandoSql);

          {
              /* obtener el array de objetos */
              $fila = $resultado->fetch_row();
            //     echo "<pre>";
            //   echo var_dump($fila);
            //   echo "</pre>";

            
          }
        
      /**** AHORA SE COMPARARA SI EL USUARIO Y LA CONTRASEÑA COINCIDEN ****/    
      /******** COMO ES UN UNICO REGISTRO, NO SE CREARA VARIABLE ADICIONAL ****/    
        
    //   if(strcmp($passs,$fila[3])==0)
          if($fila[0] == $userTraido && $fila[3] == $passs)

          
        {

        echo "<br> EL USUARIO Y LA CONTRASEÑA ES CORRECTO";  
                session_destroy();
                session_start();

                $_SESSION ['Usuario']=$fila[0];
                $_SESSION ['NombreUsuario']=$fila[1];
                $_SESSION ['Contrasena']=$fila[2];
                $_SESSION ['Rol']=$fila[4];

                $Usuario = $_SESSION ['Usuario'];
                $nombres = $_SESSION ['NombreUsuario'];

              ?>
              <script>
                getRealIP();
                </script>
                <?php

                if($Usuario=="APRENDIZ")
                
                {

                    $resultado3 = $conexion->query("CALL actualizarFichas()");

                    {
                        
                    }

                    $resultado5 = $conexion->query("CALL actualizarAprendices()");

                    {
                        
                    }

                    header('location:recibirInformacion.php');

                }
                
                else
                
                {

                    $ComandoSql="INSERT INTO `registrologins`(`Usuario`, `NombresyApellidos`, `Ip`, `HoraDeIngreso`) VALUES ('".$Usuario."','".$nombres."','".$_SERVER["REMOTE_ADDR"]."', NOW());";
                    
                    $resultado5 = $conexion->query($ComandoSql);
    
                        if($resultado5==true)
    
                              {
    
                                 
                              }
                
                    
    
                    $resultado3 = $conexion->query("CALL actualizarFichas()");
    
                        {
                            
                        }
    
                    $resultado5 = $conexion->query("CALL actualizarAprendices()");
    
                        {
                            
                        }
    
                    header('location:recibirInformacion.php');
                }

               

        }

      else

        {
            //session_destroy();
            ?>

                <script>
                        swal({ 
                                
                                title: "Error",   
                                text: "Usuario o contraseña incorrectos!",   
                                type: "error",     
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "¡OK!",    
                                closeOnConfirm: false}, 
                            
                                function(isConfirm)

                                {   
                                        if (isConfirm) 

                                        {    
                                    
                                                window.location.href = "index.php";  
                                                
                                        }

                                });
                </script>

            <?php
        }
            
        /*** ***/

    ?>
      
             <br>
         </p>
    </body>
</html>

<script>

  function getRealIP()
                {
                
                    if (isset($_SERVER["HTTP_CLIENT_IP"]))
                    {
                        return $_SERVER["HTTP_CLIENT_IP"];
                    }
                    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
                    {
                        return $_SERVER["HTTP_X_FORWARDED_FOR"];
                    }
                    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
                    {
                        return $_SERVER["HTTP_X_FORWARDED"];
                    }
                    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
                    {
                        return $_SERVER["HTTP_FORWARDED_FOR"];
                    }
                    elseif (isset($_SERVER["HTTP_FORWARDED"]))
                    {
                        return $_SERVER["HTTP_FORWARDED"];
                    }
                    else
                    {
                         return $_SERVER["REMOTE_ADDR"];
                          
                    }

                    
                
                
                }

                </script>