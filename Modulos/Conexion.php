
<?php
 
        require_once '../../../../datosConexion.php';

                $conexion = new mysqli($hostname, $username, $password,$database);     
                            
                        if ($conexion->connect_errno)

                            {

                                echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ")<br>" . $conexion->connect_error;
                                exit();

                            }

 ?>