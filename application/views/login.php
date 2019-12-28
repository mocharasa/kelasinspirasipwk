<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Kelas Inspirasi Purwakarta</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/backend/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> Admin</div>
                    <?php echo form_open($action, array('role'=>'form', 'class'=>'form-horizontal')); ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="login" class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>                                        
                    <?php echo form_close(); ?>		
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Kelas Inspirasi Purwakarta
                    </div> 
					<div class="pull-right">
                        <a href="<?php echo base_url()?>index.php/home/index">Go to Home</a>
                    </div>                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>






