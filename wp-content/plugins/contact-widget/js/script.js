jQuery(document).ready(function(){

    //Get form by id
    var form=jQuery('#ajax-contact');

    //Messages
    var formMessages=jQuery('#form-messages');

    //Form event handler
    jQuery(form).submit(function(event){
        //Stop browser from reloading
        event.preventDefault();
        //Serialize Data
        var formData=jQuery(form).serialize();
        //Submit with Ajax
        jQuery.ajax({
            type: 'POST,
            url: jQuery(form).attr('action');
            data: formData
        }).done(function(response){
            //Message success
            jQuery(formMessages).removeClass('error');
            jQuery(formMessages).removeClass('success');

            //Set message text
            jQuery(formMessages).text(response);

            //Clear form fields
            jQuery('#name').val('');
            jQuery('#email').val('');
            jQuery('#message').val('');
        }).fail(function(error){
            //Message success
            jQuery(formMessages).removeClass('success');
            jQuery(formMessages).removeClass('error');

            //Set message text
            if(error.responseText != '') {
                jQuery(formMessages).text(error.responseText);
            }
            else{
                jQuery(formMessages).text('Unknown Error');
            }
            //Clear form fields
            jQuery('#name').val('');
            jQuery('#email').val('');
            jQuery('#message').val('');
        });
    });

});
