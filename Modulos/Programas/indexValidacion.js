
$(document).ready(function()

    {

        $('#cajaNumero1').on('blur', function()
        
          {
              var search = $('#cajaNumero1').val()

              if(search == "")
                {


                }

              else

                {

                    $.ajax({

                        type: 'POST',
                        url: '../Modulos/Programas/searchValidacion.php',
                        data: {'search': search},
        
                        beforeSend: function()
                        
                          {
                  
                          }
        
                      })
        
                      .done(function(resultado)
                      
                      {
                        
                      $('#result').html(resultado)
                    
                      })
        
                      .fail(function()
                      
                      {   
                        alert('Hubo un error :(')
                      })
        

                }
             
          })

    })