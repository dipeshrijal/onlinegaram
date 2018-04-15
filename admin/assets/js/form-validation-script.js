var Script = function () {

    

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#changepass-form").validate({
            rules: {                
                old_pass: {
                    required: true,
                    minlength: 5
                },
                new_pass: {
                    required: true,
                    minlength:5
                },
                confirm_pass: {
                    required: true,
                    equalTo : "#new_pass",
                    minlength:5
                    
                }
            },
            messages: {
                old_pass: {
                    required: "Please Enter your Old Password.",
                    minlength: "Your Password must consist of 5 characters."
                },
                new_pass: {
                    required: "Please Choose a New Password",
                    minlength: "Your Password must consist of 5 characters."
                },
                confirm_pass: {
                    required: "Please Retype your New Password",
                    minlength: "Your Password must consist of 5 characters.",
                    equalTO: "Please Enter the Same Password as Above."
                    
                }
            }
        });

        // validate signup form on keyup and submit
        $("#login-form").validate({
            rules: {                
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password"
                }
            }
        });
        
        $("#addCategory").validate({
            rules: {
                               
                category: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                category: "Please Enter Category Name."
            }
        });
        $("#addSubCategory").validate({
            rules: {
                               
                subCategory: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                subCategory: "Please Enter Sub-Category Name."
            }
        });
        
        
        $("#product-form").validate({
            rules: {
                
                productName: {
                    required: true
                },
                cName: {
                    required: true
                },
                sName: {
                    required: true
                },
                pAvailability: {
                    required: true
                }
            },
            messages: {
                productName: "Please Enter Product Name.",
                productPrice: {
                   required: "Please Enter Product Price.",
                   digits : "Please Select Digits Only."
                },
                cName: "Please Select a Category.",
                pAvailability: "Confirm Product Availability.",
                sName: "Please Select Sub-Category."
            }
        });
       
    });


}();