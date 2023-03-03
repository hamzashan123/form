$(function () {
    $("#alert-message").fadeTo(5000, 500).slideUp(500, function () {
        $('#alert-message').slideUp(500);
    })

    const phone = document.querySelector('#phone');
    const phoneInp = window.intlTelInput(phone, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })

    const phonereg = document.querySelector('#phonereg');
    const phoneInpreg = window.intlTelInput(phonereg, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })
    
})
