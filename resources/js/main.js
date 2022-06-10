import  $ from 'jquery';
$( ".btn-default" ).click(function() {
    alert( "click button" );
});

import { forEach, min } from 'lodash';

function validator(formID) {

    var validate = {
        required : function(value) {
            return value ? true : 'This field is required';
        },
        min : function(min) {
            return function(value) {
                return value.length >= min ? true : 'This field must be at least ' + min + ' characters long';
            }
        }
    }

    var formRules = {}
    
    // Get form element 
    var form = document.querySelector(formID);
    if(form) {
        var inputs = document.querySelectorAll('[name][rules]');

        for (var input of inputs) {
            
            var rules = input.getAttribute('rules').split('|');
            for (var rule of rules) {

                var ruleParts = rule.split(':');
                var ruleName;
                if(ruleParts) {
                    ruleName = rule.split(':');
                    rule = ruleName[0];
                }

                var ruleFunc = validate[rule];

                if(ruleParts) {
                    ruleFunc = ruleFunc(ruleName[1]);
                }

                if(Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunc);
                } else {
                    formRules[input.name] = [ruleFunc];
                }
            }
        }
        console.log(formRules);

    }
}


validator('#sign_in_form');

