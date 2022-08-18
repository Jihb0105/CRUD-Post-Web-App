jQuery(document).ready(function(){
    jQuery('#submit').click(function(e){
       e.preventDefault();
       jQuery.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
       jQuery.ajax({
          url: "{{ url('/form') }}",
          method: 'post',
          data: {
             name: jQuery('#user_id').val(),
             type: jQuery('#title').val(),
             price: jQuery('#body').val()
          },
          success: function(data){
                  jQuery.each(data.errors, function(key, value){
                      jQuery('.alert-danger').show();
                      jQuery('.alert-danger').append('<p>'+value+'</p>');
                  });
            }
            
          });
       });
});
