jQuery(function ($) {
    'use strict';

// Validate Contact Form
$("#ContactForm").validate({
    rules: {
        fullname: {
            required: true,
            minlength: 3
        },
        email: {
            required: true,
            minlength: 4
        }
        ,
        mobile: {
            required: true
        },
		service: {
            required: true
        },
        message: {
            required: true
        }
    },
    messages: {
        fullname: {
            required: "Please Enter Name",
            minlength: "Name must consist of at least 3 characters"
        },
        email: {
            required: "Please provide a Email",
            minlength: "Email must be at least 4 characters long"
        },
        mobile: {
            required: "Please Enter Mobile"
        },
		service: {
            required: "Please Select Service"
        },
        message: {
            required: "Please Enter Message"
        }
    },

    submitHandler: function(form) {
        //Send Booking Mail AJAX
        var formdata = jQuery("#ContactForm").serialize();
        jQuery.ajax({
            type:"POST",
            url:"contact_form/contact.php",
            data:formdata,
            dataType:'json',
            async: false,
            success:function(data){
                if(data.success){
					alert("Your Message has been Sent!");
                }else{
					alert("Error On Sending Message!");
                }

            },
            error:function(error){
				alert("Something Went Wrong!");
            }

        });
    }
});
});

