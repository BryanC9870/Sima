<?php 

   require_once '../../Contenido/conexionValidarBusqueda.php';

        function search()

        {
                $s="Hola";
                $_POST['CajaNombre']=$s;
                $mysqli = getConnexion();
                $search = $mysqli->real_escape_string($_POST['search']);
                $s=$mysqli->real_escape_string('CajaNombre');
                $query = "SELECT * FROM aprendices WHERE IDAprendiz='".$search."'";
                $res = $mysqli->query($query);
                $si=0;
                while ($row = $res->fetch_array(MYSQLI_ASSOC)) 
                
                    {
                        
                            $si=$si++;     
                            
                            if($si>0)

                                {
                                    ?>

                                    <script>
                                            swal("Alerta!", "El aprendiz ya existe en la base de datos!", "warning");
                                            $('input[type="number"]').val('');
                                    </script>
                                
                                <?php
                                }

                            else

                                {
                                    

                                   
                                }
                        

                        
                    }

        }

        search();
?>

        
      