<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Ants || Registration</title>
        <meta name="description" content="">
        <meta name="author" content="HA Labs">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/app.css') ?>" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    </head>

    <body>
        <div>
            <div class="container"  >
                <form name="RegForm"  method="POST" enctype= "multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>" >
                    <div align="center">    
                        <div class="row">
                            <div class="wraper padding-10 cll-sm-12" >
                                <div>
                                    <div align="left" class="padding-10 dashed-border">
                                        <div class="row padding-10">
                                            <div style="border-bottom:2px solid #222" class="col-sm-12">
                                                <img src="../../assets/images/logo.jpg" alt="Ants Logo" width="100px" />
                                                <span>ANTS</Span>
                                            
                                                <a href="/" class="btn btn-default pull-right" style="margin-top: 10px;">
                                                    <span class="glyphicon glyphicon-arrow-left" style="color:#777"></span>
                                                    &nbsp;Back to Login
                                                </a>
                                            </div>
                                        </div>
                                        <div  class="row padding-10" id="block" align="center" >
                                            <div class="col-sm-12">
                                                <div align="left">
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="OrgName">Organization</label>
                                                        <input type="text" name="OrgName" id="OrgName" class="form-control" maxlength="50" placeholder="Name of the organization" required />
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="OrgKey">Organization Key/Short name</label>
                                                        <input type="text" name="OrgKey" id="OrgKey" class="form-control" maxlength="6" placeholder="Short format of the above name" required />
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="OrgLogo">Logo (Max 2MB)</label>
                                                        <input type="file" name="Logo" id="Logo" accept="image/*" onchange="findSize()" />
                                                        <div class="alert alert-danger" id="FileAlert" style="display: none"><em>Max size 2MB, file size is exceeded.</em></div>
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="LinkURL">Logo Link URL</label>
                                                        <input type="text" name="LinkURL" id="LinkURL" class="form-control" maxlength="50" placeholder="Website address" />
                                                    </div>
                                                                                                        
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="MasterUser">Master User name</label>
                                                        <input type="text" name="MasterUser" id="MasterUser" class="form-control" maxlength="50" placeholder="Power user" required />
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="Email">E-mail</label>
                                                        <input type="email" name="Email" id="Email" class="form-control" maxlength="50" placeholder="Power user Email" required />
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="Contact">Contact</label>
                                                        <input type="tel" name="Contact" id="Contact" class="form-control" maxlength="50" placeholder="Contact number" required />
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="Password">Password (Min-length 6 chars)</label>
                                                        <input type="password" name="Password" id="Password" class="form-control" maxlength="20" placeholder="Login password" required onchange="checkStrength($(this).val());" onkeyup="checkStrength($(this).val());" />
                                                        <div class="progress" id="Strenth">
                                                            <div class="progress-bar" id="pwdStrenth" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                              Type your password
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="RePassword">Confirm password</label>
                                                        <input type="password" name="RePassword" id="RePassword" class="form-control" maxlength="20" placeholder="Retype the password" required />
                                                        <div class="alert alert-danger" id="RePasswordWarning" style="display: none"><em>Password cunfirmation failed.</em></div>
                                                    </div>
                                                    <div class="form-control-group padding-bottom-5px">
                                                        <label for="ShowPassword" class="btn btn-default" style="width: 120px;">Show password</label>
                                                        <input type="checkbox" name="ShowPassword" autocomplete="off" id="ShowPassword" style="display:none;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col-sm-12" >
                                            <input type="submit" value="Submit" id="submit" class="btn btn-primary" />
                                            <input type="reset" value="Clear all" class="btn btn-danger" />
                                        </div>
                                        <div class="spacer">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="spacer">&nbsp;</div>
            <footer class="navbar navbar-fixed-bottom footer-1">
                <p>
                    &copy; Copyright  by HA Labs
                </p>
            </footer>
            <pre>
                <?php var_dump($_POST) ?>
            </pre>
        </div>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/app.js') ?>"></script>
        <script>
               var SubmitGate = true;
            $(document).ready(function () {
                if ($(window).width() < 768) {
                    // do something for small screens
                    $('#block').width("80%");
                }
                else if ($(window).width() >= 768 && $(window).width() <= 992) {
                    // do something for medium screens
                    $('#block').width("60%");
                }
                else if ($(window).width() > 992 && $(window).width() <= 1200) {
                    // do something for big screens
                    $('#block').width("35%");
                }
                else {
                    // do something for huge screens
                    $('#block').width("30%");
                }
                
                $('#ShowPassword').on('change', function(){
                    if($(this).is(':checked') === true){
                        $('#Password').attr('type','text');
                        $('#RePassword').attr('type','text');
                        $(this).prev('label').html('Hide Password');
                    }else{
                        $('#Password').attr('type','password');
                        $('#RePassword').attr('type','password');
                        $(this).prev('label').html('Show Password');
                    }
                });
                
                $('#RePassword').on('change', function(){
                    if($('#RePassword').val() == $('#Password').val()){
                        $('#RePasswordWarning').hide();
                    }else{
                        $('#RePasswordWarning').show();
                    }
                }); 
                
            });
            
            
            function findSize() {
                var x = document.getElementById("Logo");
                if ('files' in x) {
                    if (x.files.length > 0) {
                        for (var i = 0; i < x.files.length; i++) {
                            var file = x.files[i];
                            var size = (file.size/1024)/1024;
                            if (size > 2) {
                                $('#FileAlert').show();
                                //$('#submit').is(':disabled');
                                SubmitGate = false;
                            } else{
                                $('#FileAlert').hide();
                                //$('#submit').is(':disabled');
                                SubmitGate = true;
                            }
                            
                        }
                    }
                }
            }
            
