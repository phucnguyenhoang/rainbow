$(function() {
    $('#btnToggleMenu').click(function() {
        $('#panMenuBg').removeClass('hide');
        $('#rightMenu').animate({
            right: '0px'
        }, 200);
    });

    $('#panMenuBg').click(function() {
        var bg = $(this);
        $('#rightMenu').animate({
            right: '-300px'
        }, 200, function() {
            bg.addClass('hide');
        });
    });

    $(window).resize(function() {
        if (!$('#btnToggleMenu').is(':visible')) {
            $('#rightMenu').animate({
                right: '-300px'
            }, 200, function() {
                $('#panMenuBg').addClass('hide');
            });
        }
    });

    $('#frmDemo').submit(function(e) {
        if (!validate()) {
            e.preventDefault();
            return false;
        }
    });

    $('input.required').blur(function() {
        var ctr = $(this),
            val = $.trim(ctr.val());

        if (val != '') {
            removeError(ctr);
        } else {
            setMessage(ctr, Message.required);
        }
    });

    $('#txtEmail').blur(function() {
        var ctr = $(this),
            val = $.trim(ctr.val());

        if (val != '') {
            removeError(ctr);
        } else {
            setMessage(ctr, Message.required);
            return false;
        }

        if (validateEmail(val)) {
            removeError(ctr);
        } else {
            setMessage(ctr, Message.emailInvalid);
        }
    });

    var chkEnglish = $('#chkEnglish'),
        chkKhmer = $('#chkKhmer');
    chkEnglish.change(function() {
        var ctr = $(this);
        if (ctr.prop('checked') || chkKhmer.prop('checked')) {
            removeError(ctr.closest('label'));
        } else {
            setMessage(chkKhmer.closest('label'), Message.languageRequired);
        }
    });
    chkKhmer.change(function() {
        var ctr = $(this);
        if (ctr.prop('checked') || chkEnglish.prop('checked')) {
            removeError(ctr.closest('label'));
        } else {
            setMessage(chkKhmer.closest('label'), Message.languageRequired);
        }
    });
});
var Message = {
    required: 'Please input for required field.',
    languageRequired: 'Please select language.',
    emailInvalid: "Please input an correct email."
};
function validate() {
    var error = false,
        focus = null,
        txtFullName = $('#txtFullName'),
        txtAddress = $('#txtAddress'),
        txtCity = $('#txtCity'),
        txtEmail = $('#txtEmail'),
        txtPhoneNumber = $('#txtPhoneNumber'),
        chkEnglish = $('#chkEnglish'),
        chkKhmer = $('#chkKhmer');

    // validate full name
    if ($.trim(txtFullName.val()) == '') {
        error = true;
        setMessage(txtFullName, Message.required);
        if (focus === null) focus = txtFullName;
    }

    // validate address
    if ($.trim(txtAddress.val()) == '') {
        error = true;
        setMessage(txtAddress, Message.required);
        if (focus === null) focus = txtAddress;
    }

    // validate city
    if ($.trim(txtCity.val()) == '') {
        error = true;
        setMessage(txtCity, Message.required);
        if (focus === null) focus = txtCity;
    }

    // validate email
    var email = $.trim(txtEmail.val());
    if (email == '') {
        error = true;
        setMessage(txtEmail, Message.required);
        if (focus === null) focus = txtEmail;
    }
    if (!validateEmail(email)) {
        error = true;
        setMessage(txtEmail, Message.emailInvalid);
        if (focus === null) focus = txtEmail;
    }

    // validate phone number
    if ($.trim(txtPhoneNumber.val()) == '') {
        error = true;
        setMessage(txtPhoneNumber, Message.required);
        if (focus === null) focus = txtPhoneNumber;
    }

    // validate language
    if (!chkEnglish.prop('checked') && !chkKhmer.prop('checked')) {
        error = true;
        setMessage(chkKhmer.closest('label'), Message.languageRequired);
        if (focus === null) focus = chkKhmer;
    }

    if (focus !== null) focus.focus();
    return !error;
}

function setMessage(field, msg, type) {
    if (type === undefined) type = 'danger';
    var box = field.closest('.form-group');

    box.addClass('has-error');
    box.find('.help-block').remove();

    field.after('<span class="help-block ' + type + '">' + msg + '</span>');
}

function removeError(field) {
    var box = field.closest('.form-group');

    box.removeClass('has-error');
    box.find('.help-block').remove();
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}