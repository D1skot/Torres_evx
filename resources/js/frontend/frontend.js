$(document).ready(function() {

    $("#contactForm").submit(function(e) {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').empty();

        var firstname = $('#contactForm_firstname').val();
        var errors = 0;
        $('.contactForm-register-firstname .invalid-feedback').empty();
        if (!firstname) {
            $('#contactForm_firstname').addClass('is-invalid');
            var errors = 1;
            $('.contactForm-register-firstname .invalid-feedback').html('<p>To pole jest wymagane</p>');
        } else {
            if (firstname.length < 3) {
                $('#contactForm_firstname').addClass('is-invalid');
                var errors = 1;
                $('.contactForm-register-firstname .invalid-feedback').html('<p>Imię musi zawierać minimum trzy litery.</p>');
            } else {
                $('#contactForm_firstname').removeClass('is-invalid');
            }
        }

        var email = $('#contactForm_email').val();
        if (!email) {
            $('#contactForm_email').addClass('is-invalid');
            var errors = 1;
            $('.contactForm-register-email .invalid-feedback').html('<p>To pole jest wymagane</p>');
        } else {
            if (IsEmail(email)) {
                $('#contactForm_email').removeClass('is-invalid');
            } else {
                $('#contactForm_email').addClass('is-invalid');
                $('.contactForm-register-email .invalid-feedback').html('<p>Wpisz poprawny adres e-mail</p>');
                var errors = 1;
            }
        }

        var phoneInput = $('#contactForm_phone');

        var phone = phoneInput.val();
        if (phone) {
            if (phone.length < 7) {
                $('#contactForm_phone').addClass('is-invalid');
                $('.contactForm-register-phone .invalid-feedback').html('<p>Podany numer telefonu jest za krótki</p>');
                var errors = 1;
            } else {
                if (!validatePhone(phone)) {
                    $('#contactForm_phone').addClass('is-invalid');
                    $('.contactForm-register-phone .invalid-feedback').html('<p>Wpisz poprawny 9-cyfrowy numer telefonu</p>');
                    var errors = 1;
                } else {
                    $('#contactForm_phone').removeClass('is-invalid');
                }
            }
        }




        var adres = $('#contactForm_adres').val();
        var topic = $('#contactForm_topic').val();
        var message = $('#contactForm_question').val();


        var agree1 = $('#contactForm_AgreeRegulations1').prop('checked');
        var agreeVal1 = 0;
        if (agree1) {
            agreeVal1 = 1;
        }

        $('#contactForm_AgreeRegulations1').removeClass('is-invalid');
        $('.contactForm-agree-regulations1').empty();
        if (!agree1) {
            $('#contactForm_AgreeRegulations1').addClass('is-invalid');
            $('.contactForm-agree-regulations1').html('<p>To pole jest wymagane.</p>');
            errors = 1;
        }

        console.log(errors);
        if (errors == 0) {
            $('#contactForm .btn-form').attr("disabled", "true");
            $.ajax({
                type: 'POST',
                url: '/kontakt',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    firstname: firstname,
                    adres: adres,
                    email: email,
                    phone: phone,
                    topic: topic,
                    question: message,
                    agree_regulations1: (agreeVal1 ? 'yes' : 'no')

                },
                success: function(result) {

                    console.log(result.success);
                    $('#formContact_modal .btn-form').removeAttr("disabled");
                    if (result.success) {
                        $('#formSuccess').modal('show')
                        $("#formContact_modal").trigger("reset");
                        $('#contactForm_firstname').val('');
                        $('#contactForm_adres').val('');
                        $('#contactForm_topic').val('');
                        $('#contactForm_email').val('');
                        $('#contactForm_phone').val('');
                        $('#formContactQuestion').val('');
                        $('#contactForm_AgreeRegulations1').prop('checked', false);
                    } else {
                        alert('Zapis nie powiódł się. Spróbuj ponownie');
                    }
                }
            });
        }
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var regex = /^[0-9]+$/
        return regex.test(txtPhone);
    }




});

