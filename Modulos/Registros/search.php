<?php 

require_once '../../Contenido/conexionValidarBusqueda.php';


  $buscar = $_POST['b'];
        
  if(!empty($buscar)) {
        buscar($buscar);
  }
    
  function buscar($b) {

        require_once '../Conexion.php';
    
        $sql ="SELECT DISTINCT IDAprendiz, NombresyApellidos FROM aprendices WHERE 
        NombresyApellidos LIKE '%".strtoupper($b)."%' AND aprendices.estado = 'ACTIVO'";

        $aprendices=$conexion->query($sql);
        while ($fila= $aprendices->fetch_array()) 
        {                                         
        {             
            echo '<option value='.$fila['IDAprendiz'].'>'.$fila['IDAprendiz'].' - '.$fila['NombresyApellidos'].'</option>';
        }
  }
}   
      