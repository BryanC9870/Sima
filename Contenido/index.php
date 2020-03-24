<!DOCTYPE html>
    <html lang="en">
    
		<?php
		
				// session_start();
		
				// if(isset($_SESSION['Usuario'])&& isset($_SESSION['Contrasena']))

				// 	{
				// 		session_destroy();
				// 	}
		?>
    
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
			<!-- <link rel="icon" type="image/png" href="../Estilos/imagenes/icons/favicon.ico"/>
		<!===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/bootstrap/css/bootstrap.min.css"> -->
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/animate/animate.css"> -->
		<!--===============================================================================================-->	
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/css-hamburgers/hamburgers.min.css"> -->
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/animsition/css/animsition.min.css"> -->
		<!--===============================================================================================-->
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/select2/select2.min.css"> -->
		<!--===============================================================================================-->	
			<!-- <link rel="stylesheet" type="text/css" href="../Estilos/vendor/daterangepicker/daterangepicker.css"> --> 
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../Estilos/cssl/util.css">
			<link rel="stylesheet" type="text/css" href="../Estilos/cssl/main.css">
		<!--===============================================================================================-->
	</head>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form name="ejemplo" action="recibeSesion.php" method="post" target="_self" class="login100-form validate-form">
						
						<span class="login100-form-title p-b-34">
							Login
						</span>
						
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
							<input  id="first-name" class="input100" type="text" name="cajaUsuario" placeholder="Usuario" required="required">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
							<input class="input100" type="password" name="cajaPass" placeholder="Contraseña" min="1" max="10" required="required">
							<span class="focus-input100"></span>
						</div>
						
						<div class="container-login100-form-btn">
							<button name="btnEnviar" value="enviarinformacion" class="login100-form-btn">
								Ingresar
							</button>
						</div>

						<div class="w-full text-center p-t-27 p-b-239">
							<span class="txt1"></span>
						</div> 
					</form>

						<div class="login100-more" style= "width: 500px; height: 750px;">
							
								<img src="../Estilos/imagenes/a.jpg" style="width: 500px; height: 750px;"/>
						
						</div>
						
				</div>
			</div>
		</div>
		
		<!-- <div id="dropDownSelect1"></div> -->
			
		<!--===============================================================================================-->
			<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
		<!--===============================================================================================-->
			<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
		<!--===============================================================================================-->
			<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
			<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
		<!--===============================================================================================-->
			<!-- <script src="vendor/select2/select2.min.js"></script>
			<script>
			
			</script> -->
		<!--===============================================================================================-->
			<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
			<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
		<!--===============================================================================================-->
			<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
		<!--===============================================================================================-->
			<!-- <script src="js/main.js"></script> -->

	</body>
    </html>