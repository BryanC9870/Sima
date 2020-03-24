function llamarReporte()

        {

            var FechaInicio = $('#FechaInicio').val();
            var FechaFin = $('#FechaFin').val();



            if(FechaInicio=="" || FechaFin =="" )

                {   
                    swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                }

            else

                {
                        var parametros = 
                        {
                            "FechaInicio" : FechaInicio,
                            "FechaFin" : FechaFin,
                            "NombreProcesoreport": "llamarReporte"
                        };

                        $.ajax({
                                    data: parametros,
                                    url: '../Contenido/php/ConsultaGenerarReporte.php',
                                    type: 'POST',

                                    success: function (response) 

                                        {

                                            $("#tablas").html(response);

                                        }
                            });

                }

        }



function llamarReporte2()

            {

                var FechaInicio = $('#FechaInicio').val();
                var FechaFin = $('#FechaFin').val();



                    if(FechaInicio=="" || FechaFin =="" )

                        {   
                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                        }

                    else
                        
                        {
                                var parametros = 
                                {
                                    "FechaInicio" : FechaInicio,
                                    "FechaFin" : FechaFin,
                                    "NombreProcesoreport2": "llamarReporte2"
                                };

                                $.ajax({
                                            data: parametros,
                                            url: '../Contenido/php/ConsultaGenerarReporte.php',
                                            type: 'POST',

                                            success: function (response) 

                                            {

                                                $("#tablas").html(response);

                                            }
                                    });

                        }

            }


            function llamarReporte3()

            {
                var documento =  $('#search').val();
                var FechaInicio = $('#FechaInicio').val();
                var FechaFin = $('#FechaFin').val();



                    if(documento == "" || FechaInicio=="" || FechaFin =="" )

                        {   
                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                        }

                    else
                        
                        {
                                var parametros = 
                                {
                                    "documento" : documento,
                                    "FechaInicio" : FechaInicio,
                                    "FechaFin" : FechaFin,
                                    "NombreProcesoreport3": "llamarReporte3"
                                };

                                $.ajax({
                                            data: parametros,
                                            url: '../Contenido/php/ConsultaGenerarReporte.php',
                                            type: 'POST',

                                            success: function (response) 

                                            {

                                                $("#tablas").html(response);

                                            }
                                    });

                        }

            }


            function llamarReporte4()

            {
                var documento =  $('#search').val();
                var FechaInicio = $('#FechaInicio').val();
                var FechaFin = $('#FechaFin').val();



                    if(documento == "" || FechaInicio=="" || FechaFin =="" )

                        {   
                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                        }

                    else
                        
                        {
                                var parametros = 
                                {
                                    "documento" : documento,
                                    "FechaInicio" : FechaInicio,
                                    "FechaFin" : FechaFin,
                                    "NombreProcesoreport4": "llamarReporte4"
                                };

                                $.ajax({
                                            data: parametros,
                                            url: '../Contenido/php/ConsultaGenerarReporte.php',
                                            type: 'POST',

                                            success: function (response) 

                                            {

                                                $("#tablas").html(response);

                                            }
                                    });

                        }

            }




//funcion para insercion de instructores-------//

function RecibeInformacion()

        {

                var IDInstructor = $('#search').val();
                var NombresyApellidos = $('#cajaNumero2').val();
                var Estado = $('#cajaNumero3').val();
                var Correo = $('#cajaNumero4').val();
                var Telefono = $('#cajaNumero5').val();


                    if(IDInstructor=="" || NombresyApellidos =="" || Estado=="0" || Correo=="" || Telefono=="")

                        {   
                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                        }

                    else

                        {

                                var parametros = 
                                {
                                    "IDInstructor" : IDInstructor,
                                    "NombresyApellidos" : NombresyApellidos,
                                    "Estado" : Estado,
                                    "Correo" : Correo,
                                    "Telefono" : Telefono,
                                    "NombreProceso": "RegistrarInstructor"
                                };




                                $.ajax({
                                            data: parametros,
                                            url: '../Contenido/php/funciones.php',
                                            type: 'POST',

                                            beforeSend: function () {
                                                $("#Resultado").html("Procesando, espere por favor...");
                                                },
                                            success: function (response) 

                                                {
                                                    console.log(response);
                                                    swal("Confirmación!", "Registro Exitoso!", "success");
                                                    limpiarcajas();
                                                    $("#Resultado").html(response);
                                                }
                                    });

                        }
        }

//funcion para insercion de instructores-----------------//


//funcion para actualizar instructores------//

