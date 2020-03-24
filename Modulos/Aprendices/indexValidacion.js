
$(document).ready(function()

  {
  
    $('#search').on('blur', function()
    
      {
        
          var search = $('#search').val()
          $.ajax({

                type: 'POST',
                url: '../Modulos/Aprendices/searchValidacion.php',
                data: {'search': search},
                beforeSend: function()

                    {

                    }

          })

          .done(function(resultado){

              $('#result').html(resultado)
        
          })

          .fail(function(){   

              alert('Hubo un error :(')

          })

      })

  })

