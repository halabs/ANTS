<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Ants || login</title>
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
                <div align="center">    
                    <div class="row" id="block" >
                        <div class="wraper padding-10 cll-sm-12" >
                            <div class="dashed-border padding-10">
                                <div align="left">
                                    <div style="border-bottom:2px solid #676767" class="form-controle-group" align="center">
                                        <img src="../../assets/images/logo.jpg" alt="Ants Logo" width="100px" />
                                        <span>ANTS</Span>
                                    </div><br>
                                    <div class="" style="">
                                        <div>
                                            <label for="orgkey" >Organisation Key</label>
                                            <input type="text" class="form-control" maxlength="4" required name="Org_Key" id="orgkey" pattern="____" placeholder="Ex:XYZA" />
                                        </div>

                                        <div  class="">
                                            <label for="userid">User ID</label>
                                            <input type="text" class="form-control" maxlength="50" required name="User_Id" id="userid"  placeholder="User name or Email" />
                                        </div>

                                        <div class="">
                                            <label for="pwd">Password</label>
                                            <input type="password" class="form-control" maxlength="20" required name="Password" id="orgkey" placeholder="User password" />
                                        </div>
                                    </div>
                                    <br />
                                    <div align="center" class="col-sm-11 ">
                                        <span class="pull-left"><label for="keep_me" ><input type="checkbox" name="Keep_me" id="keep_me" />&nbsp;Keep me login.</label></span>
                                        <input type="button" value="Login" class="btn btn-primary pull-right" />
                                        <br>
                                    </div>

                                    <br />
                                    <div>
                                        <a href="index.php/forgotpwd">Forgot password</a><br />
                                        <a href="index.php/registration">Register now</a><br />
                                        <a href="guest">Guest user</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer">&nbsp;</div>
            <footer class="navbar navbar-fixed-bottom footer-1">
                <p>
                    &copy; Copyright  by HA Labs
                </p>
            </footer>
        </div>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/app.js') ?>"></script>
        <script>
            $(document).ready(function(){
                if ($(window).width() < 768) {
                     // do something for small screens
                     $('#block').width("100%");
                 }
                 else if ($(window).width() >= 768 &&  $(window).width() <= 992) {
                     // do something for medium screens
                     $('#block').width("60%");
                 }
                 else if ($(window).width() > 992 &&  $(window).width() <= 1200) {
                     // do something for big screens
                     $('#block').width("35%");
                 }
                 else  {
                     // do something for huge screens
                     $('#block').width("30%");
                 } 
             });
        </script>
    </body>
</html>
