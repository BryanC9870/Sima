<?php

        require_once 'Conexion.php';

            $resultado7 = $conexion->query("CALL InactivarAprendices()");

                {
                        
                }

?>

        <script>
        
        swal("Alerta!", "La acción fue completada!", "success");

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