function updateInstructores()

    {

            var IDInstructor = $('#IdInstructor').val();
            var NombresyApellidos = $('#NombresInstructor').val();
            var Estado = $('#EstadoInstructor').val();
            var Correo = $('#CorreoInstructor').val();
            var Telefono = $('#TelefonoInstructor').val();
        
    
            if(IDInstructor=="" || NombresyApellidos =="" || Estado=="0" || Correo=="" || Telefono=="")

                    {   
                        swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                    }
            
            else
            
                    {
                                var parametros = 
                                {
                                        "IDInstructor" : IDInstructor,
                                        "NombresyApellidos" : NombresyApellidos,
                                        "Estado" : Estado,
                                        "Correo" : Correo,
                                        "Telefono" : Telefono,
                                        "NombreProceso1": "updateInstructor"
                                };
            
                                console.log(parametros);
            
            
            
                                $.ajax({
                                            data: parametros,
                                            url: '../Contenido/php/funciones.php',
                                            type: 'POST',

                                                beforeSend: function () {
                                                    $("#Resultado").html("");
                                                    },
                                                success: function (response)
                                                
                                                    {
                                                        console.log(response); 
                                                        swal("Confirmación!", "Actualización Exitosa!", "success");
                                                        limpiarcajas(); 
                                                        $("#Resultado").html(response);
                                                        var url="../Modulos/Instructores/MostrarInstructores.php" 
                                                        cargar(url,"TablaRecarga"); 
                                                    }
                                    });
                    }
    }

//funcion para actualizar instructores---------------------//


//funcion para insercion de Programas-----------//

function RegistrarPrograma()

        {


                    var IDInstructor = $('#instructor').val();
                    var Nombre = $('#cajaNumero1').val();
                    var Estado = $('#cajaNumero2').val();
                    var NivelFormacion = $('#cajaNumero3').val();


                    if(IDInstructor=="0" || Nombre =="" || Estado=="0" || NivelFormacion=="0" )

                            {   
                                swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                            }

                    else
                    
                            {

                                                var parametros = 
                                                {
                                                    "IDInstructor" : IDInstructor,
                                                    "Nombre" : Nombre,
                                                    "Estado" : Estado,
                                                    "NivelFormacion" : NivelFormacion,
                                                    "NombreProceso2": "RegistrarPrograma"
                                                };




                                                $.ajax({
                                                            data: parametros,
                                                            url: '../Contenido/php/funcionesP.php',
                                                            type: 'POST',

                                                                beforeSend: function () {
                                                                    $("#Resultado").html("Procesando, espere por favor...");
                                                                    },

                                                                success: function (response) 
                                                                
                                                                    {
                                                                        console.log(response);
                                                                        swal("Confirmación!", "Registro Exitoso!", "success");
                                                                        limpiarcajas();
                                                                        $("#Resultado").html(response);
                                                                    }
                                                    });
                            }   
        }

//funcion para insercion de programas------------------//

//funcion para actualizar programas--------//

function updatePrograma()

        {
            
                    var IDPrograma = $('#CajaNumero1').val();
                    var IDInstructor = $('#CajaNumero2').val();
                    var Nombre = $('#CajaNumero3').val();
                    var Estado = $('#CajaNumero4').val();
                    var NivelFormacion = $('#CajaNumero5').val();
        
                
                    if(IDPrograma=="" || IDInstructor=="0" || Nombre =="" || Estado=="0" || NivelFormacion=="0" )

                            {   
                                swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                            }

                    else
                    
                            {
                        
                                    var parametros = 
                                    
                                    {

                                            "IDPrograma" : IDPrograma,
                                            "IDInstructor" : IDInstructor,
                                            "Nombre" : Nombre,
                                            "Estado" : Estado,
                                            "NivelFormacion" : NivelFormacion,
                                            "NombreProceso3": "updateInstructor"
                                    };

                        
                                    console.log(parametros);
                        
                        
                        
                                    $.ajax({
                                                data: parametros,
                                                url: '../Contenido/php/funcionesP.php',
                                                type: 'POST',

                                                    beforeSend: function () {
                                                        $("#Resultado").html("");
                                                        },

                                                    success: function (response) 

                                                        {
                                                            swal("Confirmación!", "Actualización Exitosa!", "success");
                                                            limpiarcajas();
                                                            $("#Resultado").html(response);
                                                            var url="../Modulos/Programas/MostrarProgramas.php" 
                                                            cargar(url,"TablaRecarga"); 
                                                        }
                                        });
                            }
        }

   //funcion para actualizar de programas---------------------//


