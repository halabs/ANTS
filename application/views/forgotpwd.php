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
                <form name="RegForm">
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
                                                        <label for="Email">E-mail</label>
                                                        <input type="email" name="Email" id="Email" class="form-control" maxlength="50" placeholder="Power user Email" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col-sm-12 ">
                                            <input type="button" value="Submit" class="btn btn-primary" />
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
        </div>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/js/app.js') ?>"></script>
        <script>
            $(document).resize().ready(function () {
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
            });
            //$(document).ready(function(){
            $("#orglogo").on("change", function (e) {
                var files = e.currentTarget.files;
                for (var x in files) {
                    var filesize = ((files[x].size / 1024) / 1024).toFixed(4); // MB
                    if (files[x].name != "item" && typeof files[x].name != "undefined" && filesize <= 2) {
                        $(this).next('#alert').text("File is accepted").removeAttr('class').attr('class', "alert allert-success");
                    } else {
                        $(this).next('#alert').text("Max sixe is 2MB, max file size is exceeded.").removeAttr('class').attr('class', "alert allert-danger");
                    }
                }
                $(this).next('#alert').show();
            });
            // });
        </script>
    </body>
</html>
