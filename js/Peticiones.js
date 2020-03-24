
function obtener_registros(programas)

    {
            $.ajax({
                url : 'consulta.php',
                type : 'POST',
                dataType : 'html',
                data : { programas: programas },
                })

            .done(function(resultado){
                $("#tabla_resultado").html(resultado);
            })
    }

    $(document).on('keyup', '#busqueda', function()

        {
            var valorBusqueda=$(this).val();
            if (valorBusqueda!="")
                {
                    obtener_registros(valorBusqueda);
                }
            else
                {
                    obtener_registros();
                }
        });


function TraerInstructorActualizar(IdInstructor)

    {  

        var InstructorTraer = IdInstructor;
        
        var Proceso="TraerInstructorActualizar";
        var Parametros={"Proceso":Proceso,"IdInstructor":InstructorTraer};

        $.ajax({

                data: Parametros,
                type: 'POST',
                url: '../Contenido/php/funciones.php',
                beforeSend: function(){
                // $('#FormularioUpdate').html('Espere por favor...');
                },
                success: function(response)
                {
                            
                            var Datos = JSON.parse(response);	
                        

                            document.getElementById("IdInstructor").value = Datos[0].IDInstructor;
                            document.getElementById("NombresInstructor").value = Datos[0].NombresyApellidos;
                            document.getElementById("CorreoInstructor").value = Datos[0].Correo;
                            document.getElementById("EstadoInstructor").value = Datos[0].Estado;
                            document.getElementById("TelefonoInstructor").value = Datos[0].Telefono;
                }

            });
    } 


function TraerProgramaActualizar(IDPrograma)

    {  

        var ProgramaTraer = IDPrograma;
        var Proceso="TraerProgramaActualizar";
        var Parametros={"Proceso":Proceso,"IDPrograma":ProgramaTraer};

        $.ajax({

                data: Parametros,
                type: 'POST',
                url: '../Contenido/php/funcionesP.php',
                beforeSend: function(){
                // $('#FormularioUpdate').html('Espere por favor...');
                },
                success: function(response)
                    {		  		
                                var Datos = JSON.parse(response);			
                                document.getElementById("CajaNumero1").value = Datos[0].IDPrograma;
                                document.getElementById("CajaNumero2").value = Datos[0].IDInstructor;			
                                document.getElementById("CajaNumero3").value = Datos[0].Nombre;
                                document.getElementById("CajaNumero4").value = Datos[0].Estado;
                                document.getElementById("CajaNumero5").value = Datos[0].NivelFormacion;
                    }

            });

    } 



function TraerFichasctualizar(NumeroDeFicha)

    { 

        var FichaTraer = NumeroDeFicha;
        
        var Proceso="TraerFichasctualizar";
        var Parametros={"Proceso":Proceso,"NumeroDeFicha":FichaTraer};

        $.ajax({

                data: Parametros,
                type: 'POST',
                url: '../Contenido/php/funcionesF.php',
                beforeSend: function(){
                // $('#FormularioUpdate').html('Espere por favor...');
                },
                success: function(response)
                    {
                                
                                var Datos = JSON.parse(response);	
                            

                                document.getElementById("CajaNumero1").value = Datos[0].NumeroDeFicha;
                                document.getElementById("CajaNumero2").value = Datos[0].Nombre;
                                document.getElementById("CajaNumero3").value = Datos[0].Jornada;
                                document.getElementById("CajaNumero4").value = Datos[0].FechaInicio;
                                document.getElementById("CajaNumero5").value = Datos[0].FechaFinalizacion;
                                document.getElementById("CajaNumero6").value = Datos[0].Estado;
                    }
            });
    } 





function TraerAprendizActualizar(IDAprendiz)

    {  

        var AprendizTraer = IDAprendiz;
        var Proceso="TraerAprendizActualizar";
        var Parametros={"Proceso":Proceso,"IDAprendiz":AprendizTraer};

        $.ajax({

                data: Parametros,
                type: 'POST',
                url: '../Contenido/php/funcionesA.php',
                beforeSend: function(){
                // $('#FormularioUpdate').html('Espere por favor...');
                },
                success: function(response)
                    {		  		
                        var Datos = JSON.parse(response);			
                        document.getElementById("CajaNumero1").value = Datos[0].IDAprendiz;
                        document.getElementById("CajaNumero2").value = Datos[0].NombresyApellidos;			
                        document.getElementById("CajaNumero3").value = Datos[0].Correo;
                        document.getElementById("CajaNumero4").value = Datos[0].Telefono;
                        document.getElementById("CajaNumero6").value = Datos[0].TipoActividad;
                        document.getElementById("CajaNumero5").value = Datos[0].Estado;
                        document.getElementById("CajaNumero10").value = Datos[0].Pazysalvo;
                    }
            });
    } 



