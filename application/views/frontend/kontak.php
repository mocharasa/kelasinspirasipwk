			<!-- page content -->
            <div class="page-content">
				<!-- page content wrapper -->
                <div class="page-content-wrap bg-img-2 light-elements">
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    <div class="page-content-holder">
						<div class="row">
							<div class="col-md-12 this-animate" data-animate="fadeIn">                                
                                <div class="text-column text-column-centralized">
                                    <div class="text-column-icon">
                                        <span class="fa fa-home"></span>
                                    </div>                                    
                                    <h4>Kantor Kami</h4>
                                    <div class="text-column-info">
                                        <p><strong><span class="fa fa-map-marker"></span> Alamat: </strong> <?php echo $profil['alamat'];?></p>
                                        <p><strong><span class="fa fa-phone"></span> Telepon: </strong> <?php echo $profil['telepon'];?></p>
										<p><strong><span class="fa fa-comments-o"></span> Whatsapp: </strong> <?php echo $profil['whatsapp'];?></p>
                                        <p><strong><span class="fa fa-envelope"></span> E-mail: </strong> <?php echo $profil['email'];?></p>
										<p><strong><span class="fa fa-instagram"></span> Instagram: </strong> <a href="<?php echo $profil['instagram'];?>"><?php echo $profil['instagram'];?></a></p>
										<p><strong><span class="fa fa-facebook"></span> Facebook: </strong> <a href="<?php echo $profil['facebook'];?>"><?php echo $profil['facebook'];?></a></p>
										<p><strong><span class="fa fa-twitter"></span> Twitter: </strong> <a href="<?php echo $profil['twitter'];?>"><?php echo $profil['twitter'];?></a></p>
										<p><strong><span class="fa fa-youtube"></span> Youtube: </strong> <a href="<?php echo $profil['youtube'];?>"><?php echo $profil['youtube'];?></a></p>
                                    </div>
                                </div>                                                                                              
                            </div>
                        </div>
					</div>
                </div>
                <!-- ./page content wrapper -->
			<!-- page content -->
			<div class="page-content">				
				<!-- page content wrapper -->
                <div class="page-content-wrap bg-texture-1 bg-dark light-elements">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                                        					
						
                    <!-- page content holder -->
                    <div class="page-content-holder"> 
						<!-- ALERT BOX-->
						<div class="row">
							<div class="col-md-1">
								&nbsp;
							</div>
							<div class="col-md-10">					
							<?php if(isset($_SESSION['error'])){ ?>
							<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<?php echo $this->session->flashdata('error'); ?>
							</div>
							<?php } ?>
							<?php if(isset($_SESSION['success'])){ ?>
							<div class="alert alert-success" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<?php echo $this->session->flashdata('success'); ?>
							</div>
							<?php } ?>
							</div>
							<div class="col-md-1">
								&nbsp;
							</div>
						</div>
						<!-- END ALERT BLOCKS -->					
                        <div class="row">
                            <div class="col-md-12 this-animate" data-animate="fadeInLeft">                                
                                <div class="text-column">
                                    <h4>Hubungi Kami</h4>									
                                    <div class="text-column-info">
                                        Anda dapat menghubungi kami ataupun mengirim kritik dan saran melalui form dibawah ini.
                                    </div>									
                                </div>    								
                                <div class="row">
								<?php echo form_open($action, array('role'=>'form', 'class'=>'form-horizontal')); ?>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Full Name / Nama Lengkap <span class="text-hightlight">*</span></label>
                                            <input type="text" name="nama" class="form-control" required />
                                        </div>                                    
                                        <div class="form-group">
                                            <label>Phone / Nomor Telepon <span class="text-hightlight">*</span></label>
                                            <input type="text" name="telepon" class="form-control" required />
                                        </div>                                                                    
                                        <div class="form-group">
                                            <label>E-mail / Surel <span class="text-hightlight">*</span></label>
                                            <input type="email" name="email" class="form-control" required />
                                        </div>                                    
                                        <div class="form-group">
                                            <label>Subject / Perihal <span class="text-hightlight">*</span></label>
                                            <input type="text" name="subjek" class="form-control" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Message / Pesan <span class="text-hightlight">*</span></label>
                                            <textarea name="pesan" class="form-control" rows="8" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg pull-right">Send / Kirim</button>
                                    </div>
								<?php echo form_close(); ?>
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                    <!-- ./page content holder -->
					
                </div>
                <!-- ./page content wrapper -->
			</div>
			<!-- /page content -->