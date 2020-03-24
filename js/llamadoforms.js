function llamarForms(trae)

    {

            switch(trae)
            
              {
                
                  case 1:

                    ruta="../Modulos/Instructores/formularioingresarInstructores.php"
                    TraerFormularios(ruta);

                  break;
                  
                  case 2:

                  ruta="../Modulos/Instructores/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);
                  
                  break;

                  case 3:


                  ruta="../Modulos/Instructores/MostrarInstructoresEnte.php"
                  TraerFormularios(ruta);


                  break;


                  case 4:


                  ruta="../Modulos/Programas/formularioIngresarPrograma.php"
                  TraerFormularios(ruta);


                  break;

                  case 5:


                  ruta="../Modulos/Programas/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);


                  break;


                  case 6:

                  ruta="../Modulos/Programas/MostrarProgramasEnte.php"
                  TraerFormularios(ruta);

                  break;


                  case 7:

                  ruta="../Modulos/Fichas/formularioIngresarFicha.php"
                  TraerFormularios(ruta);


                  break;
                  

                  case 8:


                  ruta="../Modulos/Fichas/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);

                  break;


                  case 9:

                  ruta="../Modulos/Fichas/MostrarFichasEnte.php"
                  TraerFormularios(ruta);

                  break;


                  case 10:


                  ruta="../Modulos/Aprendices/formularioIngresarAprendiz.php"
                  TraerFormularios(ruta);


                  break;

                  case 11:


                  ruta="../Modulos/Aprendices/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);


                  break;


                  case 12:


                  ruta="../Modulos/Aprendices/MostrarAprendicesEnte.php"
                  TraerFormularios(ruta);


                  break;


                  case 13:

                  ruta="../Modulos/Supervisores/formularioingresarsupervisores.php"
                  TraerFormularios(ruta);


                  break;

                  case 14:

                  ruta="../Modulos/Supervisores/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);


                  break;

                  case 15:

                  ruta="../Modulos/Registros/formularioIngresarRegistros.php";
                  TraerFormularios(ruta);


                  break;

                  case 16:

                  ruta="../Modulos/Registros/ContieneMostrarYActualizar.php"
                  TraerFormularios(ruta);


                  break;

                  case 17:

                  ruta="../Modulos/Registros/formularioIngresarRegistrosEnte.php"
                  TraerFormularios(ruta);


                  break;



                  case 18:

                  ruta="../Modulos/Registros/ContieneMostrarYActualizarEnte.php"
                  TraerFormularios(ruta);


                  break;


                  case 19:

                  ruta="../Modulos/Reportes/AprendicesPorJornada.php"
                  TraerFormularios(ruta);


                  break;

                  case 20:

                  ruta="../Modulos/Reportes/ContieneReportes.php"
                  TraerFormularios(ruta);


                  break;

                  case 21:

                  ruta="../Modulos/Reportes/ContieneReportes2.php"
                  TraerFormularios(ruta);


                  break;

                  case 22:

                  ruta="../Modulos/Reportes/RegistroDeIngresos.php"
                  TraerFormularios(ruta);


                  break;

                  case 23:

                  ruta="../Modulos/Reportes/ContieneReportes3.php"
                  TraerFormularios(ruta);

                  break;

                  case 24:

                  ruta="../Modulos/Reportes/ContieneReportes4.php"
                  TraerFormularios(ruta);

                  break;

              }
            


    }


    function TraerFormularios(ruta)

        {
           var Parametros="";

                $.ajax({

                      type: 'POST',
                      url: ruta,

                      beforeSend: function()
                    
                        {
                          $('#Contenedor').html('Espere por favor...');
                        },

                              success: function(response)

                              {
                                $('#Contenedor').html(response);
                              }

                });
        } 