/////// FUNCIONES FICHA /////////

 function RegistrarFicha()

        {

                    var NumeroDeFicha = $('#search').val();
                    var Nombre = $('#programa').val();
                    var Jornada = $('#cajaNumero2').val();
                    var FechaInicio = $('#CajaNumero3').val();
                    var FechaFinalizacion = $('#CajaNumero4').val();
                    var Estado = $('#cajaNumero5').val();
        
        
                    if(NumeroDeFicha=="" || Nombre=="0" || Jornada =="0" || FechaInicio=="" || FechaFinalizacion=="" || Estado=="0" )

                        {   
                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                        }

                    else
                    
                        {
            
                                var parametros = 
                                    {
                                            "NumeroDeFicha" : NumeroDeFicha,
                                            "Nombre" : Nombre,
                                            "Jornada" : Jornada,
                                            "FechaInicio" : FechaInicio,
                                            "FechaFinalizacion" : FechaFinalizacion,
                                            "Estado" : Estado,
                                            "NombreProceso": "RegistrarFicha"
                                    };
            
            
            
            
                                $.ajax({

                                        data: parametros,
                                        url: '../Contenido/php/funcionesF.php',
                                        type: 'POST',

                                            beforeSend: function () {
                                                $("#Resultado").html("Procesando, espere por favor...");
                                                },

                                            success: function (response)
                                            
                                                {
                                                    console.log(response);
                                                    swal("Confirmación!", "Registro Exitoso!", "success");
                                                    limpiarcajas();
                                                    $("#Resultado").html(response);
                                                }
                                    });
                        }
        }
   

   function updateFichas()
   
        {
        
                        var NumeroDeFicha = $('#CajaNumero1').val();
                        var Nombre = $('#CajaNumero2').val();
                        var Jornada = $('#CajaNumero3').val();
                        var FechaInicio = $('#CajaNumero4').val();
                        var FechaFinalizacion = $('#CajaNumero5').val();
                        var Estado = $('#CajaNumero6').val();
                
                
                        if(NumeroDeFicha=="" || Nombre=="0" || Jornada =="0" || FechaInicio=="" || FechaFinalizacion=="" || Estado=="0" )

                                {   
                                    swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                }
            
                        else
                                
                                {

                                            var parametros = 
                                            {
                                                "NumeroDeFicha" : NumeroDeFicha,
                                                "Nombre" : Nombre,
                                                "Jornada" : Jornada,
                                                "FechaInicio" : FechaInicio,
                                                "FechaFinalizacion" : FechaFinalizacion,
                                                "Estado" : Estado,
                                                "NombreProceso1": "updateFichas"
                                            };
                    

                                            console.log(parametros);
                    
                    
                    
                                            $.ajax({

                                                    data: parametros,
                                                    url: '../Contenido/php/funcionesF.php',
                                                    type: 'POST',
                                                        beforeSend: function () {
                                                            $("#Resultado").html("");
                                                            },

                                                        success: function (response) 
                                                        
                                                            {
                                                                swal("Confirmación!", "Actualización Exitosa!", "success");
                                                                limpiarcajas();
                                                                $("#Resultado").html(response);
                                                                var url="../Modulos/Fichas/MostrarFichas.php" 
                                                                cargar(url,"TablaRecarga"); 
                                                            }

                                                });
                                    }
        }





//funcion para insercion de Aprendices--------//

function ingresarAprendiz()

    {

                    var  datos = document.getElementById("programa").value; 
                    var da = JSON.parse(datos);  
                    var IDAprendiz = $('#search').val();
                    var NumeroDeFicha = da[0];
                    var Nombre = da[1];
                    var NombresyApellidos = $('#CajaNumero2').val();
                    var Correo = $('#CajaNumero3').val();
                    var Telefono = $('#CajaNumero4').val();
                    var TipoActividad = $('#CajaNumero6').val();
                    var Estado = $('#CajaNumero5').val();
                    var Pazysalvo = $('#CajaNumero10').val();
        
        
                        if(IDAprendiz=="" || NumeroDeFicha=="" || Nombre =="" || NombresyApellidos=="" || Correo=="" || Telefono=="" || TipoActividad=="0" || Estado=="0" || Pazysalvo=="0" || datos=="0" )

                                {   
                                    swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                }

                        else
                                
                                {
                
                                            var parametros = 
                                            {
                                                    "IDAprendiz" : IDAprendiz,
                                                    "NumeroDeFicha" : NumeroDeFicha,
                                                    "Nombre" : Nombre,
                                                    "NombresyApellidos" : NombresyApellidos,
                                                    "Correo" : Correo,
                                                    "Telefono" : Telefono,
                                                    "TipoActividad" : TipoActividad,
                                                    "Estado" : Estado,
                                                    "Pazysalvo" : Pazysalvo,
                                                    "NombreProceso4": "RegistrarAprendiz"
                                            };
                
                
                                            // console.log(parametros);
                        
                                            $.ajax({
                                                        data: parametros,
                                                        url: '../Contenido/php/funcionesA.php',
                                                        type: 'POST',

                                                            beforeSend: function () {
                                                                $("#Resultado").html("Procesando, espere por favor...");
                                                                },

                                                            success: function (response) 
                                                            
                                                                {
                                                                    console.log(response);
                                                                    swal("Confirmación!", "Registro Exitoso!", "success");
                                                                    limpiarcajas();
                                                                    $("#Resultado").html(response);
                                                                }
                                                });
                                    }
    }

