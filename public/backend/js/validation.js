if ($("#student_form").length > 0) {
    $("#student_form").validate({
        rules: {
            first_name: {
                require: true,
            },
            last_name: {
                require: true,
            },
            email: {
                require: true,
            },
            password: {
                require: true,
            },
            aadhar_number: {
                require: true,
            },
            mobile_number: {
                require: true,
            },
            father_name: {
                require: true,
            },
            mother_name: {
                require: true,
            },
            father_contact_no: {
                require: true,
            },

            address: {
                required: true,
            },
        },
        messages: {
            first_name: {
                required: "Please enter your first name!",
            },
            last_name: {
                required: "Please enter your last name!",
            },
            email: {
                required: "Please enter your email!",
            },
            password: {
                required: "Please enter your password!",
            },
            aadhar_number: {
                required: "Please enter your aadhar number!",
            },
            mobile_number: {
                required: "Please enter your Mobile Number!",
            },
            father_name: {
                required: "Please enter your Father name!",
            },
            mother_name: {
                required: "Please enter your Mother name!",
            },
            father_contact_no: {
                required: "Please enter your Father contact number!",
            },

            address: {
                required: "Please enter your email!",
            },
        },
        showErrors: function (errorMap, errorList) {
            $(".spinner-border").addClass("d-none");
            this.defaultShowErrors();
        },
        submitHandler: function (form) {
            $(".save_spinner").removeClass("d-none");
            form.submit();
        },
    });
}

function digitInput(input) {
    let value = input.value;
    let numbers = value.replace(/[^0-9]/g, "");
    input.value = numbers;
}
function textInput(input) {
    let value = input.value;
    let lettersAndSpaces = value.replace(/[^a-zA-Z\s]/g, ""); // Include \s to allow spaces
    input.value = lettersAndSpaces;
}
