
<html lang="en">

    <?php

        session_start();

            if(isset($_SESSION['Usuario'])&& isset($_SESSION['Contrasena'])&& isset ($_SESSION ['Rol']))

                {
                    echo "Bienvenido ".$_SESSION['Usuario'];
                    echo'<br>';
                    echo'Rol :'  .$_SESSION ['Rol']; 
                }
            
                else

                    {
                        header('location:index.php');
                    }

    ?>
    
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="../Estilos/imagenes/apoyo.png"/>

      <title>MENU | SIMA</title>

      <!-- css de la plantilla -->
      <link href="../Estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="../Estilos/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="../Estilos/css/nivo-lightbox.css" rel="stylesheet" />
      <link href="../Estilos/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
      <link href="../Estilos/css/owl.carousel.css" rel="stylesheet" media="screen" />
      <link href="../Estilos/css/owl.theme.css" rel="stylesheet" media="screen" />
      <link href="../Estilos/css/animate.css" rel="stylesheet">
      <link href="../Estilos/css/style.css" rel="stylesheet">
      <link href="../Estilos/color/default.css" rel="stylesheet">
  
      <link rel="stylesheet" type="text/css" media="screen" href="../Estilos/css/bootstrap.min.css">
      <link rel="stylesheet" href="../Estilos/css/font-awesome.min.css">
      <link href="../Estilos/css/bootstrap-datetimepicker.css" rel="stylesheet">
      <!-- llamado a las diferentes librerias js -->

      <?php

          require_once ('../contenido/librerias.php');
      
      ?>
 
      <!-- estilos para tablas y opciones de exportacion -->

      <link href="../Estilos/css/jquery.dataTables.min.css" rel="stylesheet">  
      <link href="../Estilos/css/buttons.dataTables.min.css" rel="stylesheet">  
      <link href="../Estilos/css/datatables.min.css" rel="stylesheet">
      <link href="../Estilos/css/dataTables.bootstrap.min.css" rel="stylesheet"> 
      <link href="../Estilos/css/sweetalert.css" rel="stylesheet"> 

      <!-- estilos para tablas y opciones de exportacion -->

      <!-- =======================================================
         Theme Name: SIMA
      ======================================================= -->

      <?php

        require_once 'Conexion.php';
        require_once '../../../datosConexion.php';
            
        @$userTraido=$_POST['cajaUsuario'];
        @$passTraido=$_POST['cajaPass'];
    
        /* $conexion = new mysqli("localhost", "root", "","adsi");  */
        $conexion = new mysqli($hostname, $username, $password,$database);     
            
              if ($conexion->connect_errno)
          
                {
            
                    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ")<br>" . $conexion->connect_error;
                    exit();
                
                }
            
        $comandoSql="select Contrasena from usuarios where NombreUsuario='".$userTraido."'";
             
         /*$resultado=$conexion->query($comandoSql);*/
    
              $resultado = $conexion->query($comandoSql); 
          
                {
            
                  /* obtener el array de objetos */
                  $fila = $resultado->fetch_row();
                         
                }
                         
        $sql2="select IDSupervisor, NombresyApellidos, AreaAsignada from supervisores where IDSupervisor = '".$_SESSION['Usuario']."' "; 

        $supervisores=$conexion->query($sql2);  

        //---------------------------------------------------
        /**** AHORA SE COMPARARA SI EL USUARIO Y LA CONTRASEÑA COINCIDEN ****/    
        /*****COMO ES UN UNICO REGISTRO, NO SE CREARA VARIABLE ADICIONAL ****/    
            
          if(strcmp($passTraido,$fila[0])==0)
    
            {
                
                ?>
                                    
                    
                <?php
                
            }
    
          else
          
            {

                echo "<br> EL USUARIO O CONTRASEÑA NO ES CORRECTO";
          
            }
        
       ?>


   </head>
        <!--Inicio del BODY -->
        <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
            <div id="wrapper">

                    <?php
                            
                            //  <!--llamado al menu principal -->
                            include('MenuPrincipal.php');

                    ?>
                        
                    <br>
                    <br>
                    <br>
                    <br>
                    <!--aqui se muestra el contenido de los diferentes menus -->
                    <div id="Contenedor" class="home-section bg-white paddingbot-60">
                    </div>
                    <!--aqui se muestra el contenido de los diferentes menus -->
                    <br>
                    <br>
                    <br>
                    <br>

                    <?php 

                        //  <!--llamado al pie de pagina -->
                        include('footer.php');

                    ?>
  
           </div>

      <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a> 

      <script src="js/wow.min.js"></script>
      <script src="js/stellar.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/nivo-lightbox.min.js"></script>
      <script src="../js/funciones.js"></script>
      <script src="../js/Peticiones.js"></script>

      </body>
      <!--Fin del BODY -->
</html>
