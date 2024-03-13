

$(document).ready(function () {
    $('#other').hide();

    // Show/hide the "Specify purpose of importation" field based on the selected option
    $('#important').change(function () {
        if ($(this).val() === "other") {
            $('#other').show();
        } else {
            $('#other').hide();
        }
    });
    $('#businessOwnerDetails').submit(function (event) {
        var isValid = true;

        // Reset error messages
        $('.error-message').text('');

        // Validate each field
        if ($('#applicante_citizenship').val() === "") {
            $('#citizenship-error').text('This field is required.');
            $('#citizenship-error').css('display', 'block');
            isValid = false;
        }
        if ($('#product_category').val() === "") {
            $('#product_category-error').text('This field is required.');
            $('#product_category-error').css('display', 'block');
            isValid = false;
        }
        if ($('#productname').val() === "") {
            $('#productname-error').text('This field is required.');
            $('#productname-error').css('display', 'block');
            isValid = false;
        }
        if ($('#measurement').val() === "") {
            $('#measurement-error').text('This field is required.');
            $('#measurement-error').css('display', 'block');
            isValid = false;
        }
        if ($('#description').val() === "") {
            $('#description-error').text('This field is required.');
            $('#description-error').css('display', 'block');
            isValid = false;
        }
        var quantity = $('#Qty').val();
        if (quantity === "") {
            $('#Qty-error').text('Please enter Quantity.');
            $('#Qty-error').css('display', 'block');
            isValid = false;
        } else {
            // Check if quantity is a number greater than zero
            if (isNaN(quantity) || parseFloat(quantity) <= 0) {
                $('#Qty-error').text('Quantity must be a number greater than zero.');
                $('#Qty-error').css('display', 'block');
                isValid = false;
            }
        }

        var important = $('#important').val();
        if (important === "") {
            $('#important-error').text('Please select the purpose of importation.');
            $('#important-error').css('display', 'block');
            isValid = false;
        }

        // If "other" is selected, validate the "Specify purpose of importation" field
        if (important === "other") {
            var otherPurpose = $('#other').val();
            if (otherPurpose === "") {
                $('#purpose-error').text('Please specify the purpose of importation.');
                $('#purpose-error').css('display', 'block');
                isValid = false;
            }
        }

        var idNumber = $('#idnumber').val();
        if (idNumber === "") {
            $('#idnumber-error').text('This field is required.');
            $('#idnumber-error').css('display', 'block');
            isValid = false;
        }

        else {
            // Check if ID number starts with 1 or 2
            if (!/^[12]/.test(idNumber) || idNumber.length !== 16)   {
                // $('#idnumber-error').text('ID number must start with 1 or 2.');
                $('#idnumber-error').text('Sorry, we can’t find your identification data from NIDA system. Please contact NIDA for more details.');
                $('#idnumber-error').css('display', 'block');
                isValid = false;
            }
            // Check if ID number has 4 digits which represent your birth date
            else if (!/^[12]\d{3}/.test(idNumber)) {
                // $('#idnumber-error').text('ID number must have 4 digits which represent your birth date.');
                $('#idnumber-error').text('Sorry, we can’t find your identification data from NIDA system. Please contact NIDA for more details.');
                $('#idnumber-error').css('display', 'block');
                isValid = false;
            }
            
        }
        var passportNumber = $('#passportnumber').val();
        if (passportNumber === "") {
            $('#passportnumber-error').text('Please enter Passport Number.');
            $('#passportnumber-error').css('display', 'block');
            isValid = false;
        } else {
            // Check if passport number starts with "PD" and is 8 characters long
            if (!/^PD.{6}$/.test(passportNumber)) {
                $('#passportnumber-error').text('Passport number must start with "PD" and be 8 characters long.');
                $('#passportnumber-error').css('display', 'block');
                isValid = false;
            }
        }
        if ($('#other_name').val() === "") {
            $('#other_name-error').text('This field is required.');
            $('#other_name-error').css('display', 'block');
            isValid = false;
        }
        if ($('#surname').val() === "") {
            $('#surname-error').text('This field is required.');
            $('#surname-error').css('display', 'block');
            isValid = false;
        }
        if ($('#nationality').val() === "") {
            $('#nationality-error').text('This field is required.');
            $('#nationality-error').css('display', 'block');
            isValid = false;
        }
        if ($('#location').val() === "") {
            $('#location-error').text('This field is required.');
            $('#location-error').css('display', 'block');
            isValid = false;
        }


        // Validate each field
        if ($('#business_type').val() === "") {
            $('#business_type-error').text('This field is required.');
            $('#business_type-error').css('display', 'block');
            isValid = false;
        }
        if ($('#companyname').val() === "") {
            $('#companyname-error').text('This field is required.');
            $('#companyname-error').css('display', 'block');
            isValid = false;
        }

        if ($('#registrationdate').val() === "") {
            $('#registrationdate-error').text('This field is required.');
            $('#registrationdate-error').css('display', 'block');
            isValid = false;
        }

        if ($('#businesslocation').val() === "") {
            $('#businesslocation-error').text('This field is required.');
            $('#businesslocation-error').css('display', 'block');
            isValid = false;
        }

        var tinNumber = $('#tinnumber').val();
        if (tinNumber === "") {
            $('#tinnumber-error').text('This field is required.');
            $('#tinnumber-error').css('display', 'block');
            isValid = false;
        } else {
            // Check if TIN number is exactly 9 digits
            if (!/^\d{9}$/.test(tinNumber)) {
                $('#tinnumber-error').text('Please provide a valid TIN number.');
                $('#tinnumber-error').css('display', 'block');
                isValid = false;
            }
        }


        // Prevent form submission if any field is invalid
        if (!isValid) {
            event.preventDefault();
        }
    });
});

