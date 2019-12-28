<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title><?php echo $title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/revolution-slider/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/styles.css" media="screen" />
        
    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <?php $this->load->view('frontend/layout/menu');?>
            
            <?php $this->load->view($content);?>
            
            <?php $this->load->view('frontend/layout/footer');?>
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/appear/jquery.appear.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/actions.js"></script>     
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/slider.js"></script>
        <!-- ./page scripts -->
    </body>
</html>