//funcion para insercion de Aprendices----------------//

//funcion para actualizar aprendices--------//

function updateAprendiz()

    {
        
                                var  datos = document.getElementById("programa").value; 
                                var da = JSON.parse(datos);
                                var IDAprendiz = $('#CajaNumero1').val();
                                var NumeroDeFicha = da[0];
                                var Nombre = da[1];
                                var NombresyApellidos = $('#CajaNumero2').val();
                                var Correo = $('#CajaNumero3').val();
                                var Telefono = $('#CajaNumero4').val();
                                var TipoActividad = $('#CajaNumero6').val();
                                var Estado = $('#CajaNumero5').val();
                                var Pazysalvo = $('#CajaNumero10').val();

    
                                if(IDAprendiz=="" || NumeroDeFicha=="" || Nombre =="" || NombresyApellidos=="" || Correo=="" || Telefono=="" || TipoActividad=="0" || Estado=="0" || Pazysalvo=="0" || datos=="0" )

                                        {   
                                            swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                        }

                                else
                                
                                {
    
    
                                        var parametros = {

                                                    "IDAprendiz" : IDAprendiz,
                                                    "NumeroDeFicha" : NumeroDeFicha,
                                                    "Nombre" : Nombre,
                                                    "NombresyApellidos" : NombresyApellidos,
                                                    "Correo" : Correo,
                                                    "Telefono" : Telefono,
                                                    "TipoActividad" : TipoActividad,
                                                    "Estado" : Estado,
                                                    "Pazysalvo" : Pazysalvo,
                                                    "NombreProceso5": "updateAprendiz"
                                        };
    
                                        //console.log(parametros);
    
                                        $.ajax({
                                                    data: parametros,
                                                    url: '../Contenido/php/funcionesA.php',
                                                    type: 'POST',

                                                        beforeSend: function () {
                                                            $("#Resultado").html("");
                                                            },

                                                        success: function (response) 
                                                        
                                                            {
                                                                
                                                                swal("Confirmación!", "Actualización Exitosa!", "success");
                                                                limpiarcajas();
                                                                $("#Resultado").html(response);
                                                                var url="../Modulos/Aprendices/MostrarAprendices.php" 
                                                                cargar(url,"TablaRecarga"); 
                                                            }
                                            });

                                    }
    }

 //funcion para actualizar de aprendices---------------------//

 function InactivarAprendices()
 
 
    {
    
                 
        swal({   

            title: "¿Estas seguro de realizar esta acción?",   
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

                            $.ajax({
                                data: {},
                                url: '../Contenido/php/funcionInactivar.php',
                                type: 'POST',

                                    beforeSend: function () {
                                        $("#Resultado").html("Procesando, espere por favor...");
                                        },

                                    success: function (response) 
                                    
                                        {
                                            //LimpiarCajas();
                                            $("#Resultado").html(response);
                                            var url="../Modulos/Aprendices/MostrarAprendices.php" 
                                            cargar(url,"TablaRecarga"); 
                                        }
                        });
                          
                              
                        } 
                  
                  else 

                        {     
                        
                        } 
      });

                  

    }



 /////// FUNCIONES SUPERVISOR /////////

function RecibeSupervisor()

