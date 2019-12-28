<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php echo $title; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->                
		<link rel="stylesheet" type="text/css" id="datatable" href="<?php echo base_url(); ?>assets/backend/js/plugins/datatables/dataTables.bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/backend/css/theme-default.css"/>
		<style>
		table.dataTable tbody td {
		  vertical-align: middle;
		}
		table.dataTable thead th {
		  text-align: center;
		  vertical-align: middle;
		}
		</style>
        <!-- EOF CSS INCLUDE -->
		<!-- page script -->
       
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <?php $this->load->view('admin/layout/sidebar'); ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout" title="Log Out"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-bell"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-bell"></span> Notifikasi</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                       
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><marquee width="1200px auto">Kelas Inspirasi Purwakarta</marquee></li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <?php $this->load->view($content); ?>  
				
            </div>            
            <!-- END PAGE CONTENT -->			
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Apakah anda yakin ingin melakukan Log Out ?</p>                    
                        <p>Tekan tombol "Tidak" untuk kembali, atau tekan tombol "Ya" untuk melanjutkan.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/login/logout');?>" class="btn btn-success btn-lg">Ya</a>
                            <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/backend/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/backend/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap.min.js"></script> 
		<!-- Alternative -->
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/icheck/icheck.min.js'></script>        		
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/scrolltotop/scrolltopcontrol.js'></script>        
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                		
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap-timepicker.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap-colorpicker.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap-file-input.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/owl/owl.carousel.min.js'></script> 
		<script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/moment.min.js'></script>
		<script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/daterangepicker/daterangepicker.js'></script>
		<script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/summernote/summernote.js'></script>		
				    		
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/datatables/jquery.dataTables.min.js'></script>    	
		
		<script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/dropzone/dropzone.min.js'></script>
        <script type="text/javascript" src='<?php echo base_url(); ?>assets/backend/js/plugins/fileinput/fileinput.min.js'></script>                
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/noty/jquery.noty.js'></script>        
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/noty/layouts/center.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/noty/layouts/topLeft.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/noty/layouts/topRight.js'></script>                        
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/backend/js/plugins/noty/themes/default.js'></script>
		<!-- END PLUGINS -->        
        <!-- START TEMPLATE -->                
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/actions.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
			
    <!-- END SCRIPTS -->        
    </body>
</html>






