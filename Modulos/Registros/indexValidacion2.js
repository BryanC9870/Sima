
$(document).ready(function()

    {
         
            $('#search').on('blur', function()
            
              {
                    var search = $('#search').val()

                    if(search=="")
                    {

                    }

                    else

                    {
                         
                    $.ajax({

                      type: 'POST',
                      url: '../Modulos/Registros/search1.php',
                      data: {'search': search},

                      beforeSend: function()

                        {
                            $('#result').html('')
                        }

                    })

                    .done(function(resultado)

                      {
                          $('#result').html(resultado)
                      })

                    .fail(function()
                    
                      {
                          alert('Hubo un error :(');
                      })

                    }
              })
    })