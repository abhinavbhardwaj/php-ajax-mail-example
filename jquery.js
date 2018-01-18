
$(function() {
    // Get the form.
    var form = $('#ajax-contact');
    var formMessages = $('#form-messages');
    $(form).submit(function(event) {
       // Stop the browser from submitting the form.
       event.preventDefault();
       // Serialize the form data.
       var formData = $(form).serialize();

       // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function(response){
               var parseResponse =  JSON.parse(response);
                $(formMessages).removeClass(parseResponse.removeClass);
                $(formMessages).addClass(parseResponse.addClass);
                $(formMessages).html(parseResponse.message);
                if(parseResponse.status == 'success'){
                    $(form)[0].reset();
                }
            }
        });
        $(formMessages).show();
   });
});