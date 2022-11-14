
function sendContact(form, event) {
    event.preventDefault();
    var valid;
    var phone = $(form).find('input[name ="mobile_code"]').val();
    var full_phone = $(form).find('input[name ="full_phone"]').val();
    var name = $(form).find('input[name ="name"]').val();
    var message = $(form).find('textarea[name ="email"]').val();
    
    
    valid = validateContact(form);
    if (valid) {
        jQuery.ajax({
            url: "vendor/email.php",
            data: 'full_phone=' +full_phone+ '&phone=' + phone + '&name=' +
                name + '&message=' +
                message,
            type: "POST",
            success: function (data) {
                $(form).find('.results').html(data);
            },
            error: function () {
            }
        });
    }
}

/*
var input = document.querySelector("#phone");




var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    hiddenInput: "full_phone",
    geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
           
           
            callback(countryCode);
            
        });
    },
    utilsScript: "assets/js/utils.js?1613236686837", // just for formatting/placeholders etc
   
    
});




errorMsg = document.querySelector("#error-msg"),
validMsg = document.querySelector("#valid-msg");

var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

var reset = function() {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
   
};
// on blur: validate
input.addEventListener('blur', function() {
    reset();
     $('input[name ="full_phone"]').val(iti.selectedCountryData.dialCode);
    if (input.value.trim()) {
        if (iti.isValidNumber()) {
            validMsg.classList.remove("hide");
        } else {
            input.classList.add("error");
            var errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode]||"Invalid number";
            errorMsg.classList.remove("hide");
        }
    }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);



var input2 = document.querySelector("#phone2");
var iti2 = window.intlTelInput(input2, {
    initialCountry: "auto",
    hiddenInput: "full_phone",
    geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
            callback(countryCode);
        });
    },
    utilsScript: "js/utils.js?1613236686837" // just for formatting/placeholders etc
});

errorMsg2 = document.querySelector("#error-msg2"),
    validMsg2 = document.querySelector("#valid-msg2");


var reset = function() {
    input2.classList.remove("error");
    errorMsg2.innerHTML = "";
    errorMsg2.classList.add("hide");
    validMsg2.classList.add("hide");
};
// on blur: validate
input2.addEventListener('blur', function() {
    reset();
    if (input2.value.trim()) {
        if (iti2.isValidNumber()) {
            validMsg2.classList.remove("hide");
        } else {
            input2.classList.add("error");
            var errorCode = iti2.getValidationError();
            errorMsg2.innerHTML = errorMap[errorCode]||"Invalid number";
            errorMsg2.classList.remove("hide");
        }
    }
});










// document ready


*/