function TraerSupervisor(IDSupervisor)
    {  

        var SupervisorTraer = IDSupervisor;
        var Proceso="TraerSupervisor";
        var Parametros={"Proceso":Proceso,"IDSupervisor":SupervisorTraer};

        $.ajax({

            data: Parametros,
            type: 'POST',
            url: '../Contenido/php/funcionesS.php',
            beforeSend: function(){
            // $('#FormularioUpdate').html('Espere por favor...');
            },
            success: function(response)
                {
                            
                            var Datos = JSON.parse(response);	
                            document.getElementById("CajaNumero1").value = Datos[0].IDSupervisor;
                            document.getElementById("CajaNumero2").value = Datos[0].NombresyApellidos;
                            document.getElementById("CajaNumero3").value = Datos[0].AreaAsignada;
                            document.getElementById("CajaNumero4").value = Datos[0].Correo;
                            document.getElementById("CajaNumero5").value = Datos[0].Estado;
                            document.getElementById("CajaNumero6").value = Datos[0].Telefono;
                            document.getElementById("CajaNumero7").value = Datos[0].Ip;
                
                }
            });
    } 



function TraerRegistros(IDRegistro)
    {  

            var RegistroTraer = IDRegistro;
            var Proceso="TraerRegistros";
            var Parametros={"Proceso":Proceso,"IDRegistro":RegistroTraer};

            $.ajax({

                data: Parametros,
                type: 'POST',
                url: '../Contenido/php/funcionesR.php',
                beforeSend: function(){
                // $('#FormularioUpdate').html('Espere por favor...');
                },
                success: function(response)
                {
                            
                            var Datos = JSON.parse(response);	
                            document.getElementById("CajaNumero0").value = Datos[0].IDRegistro;
                            document.getElementById("search").value = Datos[0].IDAprendiz;
                            document.getElementById("supervisor").value = Datos[0].IDSupervisor;
                            document.getElementById("CajaNumero3").value = Datos[0].HoraIngreso;
                            document.getElementById("CajaNumero4").value = Datos[0].HoraSalida;
                            document.getElementById("CajaObservaciones").value = Datos[0].Observaciones;
                
                }
                });
    } 


function DeleteRegistros(IDRegistro)

    {
    
        swal({   

                    title: "¿Estas seguro de eliminar el registro?",   
                    text: "Este paso marcará el resto de tu vida...",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "¡OK!",   
                    cancelButtonText: "Cancelar",   
                    closeOnConfirm: false,   
                    closeOnCancel: true }, 

                    function(isConfirm)
                    
                    {   
                          if (isConfirm) 
                                
                                {


                                    var parametros = {

                                        "IDRegistro" : IDRegistro,
                                        "NombreProceso20": "DeleteRegistro"
                        
                                    };


                                    $.ajax({

                                        data: parametros,
                                        url: '../contenido/php/funcionRU.php',
                                        type: 'POST',
                            
                                            beforeSend: function () 
                                                {
                                                    $("#Resultado").html("Procesando, espere por favor...");
                                                },
                                            success: function (response) 
                                            
                                                {
                                                    //LimpiarCajas();
                                                    $("#Resultado").html(response);
                                                    var url="../Modulos/Registros/MostrarRegistros.php" 
                                                    cargar(url,"TablaRecarga"); 
                            
                                                }
                                        });
                                      
                                } 
                          
                          else 

                                {     
                                
                                } 
              });


       
    }

    function DeleteRegistrosEnte(IDRegistro)
    
        {
    
            swal({   

                title: "¿Estas seguro de eliminar el registro?",   
                text: "Este paso marcará el resto de tu vida...",   
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "¡OK!",   
                cancelButtonText: "Cancelar",   
                closeOnConfirm: false,   
                closeOnCancel: true }, 

                function(isConfirm)
                
                {   
                      if (isConfirm) 
                            
                            {

        
                                var parametros = {
        
                                    "IDRegistro" : IDRegistro,
                                    "NombreProceso20": "DeleteRegistro"
                    
                                };
                                
                                $.ajax({
                    
                                    data: parametros,
                                    url: '../contenido/php/funcionRU.php',
                                    type: 'POST',
                    
                                        beforeSend: function () 
                    
                                            {
                                                $("#Resultado").html("Procesando, espere por favor...");
                                            },
                                        success: function (response) 
                                        
                                            {
                                                //LimpiarCajas();
                                                $("#Resultado").html(response);
                                                var url="../Modulos/Registros/MostrarRegistrosEnte.php" 
                                                cargar(url,"TablaRecarga"); 
                                            }
                    
                                    });
                                  
                            } 
                      
                      else 

                            {     
                            
                            } 
          });

          
        }


