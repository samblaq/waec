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
                        message: 'The othername can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            
            //this field is for guardians
            surname1: {
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
            other: {
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
            occupation: {
                validators: {
                    notEmpty: {
                        message: 'The Occupation is required'
                    },
                    stringLength: {
                        min: 7,
                        max: 30,
                        message: 'The Occupation must be more than 7 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The Occupation can only consist of alphabet'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The Phone Number is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 13,
                        message: 'The Phone Number must be 10 or more, but not greater than 13 characters'
                    },
                    regexp: {
                        regexp: /^[0-9+]+$/,
                        message: 'The othername can only consist of alphabet'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
        }//end of fields
    });
});