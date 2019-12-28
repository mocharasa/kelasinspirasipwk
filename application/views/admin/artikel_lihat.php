			                
                <div class="page-title">                    
                    <h2> <?php echo $post['judul'];?></h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                      <div class="row">
                        <div class="col-md-12">                       
                            <div class="panel panel-default">  
							
								<div class="panel-body posts">
									<div class="post-item">
										<div class="post-date"><span class="fa fa-clock-o"></span> Diposting <?php echo $post['tanggal'];?></div>
										<div class="post-date"><span class="fa fa-user"></span> Oleh <?php echo $post['penulis'];?></div>
										<div class="post-text"> 
											<?php 
											if(empty($post['gambar_artikel'])){														
												echo '<center><img src="'.base_url().'upload/default.jpg" /></center>';
											} else {
												echo '<center><img width="400px" heigth="400px" class="img-responsive" src="'.base_url().'upload/'.$post['gambar_artikel'].'" /></center>';
											}
											?>
											<hr />
											<?php echo $post['konten'];?> 
											<hr />
										</div>
									</div>
								</div>
															                                
                            </div>
                        <!-- END SIMPLE DATATABLE -->
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

