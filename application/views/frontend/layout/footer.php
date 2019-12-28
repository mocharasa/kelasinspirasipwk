			<!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                                                                                
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="<?php echo base_url()?>index.php/home/index">Home</a>                                    
									<a href="<?php echo base_url()?>index.php/home/artikel">Artikel</a>
                                    <a href="<?php echo base_url()?>index.php/home/tentang">Tentang</a>                                    
									<a href="<?php echo $profil['youtube'];?>">Youtube Channel</a>
                                    <a href="<?php echo base_url('index.php/login')?>">Login</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
							<!-- guest -->
                            <div class="col-md-3">                                
                                <h3>Data Pengunjung</h3>
								<div class="list-with-icon small">
									<div class="item">
                                        <div class="icon">
                                            <span class="fa fa-globe"></span>
                                        </div>
										<div class="text">
                                            <strong>Web Browser : </strong><br/>
											<?php echo $this->agent->browser().' v.'.$this->agent->version();?>
                                        </div>
									</div>
									<div class="item">
                                        <div class="icon">
                                            <span class="fa fa-laptop"></span>
                                        </div>
										<div class="text">
                                            <strong>Sistem Operasi : </strong><br/>
											<?php echo $this->agent->platform();?>
                                        </div>
									</div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-rss"></span>
                                        </div>
										<div class="text">
                                            <strong>IP Address : </strong><br/>
											<?php echo $this->input->ip_address();?>
                                        </div>
									</div>                                    
								</div>
                            </div>
                            <!-- ./guest -->
							                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>About Template</h3>
                                <p>Lorem ipsum dolor natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>                            
                            <!-- ./about -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Kontak</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        <?php echo $profil['alamat'];?>
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        <?php echo $profil['telepon'];?>
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>                                        
                                        <a href="mailto:<?php echo $profil['email'];?>"><?php echo $profil['email'];?></a>
                                    </div>                                    
                                </div>                                                                
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2019 Kelas Inspirasi Purwakarta                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="<?php echo $profil['facebook'];?>"><span class="fa fa-facebook"></span></a>
                            <a href="<?php echo $profil['twitter'];?>"><span class="fa fa-twitter"></span></a>                            
                            <a href="<?php echo $profil['instagram'];?>"><span class="fa fa-instagram"></span></a>                            
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->