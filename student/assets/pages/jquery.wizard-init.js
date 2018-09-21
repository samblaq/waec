/**
* Theme: Highdmin - Responsive Bootstrap 4 Admin Dashboard
* Author: Coderthemes
* Form wizard page
*/

!function($) {
    "use strict";

    var FormWizard = function() {};

    FormWizard.prototype.createBasic = function($form_container) {
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onFinishing: function (event, currentIndex) { 
                //NOTE: Here you can do form validation and return true or false based on your validation logic
                $(document).ready(function() {
    $('#basic-form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            surname: {
                validators: {
                    notEmpty: {
                        message: 'The surname is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The surname must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The surname can only consist of alphabet'
                    }
                }
            },
            otherNames: {
                validators: {
                    notEmpty: {
                        message: 'The othername is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The othername must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The othername can only consist of alphabet'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 50,
                        message: 'The address must be more than 10 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            }
        }//end of fields
    });
});
                console.log("Form has been validated!");
                return true; 
            }, 
            onFinished: function (event, currentIndex) {
               //NOTE: Submit the form, if all validation passed.
                console.log("Form can be submitted using submit method. E.g. $('#basic-form').submit()"); 
                $("#basic-form").submit();

            }
        });
        return $form_container;
    },
    //creates vertical form
    FormWizard.prototype.createVertical = function($form_container) {
        $form_container.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
        return $form_container;
    },
    FormWizard.prototype.init = function() {
        //initialzing various forms

        //basic form
        this.createBasic($("#basic-form"));

        //vertical form
        this.createVertical($("#wizard-vertical"));
    },
    //init
    $.FormWizard = new FormWizard, $.FormWizard.Constructor = FormWizard
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.FormWizard.init()
}(window.jQuery);