<?php

	$tipo = $_FILES['archivo']['type'];
	$tamanio = $_FILES['archivo']['size'];
	$archivotmp = $_FILES['archivo']['tmp_name'];
	$respuesta = new stdClass();
	
			if( $tipo == 'application/vnd.ms-excel')
			
				{
					
					$archivo = "Aprendices.csv";
				
					if(move_uploaded_file($archivotmp, $archivo) )
					
						{
							$respuesta->estado = true;		
						} 
					
					else 
					
						{
							$respuesta->estado = false;
							$respuesta->mensaje = "El archivo no se pudo subir al servidor, intentalo mas tarde";
						}
				
					if($respuesta->estado)
					
						{
						
							$lineas = file('Aprendices.csv');

							$respuesta->mensaje = "";
							$respuesta->estado = true;
							$conexion = new mysqli('localhost','root','','sima',3306);

							foreach ($lineas as $linea_num => $linea)

								{
										$datos = explode(";",$linea);
										$IDAprendiz	 = trim($datos[0]);
										$Nombre = trim($datos[1]);
										$NumeroDeFicha = trim($datos[2]);
										$NombresyApellidos = trim($datos[3]);
										$Correo = trim($datos[4]);
										$Telefono = trim($datos[5]);
										$Estado = trim($datos[6]);
										$TipoActividad = trim($datos[7]);
										$Pazysalvo = trim($datos[8]);
									
										if($datos=="" || $IDAprendiz=="" || $Nombre=="" || $NumeroDeFicha=="" || $NombresyApellidos=="" || $Correo=="" || $Telefono=="" || $Estado=="" || $TipoActividad=="" || $Pazysalvo=="")
											
											{
												$respuesta->estado = false;
												$respuesta->mensaje = "El archivo contiene campos vacíos.";
											}

										else
										
											{

									
												$consulta = "INSERT INTO aprendices(IDAprendiz,Nombre, NumeroDeFicha,NombresyApellidos,Correo,Telefono,Estado,TipoActividad,Pazysalvo) VALUES('$IDAprendiz','".strtoupper($Nombre)."','$NumeroDeFicha','".strtoupper($NombresyApellidos)."','".strtoupper($Correo)."','$Telefono','".strtoupper($Estado)."','".strtoupper($TipoActividad)."','".strtoupper($Pazysalvo)."');";			
												
													if(!$conexion->query($consulta))

														{			
															$respuesta->estado = false;
															$respuesta->mensaje .= "El aprendiz $Cedula $Nombres $Apellidos no se guardo, verifica la información \n"; 				
														}

															if($respuesta->estado == true)
															
															$respuesta->mensaje = "Todos los registros se guardaron correctamente\n";
										
											}

								}
						}
				
				}

	else 
	
		{
			$respuesta->mensaje = "Solo se admiten archivos .csv, vuelvelo a intentar\n";
		}

		echo json_encode($respuesta);
	
?>