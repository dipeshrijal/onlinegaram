var Script = function () {

    

    $().ready(function() {
        
        $("#form-search").validate({
            rules: {
                               
                search: {
                    required: true
                }
            },
            messages: {
                search: ""
            }
        });     
       
        $("#buy-product-form").validate({
            rules: {                
               
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email:true
                },
                phone: {
                    required: true,
                    digits:true
                }
            },
            messages: {                
                name: "Please Enter Your Name.",
                email: "Confirm Product Availability.",
                phone: "Please Select Sub-Category."
            }
        });
        
        $("#contact-form").validate({
            rules: {                
               
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email:true
                },
                enquiry: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {                
                name: "Please Enter Your Name.",
                email: {
                    required :"Please Enter Your Email.",
                    email : 'Please Enter a valid Email '
                    
                },
                enquiry: {
                    required:  "Please Enter your Enquiry.",
                    minlength : 'Your Enquiry Should be of minium 10 characters;'                    
                }
            }     
        });       
    });
}();