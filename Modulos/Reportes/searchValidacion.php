
<?php 

require_once '../../Contenido/conexionValidarBusqueda.php';

function search()

    {
        
            $mysqli = getConnexion();
            $search = $mysqli->real_escape_string($_POST['search']);
            $query = "SELECT * FROM aprendices WHERE IDAprendiz='".$search."' AND Estado='ACTIVO'";
            $res = $mysqli->query($query);
            $si=0;
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) 
            
                {
                    
                    $si=1;
                    
                }

                if($si==0)
                
                    {
                        
                        ?>

                            <script>
                                swal("Alerta!", "El aprendiz no esta registrado en la base de datos o esta inactivo!", "warning");
                                $('input[type="number"]').val('');
                            </script>
                            
                        <?php
                        
                    }
        
    }
    search();
?>



  