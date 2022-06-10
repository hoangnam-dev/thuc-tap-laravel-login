import  $ from 'jquery';

$('#sign_in_form').on('submit',function(e){
    e.preventDefault();

    var username  = $.trim($('#username').val());
    var password  = $.trim($('#password').val());
    var flags = [];
    
    // Username
    flags.push(validUsername(username, $('#username_err')));

    // Password
    flags.push(validPassword(password, $('#password_err')));

    // Check if all flags are true
    var check = flags.indexOf(false);
    if(check >=0){
        return false
    }
    else{
        $form = this;
        console.log(typeof $form);
        $form.unbind('submit').submit();
        return true
    }
});

function showMessage(messageSelector, message){
    messageSelector.text(message);
}

function validUsername(username, errorSelector){
    var result = true;
    if (username == '' || username.length < 3){
        showMessage(errorSelector, 'Username cannot be empty and must be more than 3 characters');
        return result = false;
    }
    if (username.includes(' ')){
        showMessage(errorSelector, 'Username cannot contain spaces');
        return result = false;
    }
    if(result) {
        errorSelector.text('');
    }
    return result;
}

function validPassword(password, errorSelector){
    var result = true;
    if (password == '' || password.length < 4){
        showMessage(errorSelector, 'Password cannot be empty and must be more than 4 characters');
        return result = false;
    }
    if (password.includes(' ')){
        showMessage(errorSelector, 'Password cannot contain spaces');
        return result = false;
    }
    if(result) {
        errorSelector.text('');
    }
    return result;
}
