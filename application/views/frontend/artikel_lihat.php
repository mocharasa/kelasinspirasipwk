			<!-- page content -->
            <div class="page-content">				
				<?php /*
					$count_my_page = ('hitcounter.txt');
					$hits = file($count_my_page);
					$hits[0]++;
					$fp = fopen($count_my_page, "w");
					fputs($fp, '$hits[0]');
					fclose($fp);
					*/
				?>
				<div class="page-content-wrap bg-texture-1 bg-dark light-elements">
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>      
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
                </div>
				
				<!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">

                        <div class="row">                        
                            <div class="col-md-9">
                                <div class="blog-content">                                    
                                    <h2><?php echo $post['judul'];?></h2>
                                    <span class="blog-date"><span class="fa fa-clock-o"></span>&nbsp;<?php echo $post['tanggal'];?>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="fa fa-eye"></span>&nbsp;<?php //echo $hits[0];?></span>                                    
										<?php 
											if(empty($post['gambar_artikel'])){														
												echo '<center><img src="'.base_url().'upload/default.jpg" /></center>';
											} else {
												echo '<center><img width="500px" heigth="500px" class="img-responsive" src="'.base_url().'upload/'.$post['gambar_artikel'].'" /></center>';
											}
										?>
										<hr />
										<?php echo $post['konten'];?> 
										<hr />										
                                </div>
                                
                                <?php require_once('komentar.php');?>
                            </div>
                            <div class="col-md-3">                                                        
                                <div class="text-column this-animate" data-animate="fadeInRight">                                    
                                    <h4>Artikel Terbaru</h4>
                                    <div class="list-links">
									<?php foreach($recent as $post):?>	
                                        <a href="<?php echo base_url()?>index.php/home/artikel_lihat/<?php echo $post->id_artikel; ?>"><?php echo $post->judul; ?></a>
                                        
                                    <?php endforeach;?>
									</div>
                                </div>
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