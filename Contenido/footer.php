   <footer style="background-color: #3fbbc0;">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>SIMA - SISTEMA DE INFORMACIÓN DE MONITORIAS Y APOYOS</h5>
                            <p>
                            ES UNA HERRAMIENTA CAPAZ DE ADMINISTRAR LA INFORMACIÓN DEL INFORME DE ACTIVIDADES DE LOS PROGRAMAS DE APOYOS SOCIOECONÓMICOS DEL CISM.  
                            </p>
                        </div>
                    </div>

                      <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>DESCARGAR DOCUMENTO DE AYUDA</h5>
                                <ul>
                                    <?php
                                        if($_SESSION['Rol']=="ADMIN")

                                            {
                                                ?>
                                                    <a href="javascript:window.open('../Contenido/pdf/DOCUMENTODEAYUDA.pdf','mywindowtitle','width=500,height=150')"><img src="../Estilos/imagenes/IconoD.png"></a>
                                                <?php
                                            }
                                    ?>

                                    <?php
                                        if($_SESSION['Rol']=="ENTE")

                                            {
                                                ?>
                                                    <a href="javascript:window.open('../Contenido/pdf/DOCUMENTOAYUDA.pdf','mywindowtitle','width=500,height=150')"><img src="../Estilos/imagenes/IconoD.png"></a>
                                                <?php
                                            }
                                    ?>

                                    <?php
                                        if($_SESSION['Rol']=="APRENDIZ")

                                            {
                                                ?>
                                                    <a href="javascript:window.open('../Contenido/pdf/DOCUMENTODEAYUDAAPRENDIZ.pdf','mywindowtitle','width=500,height=150')"><img src="../Estilos/imagenes/IconoD.png"></a>
                                                <?php
                                            }
                                    ?>
                                </ul>
                        </div>
                      </div>
                  </div>

                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                      <div class="widget">
                          <h5>DESARROLLADO POR</h5>
                              <p>- BRAYAN CORTES <br>-ANDRES PRIETO <br>-JHONATAN MINA</p>
                                  <ul>
                                      <li>
                                          <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                          </span> Monday - Saturday, 8am to 10pm
                                      </li>
                                      <li>
                                          <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                          </span> +62 0888 904 711
                                      </li>
                                      <li>
                                          <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                          </span> sima-sena@misena.edu.co.com
                                      </li>
                                  </ul>
                          </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Nuestra localización</h5>
                            <p>Kilómetro 1 vía Acacias, Villavicencio Meta </p>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Síguenos</h5>
                                <ul class="company-social">
                                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                        </div>
                    </div>
                </div>

             </div>
          </div>

          <div class="sub-footer">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-md-6 col-lg-6">
                          <div class="wow fadeInLeft" data-wow-delay="0.1s">
                             <div class="text-left">
                                  <p>&copy;Copyright - SIMA - SENA. Todos los derechos reservados.</p>
                             </div>
                          </div>
                      </div>

                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="text-right">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact. 
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                                -->
                              </div>
                           </div>
                        </div>
                     </div>
                 </div>
              </div>
          </div>
    </footer>