{

                            var IDSupervisor = $('#search').val();
                            var NombresyApellidos = $('#CajaNumero2').val();
                            var AreaAsignada = $('#cajaNumero3').val();
                            var Correo = $('#cajaNumero4').val();
                            var Estado = $('#cajaNumero5').val();
                            var Telefono = $('#cajaNumero6').val();
                            var Ip = $('#cajaNumero7').val();
                            var Contrasena = $('#cajaNumero0').val();
                            var Rol = $('#cajaNumero01').val();
   
   
                            if(IDSupervisor=="" || NombresyApellidos=="" || AreaAsignada =="" || Correo=="" || Estado=="0" || Telefono=="" || Ip=="" || Contrasena=="" || Rol=="0" )

                                    {   
                                        swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                    }

                            else
                            
                                    {
        
                                                    var parametros = 
                                                        {
                                                                "IDSupervisor" : IDSupervisor,
                                                                "NombresyApellidos" : NombresyApellidos,
                                                                "AreaAsignada" : AreaAsignada,
                                                                "Correo" : Correo,
                                                                "Estado" : Estado,
                                                                "Telefono" : Telefono,
                                                                "Ip" : Ip,
                                                                "Contrasena" : Contrasena,
                                                                "Rol" : Rol,
                                                                "NombreProceso": "RegistrarSupervisor"
                                                        };
            
        
        
        
                                                    $.ajax({

                                                                data: parametros,
                                                                url: '../Contenido/php/funcionesS.php',
                                                                type: 'POST',

                                                                    beforeSend: function () {
                                                                        $("#Resultado").html("Procesando, espere por favor...");
                                                                        },

                                                                    success: function (response) 
                                                                    
                                                                        {
                                                                            console.log(response);
                                                                            swal("Confirmación!", "Registro Exitoso!", "success");
                                                                            limpiarcajas();
                                                                            $("#Resultado").html(response);
                                                                        }
                                                        });
                                        }
   }
   
   
   
   //funcion para actualizar de instructores//
   function updateSupervisores()
   
        {
        
                                            var IDSupervisor = $('#CajaNumero1').val();
                                            var NombresyApellidos = $('#CajaNumero2').val();
                                            var AreaAsignada = $('#CajaNumero3').val();
                                            var Correo = $('#CajaNumero4').val();
                                            var Estado = $('#CajaNumero5').val();
                                            var Telefono = $('#CajaNumero6').val();
                                            var Ip = $('#CajaNumero7').val();
                                            var Contrasena = $('#CajaNumero0').val();
                                            var Rol = $('#CajaNumero01').val();
            
                                            if(IDSupervisor=="" || NombresyApellidos=="" || AreaAsignada =="" || Correo=="" || Estado=="0" || Telefono=="" || Ip=="" || Contrasena=="" || Rol=="0" )

                                                    {   
                                                        swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                                    }

                                            else
                                            
                                                    {
                    
                    
                                                            var parametros = 
                                                                {

                                                                        "IDSupervisor" : IDSupervisor,
                                                                        "NombresyApellidos" : NombresyApellidos,
                                                                        "AreaAsignada" : AreaAsignada,
                                                                        "Correo" : Correo,
                                                                        "Estado" : Estado,
                                                                        "Telefono" : Telefono,
                                                                        "Ip" : Ip,
                                                                        "Contrasena" : Contrasena,
                                                                        "Rol" : Rol,
                                                                        
                                                                        "NombreProceso6": "updateSupervisores"
                                                                };
                    
                                                            console.log(parametros);
                                                            
                                                            
                                                            
                                                            $.ajax({
                                                                        data: parametros,
                                                                        url: '../Contenido/php/funcionesS.php',
                                                                        type: 'POST',

                                                                            beforeSend: function () {
                                                                                $("#Resultado").html("");
                                                                                },

                                                                            success: function (response) 
                                                                            
                                                                                {
                                                                                    
                                                                                    swal("Confirmación!", "Actualización Exitosa!", "success");
                                                                                    limpiarcajas();
                                                                                    $("#Resultado").html(response);
                                                                                    var url="../Modulos/Supervisores/MostrarSupervisores.php" 
                                                                                    cargar(url,"TablaRecarga"); 

                                                                                }
                                                                });
                                                        }
        }




      /////// FUNCIONES REGISTROS /////////

