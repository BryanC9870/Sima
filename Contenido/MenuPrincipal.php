
<!-- INICIO DEL MENÚ -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

    <div class="top-area">
         <div class="container">
            <div class="row">
                <?php
                
                ?><img src="../Estilos/imagenes/Login.png" > <?php echo "BIENVENIDO: " .$_SESSION ['NombreUsuario'];  echo'&nbsp;';  echo'&nbsp;';
                    echo'ROL: '  . $_SESSION ['Rol'];
                    
                ?>
            </div>
         </div>
    </div>

    <div class="container navigation">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
              <img src="../Estilos/imagenes/icono.png" alt="" width="150" height="40" />
            </a>
        </div>

      
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="recibirInformacion.php">INICIO</a></li>
               
                <?php
                        if($_SESSION['Rol']=="ADMIN")

                            {
                                echo'
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>INSTRUCTORES <b class="caret"></b></a>
                                        <ul class="dropdown-menu">

                                            <li><a href="#" onclick="llamarForms(1);" >Ingresar Instructores</a></li>
                                            <li><a href="#"  onclick="llamarForms(2);">Buscar / Actualizar Instructores</a></li>
                                            
                                        </ul>
                                </li>
                                ';

                                echo'
                                <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>PROGRAMAS <b class="caret"></b></a>
                                        <ul class="dropdown-menu">

                                            <li><a href="#" onclick="llamarForms(4);">Ingresar Programas</a></li>
                                            <li><a href="#" onclick="llamarForms(5);">Buscar / Actualizar Programas </a></li>

                                        </ul>
                                </li>
                                ';

                                echo'
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>FICHAS <b class="caret"></b></a>
                                       <ul class="dropdown-menu">
                    
                                            <li><a href=" #" onclick="llamarForms(7);">Ingresar Fichas</a></li>
                                            <li><a href="#" onclick="llamarForms(8);">Buscar / Actualizar Fichas  </a></li>
                    
                                       </ul>
                                </li>
                                ';

                                echo'
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>APRENDICES <b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                            <li><a href="#" onclick="llamarForms(10);">Ingresar Aprendices</a></li>
                                            <li><a href="#" onclick="llamarForms(11);">Buscar / Actualizar Aprendices</a></li>

                                    </ul>
                                </li>
                                ';

                                echo'
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>SUPERVISORES <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" onclick="llamarForms(13);">Ingresar Supervisores</a></li>
                                        <li><a href="#" onclick="llamarForms(14);">Buscar / Actualizar Supervisores</a></li>
                                    </ul>
                                </li>
                                ';

                                echo'
                                <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>REGISTROS <b class="caret"></b></a>
                                         <ul class="dropdown-menu">
                       
                                                <li><a href="#" onclick="llamarForms(15);">Ingresar Registros</a></li>
                                                <li><a href="#" onclick="llamarForms(16);">Buscar / Actualizar Registros</a></li>
                       
                                         </ul>
                                 </li>
                                 ';

                                 echo'
                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>REPORTES <b class="caret"></b></a>
                                         <ul class="dropdown-menu">
                         
                                                <li><a href="#" onclick="llamarForms(20);">Consolidado De Las Actividades </a></li>
                                                <li><a href="#" onclick="llamarForms(21);">Aprendices sin Registros </a></li>
                                                <li><a href="#" onclick="llamarForms(22);">Registro de Ingresos</a></li>
                                                <li><a href="#" onclick="llamarForms(19);">Aprendices Por Jornada</a></li>
                         
                                         </ul>
                                 </li>
                                 ';

                            }

                        if($_SESSION['Rol']=="ENTE")

                            {
                                        echo'
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>INSTRUCTORES <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                        
                                                <li><a href="#" onclick="llamarForms(1);" >Ingresar Instructores</a></li>
                                                <li><a href="#" onclick="llamarForms(3);" >Buscar  </a></li>
                                                
                                            </ul>
                                        </li>
                                        ';

                                        echo'
                                        <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>PROGRAMAS <b class="caret"></b></a>
                                                <ul class="dropdown-menu">

                                                    <li><a href="#" onclick="llamarForms(4);">Ingresar Programas</a></li>
                                                    <li><a href="#" onclick="llamarForms(6);">Buscar </a></li>

                                                </ul>
                                        </li>
                                        ';

                                        echo'
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>FICHAS <b class="caret"></b></a>
                                               <ul class="dropdown-menu">
                            
                                                    <li><a href=" #" onclick="llamarForms(7);">Ingresar Fichas</a></li>
                                                    <li><a href="#" onclick="llamarForms(9);">Buscar </a></li>
                            
                                               </ul>
                                        </li>
                                        ';

                                        echo'
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>APRENDICES <b class="caret"></b></a>
                                            <ul class="dropdown-menu">

                                                    <li><a href="#" onclick="llamarForms(10);">Ingresar Aprendices</a></li>
                                                    <li><a href="#" onclick="llamarForms(12);">Buscar </a></li>
                                            </ul>
                                        </li>
                                        ';

                                        echo'
                                        <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>REGISTROS <b class="caret"></b></a>
                                                 <ul class="dropdown-menu">
                               
                                                        <li><a href="#" onclick="llamarForms(17);">Ingresar Registros</a></li>
                                                        <li><a href="#" onclick="llamarForms(18);">Buscar / Actualizar Registros</a></li>
                               
                                                 </ul>
                                         </li>
                                         ';

                                         echo'
                                         <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>REPORTES <b class="caret"></b></a>
                                                 <ul class="dropdown-menu">
                                 
                                                        <li><a href="#" onclick="llamarForms(20);">Consolidado De Las Actividades </a></li>
                                 
                                                 </ul>
                                         </li>
                                         ';
                            
                            }

                            if($_SESSION['Rol']=="APRENDIZ")

                            {

                                        echo'
                                         <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>REPORTES <b class="caret"></b></a>
                                                 <ul class="dropdown-menu">
                                 
                                                        <li><a href="#" onclick="llamarForms(23);">Consolidado De Las Actividades </a></li>
                                                        <li><a href="#" onclick="llamarForms(24);">Registros individuales </a></li>
                                 
                                                 </ul>
                                         </li>
                                         ';
                                         

                            }

            
                    ?>
  
                       <li class="active"> <a href="#"onclick="verificarsalida()" ><img width="40 px" src="../Estilos/imagenes/exit.png" ></a></li>
                  </ul>
             </div>
         </div>
    </nav>

    <!-- FIN DEL MENÚ -->

    <script src="../js/llamadoforms.js"></script>