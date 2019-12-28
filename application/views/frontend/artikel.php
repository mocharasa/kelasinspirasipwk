			<!-- page content -->
            <div class="page-content">
				
				<div class="page-content-wrap bg-texture-1 bg-dark light-elements">
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>      
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
                </div>
				
				<!-- page content wrapper -->
                <div class="page-content-wrap bg-texture-2">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">
                        
                        <div class="block-heading this-animate" data-animate="fadeInLeft">
                            <h2>Blog Terbaru Kelas Inspirasi Purwakarta</h2>                            
                        </div>  
                        
                        <div class="row">                        
                            <div class="col-md-9">
                                
                                <div class="row">
								<?php 
									if( ! empty($model['artikel'])){
										foreach($model['artikel'] as $post): 									
								?>
									<div class="col-md-6">                                        
                                        <div class="blog-item this-animate" data-animate="fadeInUp">
                                            <div class="blog-media">
                                                <?php 												
													if(empty($post->gambar_artikel)){														
														echo '<img width="200px" height="200px" class="img-responsive" src="'.base_url().'upload/default.jpg" />';
													} else {
														echo '<img width="200px" height="200px" src="'.base_url().'upload/'.$post->gambar_artikel.'" />';
													}
												?> 
                                            </div>
                                            <div class="blog-data">
                                                <h5><a href="<?php echo base_url()?>index.php/home/artikel_lihat/<?php echo $post->id_artikel;?>"><?php echo $post->judul; ?></a></h5>
                                                <span class="blog-date"><?php echo $post->tanggal; ?></span>
                                                <p><?php echo word_limiter($post->konten,4); ?>...</p>
												<a href="<?php echo base_url()?>index.php/home/artikel_lihat/<?php echo $post->id_artikel;?>" data-toggle="tooltip" title="Lihat Artikel"><button class="btn btn-success">Read more</button></a>
                                            </div>
                                        </div>                                        
                                    </div>                                    
                                <?php endforeach; 
									}
								?>
								</div>
                                
								<?php echo $model['pagination']; ?>
								
                            </div>
                            							
							<div class="col-md-3">
                                                                
                                <div class="text-column this-animate" data-animate="fadeInRight">                                    
                                    <h4>Arsip</h4>								
																		
									

                                    <div class="list-links">                                        
                                        <a href="#">April 2014</a>
                                        <a href="#">October 2013</a>
                                        <a href="#">March 2013</a>
                                        <a href="#">December 2012</a>
                                        <a href="#">January 2012</a>
                                        <a href="#">March 2011</a>
                                        <a href="#">February 2011</a>
                                        <a href="#">January 2011</a>
                                        <a href="#">December 2010</a>                                                                                                                             
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
			</div>
			<!-- /page content -->