//            $('#password').keyup(function(){
//                     var result = checkStrength($('#Password').val());
//                     console.log(result);
//                     $('#Password').html(result);
//                     console.log(result);
//                });
                
                
            function checkStrength(password){
                console.log(password);
		//initial strength
		var strength = 0;
		
		//if the password length is less than 6, return message.
		if (password.length > 0 && password.length < 6) { 
			$('#pwdStrenth').removeClass();
			$('#pwdStrenth').addClass('progress-bar progress-bar-danger').css('width', '25%');
			$('#pwdStrenth').html('Too short') ;
		}else if (password.length == 0){
                    $('#pwdStrenth').removeClass();
                    $('#pwdStrenth').addClass('progress-bar').css('width', '100%');
                    $('#pwdStrenth').html('Type your password') ;
                }
		
		//length is ok, lets continue.
		
		//if length is 8 characters or more, increase strength value
		if (password.length > 7) strength += 1;
		
		//if password contains both lower and uppercase characters, increase strength value
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1;
		
		//if it has numbers and characters, increase strength value
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 ;
		
		//if it has one special character, increase strength value
		if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1;
		
		//if it has two special characters, increase strength value
		if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
		
		//now we have calculated strength value, we can return messages
		
		//if value is less than 2
		if (password.length > 6 && strength < 2 )
		{
			$('#pwdStrenth').removeClass();
			$('#pwdStrenth').addClass('progress-bar progress-bar-warning').css('width', '50%');
			$('#pwdStrenth').html('Weak');			
		}
		else if (password.length > 6 && strength == 2 )
		{
			$('#pwdStrenth').removeClass();
			$('#pwdStrenth').addClass('progress-bar progress-bar-info').css('width', '75%');
			$('#pwdStrenth').html('Good');	
		}
		else
		{
                    if(password.length > 6 && strength > 2){
			$('#pwdStrenth').removeClass();
			$('#pwdStrenth').addClass('progress-bar progress-bar-success').css('width', '100%');
			$('#pwdStrenth').html('Strong');
                    }
		}
	}
        </script>
    </body>
</html>