function RegistrarRegistro()

    {

                                        var IDAprendiz = $('#aprendices').val();
                                        var IDSupervisor = $('#supervisor').val();
                                        var HoraIngreso = $('#CajaNumero3').val();
                                        var HoraSalida = $('#CajaNumero4').val();
                                        var Observaciones = $('#CajaObservaciones').val();
    
    
                                        if(IDAprendiz=="0" || IDSupervisor=="0" || HoraIngreso =="" || HoraSalida=="" )

                                                {   
                                                    swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                                }

                                        else
                                        
                                                {
            
            
                                                            var parametros = 
                                                                {
                                                                        "IDAprendiz" : IDAprendiz,
                                                                        "IDSupervisor" : IDSupervisor,
                                                                        "HoraIngreso" : HoraIngreso,
                                                                        "HoraSalida" : HoraSalida,
                                                                        "Observaciones" : Observaciones,
                                                                        "NombreProceso": "RegistrarRegistro"
                                                                };
            
            
            
            
                                                            $.ajax({

                                                                        data: parametros,
                                                                        url: '../Contenido/php/funcionesR.php',
                                                                        type: 'POST',
                                                                            beforeSend: function () {
                                                                                $("#Resultado").html("Procesando, espere por favor...");
                                                                                },

                                                                            success: function (response)
                                                                            
                                                                                {
                                                                                    console.log(response);
                                                                                    swal("Confirmación!", "Registro Exitoso!", "success");
                                                                                    limpiarcajas2();
                                                                                    $("#Resultado").html(response);
                                                                                }
                                                                });
                                                }
    }
   
 
   
   function UpdateRegistro()
   
        {
        
                                        var IDRegistro = $('#CajaNumero0').val();
                                        var IDAprendiz = $('#search').val();
                                        var IDSupervisor = $('#supervisor').val();
                                        var IDSupervisor = $('#supervisor').val();
                                        var HoraIngreso = $('#CajaNumero3').val();
                                        var HoraSalida = $('#CajaNumero4').val();
                                        var Observaciones = $('#CajaObservaciones').val();
            
            
                                        if(IDRegistro=="" || IDAprendiz=="" || IDSupervisor=="0" || HoraIngreso =="" || HoraSalida=="" )

                                                {   
                                                    swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                                }

                                        else
                                        
                                                {
                    
                                                            var parametros =
                                                                {

                                                                        "IDRegistro" : IDRegistro,
                                                                        "IDAprendiz" : IDAprendiz,
                                                                        "IDSupervisor" : IDSupervisor,
                                                                        "HoraIngreso" : HoraIngreso,
                                                                        "HoraSalida" : HoraSalida,
                                                                        "Observaciones" : Observaciones,
                                                                        "NombreProceso6": "UpdateRegistro"
                                                                };
                                                            
                                                            console.log(parametros);
                                                            
                                                            
                                                            
                                                            $.ajax({

                                                                    data: parametros,
                                                                    url: '../Contenido/php/funcionesR.php',
                                                                    type: 'POST',

                                                                        beforeSend: function () {
                                                                            $("#Resultado").html("");
                                                                            },

                                                                        success: function (response) 
                                                                        
                                                                            {
                                                                                swal("Confirmación!", "Actualización Exitosa!", "success");
                                                                                limpiarcajas();
                                                                                $("#Resultado").html(response);
                                                                                var url="../Modulos/Registros/MostrarRegistros.php" 
                                                                                cargar(url,"TablaRecarga"); 
                                                                            }
                                                                });
                                                }

        }



                           function UpdateRegistroEnte()
                           
                           
                                {
        
                                                    var IDRegistro = $('#CajaNumero0').val();
                                                    var IDAprendiz = $('#search').val();
                                                    var IDSupervisor = $('#supervisor').val();
                                                    var IDSupervisor = $('#supervisor').val();
                                                    var HoraIngreso = $('#CajaNumero3').val();
                                                    var HoraSalida = $('#CajaNumero4').val();
                                                    var Observaciones = $('#CajaObservaciones').val();
            
            
                                                    if(IDRegistro=="" || IDAprendiz=="" || IDSupervisor=="0" || HoraIngreso =="" || HoraSalida=="" )

                                                            {   
                                                                swal("ERROR!", "Se encontraron campos vacíos, llene correctamente los campos!", "error");
                                                            }

                                                    else
                                                    
                                                            {
                                
                                                                        var parametros =
                                                                            {

                                                                                    "IDRegistro" : IDRegistro,
                                                                                    "IDAprendiz" : IDAprendiz,
                                                                                    "IDSupervisor" : IDSupervisor,
                                                                                    "HoraIngreso" : HoraIngreso,
                                                                                    "HoraSalida" : HoraSalida,
                                                                                    "Observaciones" : Observaciones,
                                                                                    "NombreProceso25": "UpdateRegistroEnte"
                                                                            };
                                                                        
                                                                        console.log(parametros);
                                                                        
                                                                        
                                                                        
                                                                        $.ajax({

                                                                                    data: parametros,
                                                                                    url: '../Contenido/php/funcionRU.php',
                                                                                    type: 'POST',

                                                                                        beforeSend: function () {
                                                                                            $("#Resultado").html("Procesando, espere por favor...");
                                                                                            },

                                                                                        success: function (response) 
                                                                                        
                                                                                            {
                                                                                                swal("Confirmación!", "Actualización Exitosa!", "success");
                                                                                                limpiarcajas();
                                                                                                $("#Resultado").html(response);
                                                                                                var url="../Modulos/Registros/MostrarRegistrosEnte.php" 
                                                                                                cargar(url,"TablaRecarga"); 
                                                                                            }
                                                                            });
                                                            }

                                }
                                        


        function validaNumericos(e){
            tecla = (document.all) ? e.keyCode : e.which;
        
            //Tecla de retroceso para borrar, siempre la permite
            if (tecla==8){
                return true;
            }
                
            // Patron de entrada, en este caso solo acepta numeros
            patron =/[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

 function maxLengthCheck(object)

    {
        if(object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
    }
  
    
   
 function validar(e) 

        { // 1
            tecla = (document.all) ? e.keyCode : e.which; // 2
            if (tecla==8) return true; // 3
            patron =/[a-zA-ZñÑ\s\W]/; // 4
            te = String.fromCharCode(tecla); // 5
            return patron.test(te); // 6
        }


 function verif(v)

        {
            if (v.value==" ")

                {
                   v.value="";
                }
        }

 function pruebaemail (valor)

    {

    re=/^([A-Za-z_0-9_\.-]+)@([A-Za-z\.-]+)\.([A-Za-z\.]{2,6})$/
    
    if(valor=="")
        {

        }

    else
        {

            if(!re.exec(valor))
        
            {
                swal("Alerta", "la dirección de correo " + valor + " es invalida ", "warning");
                $('input[type="email"]').val('');
            }
    
        }
   
    }
    
 function verificarsalida()

    {

    // swal({
    //     title: "Are you sure?",
    //     text: "Once deleted, you will not be able to recover this imaginary file!",
    //     icon: "warning",
    //     buttons: true,
    //     dangerMode: true,
    //   })
    //   .then((willDelete) => {
    //     if (willDelete) {
    //       swal("Poof! Your imaginary file has been deleted!", {
    //         icon: "success",
    //       });
    //     } else {
    //       swal("Your imaginary file is safe!");
    //     }
    //   });

        swal({   

            title: "Confirmación",   
            text: "Estas seguro de cerrar sesión?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "¡OK!",   
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false,   
            closeOnCancel: false }, 

            function(isConfirm)
            
                {   
                    if (isConfirm) 
                        
                        {    
            
                            window.location.href = "index.php";  
                            
                        } 
                    
                    else 
                    
                        {     
                            window.location.href = "recibirInformacion.php";  
                        } 
                });


    }



 function limpiarcajas()

    {
        
        $('input[type="text"]').val('');
        $('input[type="number"]').val('');
        $('input[type="email"]').val('');
        $('input[type="password"]').val('');
        $('select[type="select"]').val('0');
        $('input[type="date"]').val('');
        $('textarea[type="textarea"]').val('');
        $('input[type="datetime-local"]').val('');
        $('input[type="datetime"]').val('');

    }

    function limpiarcajas2()

    {
        
        $('input[type="text"]').val('');
        $('input[type="number"]').val('');
        $('input[type="email"]').val('');
        $('#aprendices').html('');
        $('select[type="select"]').val('0');
        $('input[type="date"]').val('');
        $('textarea[type="textarea"]').val('');
        $('input[type="datetime-local"]').val('');
        $('input[type="datetime"]').val('');

    }
    

 function graficarDatos1()

    {

    

            $.ajax({
                
                    type: "POST",
                    url: "../Contenido/php/qgetdata.php",
                    
                
                    success: function (response) 
                    
                        {
                        

                                var conversion = JSON.parse(response);
                                console.log(conversion);
                                if(conversion == "")

                                    {
                                        console.log("NO HAY DATOS POR GRAFICAR");
                                    }
                                else
                                    
                                    {

                                if(conversion.length==2)
                                    
                                    {

                                                if(conversion[0].jornada=="NOCHE" && conversion[1].jornada=="TARDE" )

                                                    {

                                                                var tarde = conversion[0].cantidad;
                                                                var noche = conversion[1].cantidad;
                                                                console.log(manana + "  tarde "+conversion);
                                                                var oilCanvas = document.getElementById("oilChart");

                                                                Chart.defaults.global.defaultFontFamily = "Lato";
                                                                Chart.defaults.global.defaultFontSize = 18;
                                                            
                                                                var oilData = 
                                                                
                                                                    {
                                                                        
                                                                        labels: [

                                                                            "NOCHE",
                                                                            "TARDE"
                                                                        ],

                                                                        datasets: [
                                                                            {
                                                                                data: [tarde,noche],
                                                                                backgroundColor: [

                                                                                    "#FF6384",
                                                                                    "#6384FF"
                                                                                ]
                                                                            }]
                                                                    };
                                                    }

                                    else

                                        {

                                                if(conversion[0].jornada=="MAÑANA" && conversion[1].jornada=="NOCHE" )

                                                    {

                                                                var noche = conversion[0].cantidad;
                                                                var manana = conversion[1].cantidad;
                                                                console.log(manana + "  tarde "+conversion);
                                                                var oilCanvas = document.getElementById("oilChart");
                                                    
                                                                Chart.defaults.global.defaultFontFamily = "Lato";
                                                                Chart.defaults.global.defaultFontSize = 18;
                                                            
                                                                var oilData = 
                                                                
                                                                    {

                                                                        labels: [

                                                                            "NOCHE",
                                                                            "MAÑANA"
                                                                        ],
                                                                        
                                                                        datasets: [
                                                                            {
                                                                                data: [manana,noche],
                                                                                backgroundColor: [

                                                                                    "#FF6384",
                                                                                    "#6384FF"
                                                                                ]
                                                                            }]
                                                                    };
                                                    }

                                                else
                                                
                                                    {

                                                            var manana = conversion[0].cantidad;
                                                            var tarde = conversion[1].cantidad;
                                                            console.log(manana + "  tarde "+conversion);
                                                            var oilCanvas = document.getElementById("oilChart");
                                                
                                                            Chart.defaults.global.defaultFontFamily = "Lato";
                                                            Chart.defaults.global.defaultFontSize = 18;
                                                        
                                                            var oilData = 
                                                            
                                                            {
                                                                labels: [

                                                                    "MAÑANA",
                                                                    "TARDE"
                                                                ],

                                                                datasets: [
                                                                    {
                                                                        data: [manana,tarde],
                                                                        backgroundColor: [

                                                                            "#FF6384",
                                                                            "#6384FF"
                                                                        ]
                                                                    }]
                                                            };
                                                    }
                                        }
                                    
                                    }

                            else

                                {


                                        if(conversion.length==1)
                                        
                                            {
                                            
                                                if(conversion[0].jornada=="MAÑANA")

                                                    {
                                                        var manana = conversion[0].cantidad;
                                                        console.log(manana + "  tarde "+conversion);
                                                        var oilCanvas = document.getElementById("oilChart");
                                            
                                                        Chart.defaults.global.defaultFontFamily = "Lato";
                                                        Chart.defaults.global.defaultFontSize = 18;
                                                    
                                                    var oilData = 
                                                    
                                                        {
                                                            labels: [

                                                                "MAÑANA"
                                                            ],

                                                            datasets: [
                                                                {
                                                                    data: [manana],
                                                                    backgroundColor: [

                                                                        "#FF6384"
                                                                    ]
                                                                }]
                                                        };

                                                    }

                                                else

                                                    {
                                                                if(conversion[0].jornada=="NOCHE")

                                                                        {

                                                                    
                                                                            var noche = conversion[0].cantidad;
                                                                            console.log(manana + "  tarde "+conversion);
                                                                            var oilCanvas = document.getElementById("oilChart");
                                                                
                                                                            Chart.defaults.global.defaultFontFamily = "Lato";
                                                                            Chart.defaults.global.defaultFontSize = 18;
                                                                        
                                                                            var oilData = 
                                                                            
                                                                                {
                                                                                    
                                                                                    labels: [

                                                                                        "NOCHE"
                                                                                    ],

                                                                                    datasets: [
                                                                                        {
                                                                                            data: [noche],
                                                                                            backgroundColor: [
                                                                                                
                                                                                                "#FF6384"
                                                                                            ]
                                                                                        }]

                                                                                };

                                                                        }

                                                                else
                                                            
                                                                        {
                                                                        
                                                                            var tarde = conversion[0].cantidad;
                                                                            console.log(manana + "  tarde "+conversion);
                                                                            var oilCanvas = document.getElementById("oilChart");
                                                                
                                                                            Chart.defaults.global.defaultFontFamily = "Lato";
                                                                            Chart.defaults.global.defaultFontSize = 18;
                                                                        
                                                                            var oilData = 
                                                                                
                                                                                {

                                                                                    labels: [

                                                                                        "TARDE"
                                                                                    ],

                                                                                    datasets: [
                                                                                        {
                                                                                            data: [tarde],
                                                                                            backgroundColor: [

                                                                                                "#FF6384"
                                                                                            ]
                                                                                        }]
                                                                                };

                                                                        }
                                                    }
                                            }

                                    else
                                    
                                            {
                                            
                                                var manana = conversion[0].cantidad;
                                                var noche = conversion[1].cantidad;
                                                var tarde = conversion[2].cantidad;
                                                console.log(manana + "  tarde "+conversion);
                                                var oilCanvas = document.getElementById("oilChart");

                                                Chart.defaults.global.defaultFontFamily = "Lato";
                                                Chart.defaults.global.defaultFontSize = 18;
                                            
                                                var oilData = 

                                                    {

                                                        labels: [
                                                            
                                                            "MAÑANA",
                                                            "TARDE",
                                                            "NOCHE"
                                                        ],

                                                        datasets: [
                                                            {
                                                                data: [ manana,tarde, noche],
                                                                backgroundColor: [

                                                                    "#FF6384",
                                                                    "#6384FF",
                                                                    "#84FF63"
                                                                ]
                                                            }]
                                                    };

                                            }
                                
                                }
                            
                                    var pieChart = new Chart(oilCanvas, 

                                        {

                                            type: 'pie',
                                            data: oilData
                                    
                                        }); 
                            }
                        }
                    
                });
                        
                
    }


    function obtenerfoco ()

        {

           document.getElementById("search").focus();
          
        }

        function obtenerfoco1 ()

        {

            document.getElementById("NombresInstructor").focus();
          
        }

        function obtenerfoco2 ()

        {

           document.getElementById("CajaNumero2").focus();
          
        }


    $.ajaxPrefilter(function( options, originalOptions, jqXHR )

        { 
            options.async = true; 
        });
