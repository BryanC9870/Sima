

    $(document).ready(function(){
        var consulta;
        //hacemos focus al campo de búsqueda
        $("#search").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#search").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#search").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "../Modulos/Registros/search.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
        
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                        $("#result").empty();
                        $("#aprendices").html(data);                                               
                    }
              });                                                                         
        });                                                     
});             
