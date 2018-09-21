<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style type="text/css">
		#loginForm .has-error .control-label,
		#loginForm .has-error .help-block,
		#loginForm .has-error .form-control-feedback {
		    color: #f39c12;
		}

		#loginForm .has-success .control-label,
		#loginForm .has-success .help-block,
		#loginForm .has-success .form-control-feedback {
		    color: #18bc9c;
		}
	</style>
<body>


<form id="loginForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>

</body>
</html>