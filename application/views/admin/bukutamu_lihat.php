			                
                <div class="page-title">                    
                    <h2> <?php echo $post['subjek'];?></h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                      <div class="row">
                        <div class="col-md-12">                       
                            <div class="panel panel-default">  
								<div class="panel-heading posts">
									<div class="post-date"><span class="fa fa-clock-o"></span> Dikirim tanggal <?php echo $post['tanggal'];?></div>
									<div class="post-date"><span class="fa fa-user"></span> Oleh <?php echo $post['nama'];?> | <span class="fa fa-envelope"></span> <?php echo $post['email'];?> | <span class="fa fa-mobile"></span> <?php echo $post['telepon'];?></div>	
								</div>
                                <div class="panel-body posts">
									<div class="post-item">										
										<div class="post-text"> <?php echo $post['pesan'];?> </div>
									</div>
								</div>
                            </div>
                        <!-- END SIMPLE DATATABLE -->
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

