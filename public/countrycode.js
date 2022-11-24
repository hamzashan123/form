


     

    const phoneInputField1 = document.querySelector('#personal_contactnumberausornz');
    const phoneInputField2 = document.querySelector('#workexp1_contact_details_work_period_phone');
    const phoneInputField3 = document.querySelector('#workexpintracompany_contact_details_work_period_phone');
    const phoneInputField4 = document.querySelector('#workexpintracompany_aus_nz_contact');
  
    // const phoneInputField6 = document.querySelector('#work_referee_phone');

    const phoneInput1 = window.intlTelInput(phoneInputField1, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })
    const phoneInput2 = window.intlTelInput(phoneInputField2, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })
    const phoneInput3 = window.intlTelInput(phoneInputField3, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })
    const phoneInput4 = window.intlTelInput(phoneInputField4, {
        initialCountry: 'au',
        utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    })
    
    // const phoneInput6 = window.intlTelInput(phoneInputField6, {
    //     initialCountry: 'au',
    //     utilsScript:
    //         'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
    // })