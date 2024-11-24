// Initialize the intl-tel-input plugin
var input = document.querySelector("#phone");
var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    separateDialCode: true,
    geoIpLookup: function (success, failure) {
        $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
            success(countryCode);
        });
    }
    // },
    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
});

// Log the selected country on change
input.addEventListener("countrychange", function () {
    var selectedCountryData = iti.getSelectedCountryData();
    // console.log("Selected country:", selectedCountryData.name, selectedCountryData.dialCode);
    // console.log("Selected country phone code:", selectedCountryData.dialCode);
});