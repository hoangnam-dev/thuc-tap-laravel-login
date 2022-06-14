// import  $ from '~jquery';
import $ from 'jquery';
console.log($, '--------------------------');
$().on('click mouseEnter', function() {
    console.log(arguments);
})

require('jquery-validation');
console.log($, '--------------------------');
$(function () {
    console.log('abcsj')
    $("#sign_in_form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "username": {
                required: true,
                maxlength: 15
            },
            "password": {
                required: true,
                minlength: 3
            }
        },
        messages: {
            "username": {
                required: "Hãy nhập User name của bạn",
                maxlength: "Hãy nhập tối đa 15 ký tự"
            },
            "password": {
                required: "Hãy nhập  Password của bạn",
                minlength: "Hãy nhập tối thiểu 3 ký tự"
            },
        },
        errorPlacement: function(label, element) {
            label.addClass('fv-plugins-message-container invalid-feedback');
            label.insertAfter(element);
        },
        wrapper: 'label'
    });

    $("#sign_up_form").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "username": {
                required: true,
                maxlength: 15
            },
            "password": {
                required: true,
                minlength: 3
            }
        },
        messages: {
            "username": {
                required: "Hãy nhập User name của bạn",
                maxlength: "Hãy nhập tối đa 15 ký tự"
            },
            "password": {
                required: "Hãy nhập  Password của bạn",
                minlength: "Hãy nhập tối thiểu 3 ký tự"
            },
        },
        errorPlacement: function(label, element) {
            label.addClass('fv-plugins-message-container invalid-feedback');
            label.insertAfter(element);
        },
        wrapper: 'label'
    });
});
