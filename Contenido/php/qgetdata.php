<?php

    require_once 'Conexion.php';
      
        $ComandoSql2 = "SELECT COUNT(IDAprendiz) as cantidad, jornada FROM aprendices, ficha WHERE aprendices.NumeroDeFicha = ficha.NumeroDeFicha AND aprendices.Estado='ACTIVO' GROUP by ficha.Jornada";

        $dt = array();

        if ($resultado = $conexion->query($ComandoSql2)) 

            {
                
                while($bs = $resultado->fetch_array())
                
                    {
                        $dt[]  = $bs ;
                    }

                echo json_encode($dt);

            }

?>