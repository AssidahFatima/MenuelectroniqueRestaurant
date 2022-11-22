(function($){
    $('.addPanierR').click(function( event ) {
          event.preventDefault();
          $.get($(this).attr('href'),{},function(data){
              if(data.error){
                  Swal.fire(
                      data.message,
                      'Vous avez cliqué sur le bouton!',
                      "#000",
                      'success'
                    )
                  
              }else{
                Swal.fire({
                    title: data.message,
                    text: "Voulez avez consulter votre panier!",
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#000',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                     location.href='panierR.php'
                    }
                  })
              }
          },'json');
          return false;
      });
  })(jQuery);
  