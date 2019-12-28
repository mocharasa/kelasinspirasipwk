			<!-- page content -->
            <div class="page-content">
				
				<div class="page-content-wrap bg-texture-1 bg-dark light-elements">
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>      
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
						&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;<br/>
                </div>
				
				<!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading this-animate" data-animate="fadeIn">
                            <h2>Galeri Foto</h2>
                            <div class="block-heading-text">
                                Dibawah ini adalah galeri kegiatan yang telah dilaksanakan oleh tim Kelas Inspirasi Purwakarta.
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 gallery-filter">
                                <div class="button-panel">
                                    <button data-filter="all" class="btn btn-primary filter">All</button>
                                    <?php 
										if (!empty($kategori)){
										foreach ($kategori as $cat):
									?>
									<button data-filter=".<?php echo $cat->id_kategori;?>" class="btn btn-primary filter"><?php echo $cat->kategori;?></button>
									<?php
										endforeach;
										}
									?>                                   
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="row mix-grid thumbnails">
							<?php 
								if( ! empty($model['galeri'])){
									foreach($model['galeri'] as $post): 									
							?>
                            <div class="col-md-4 col-xs-4 mix <?php echo $post->id_kategori;?> cat_all">
                                <a class="thumbnail-item">
                                    <img width="380px" height="300px" src="<?php echo base_url()?>upload/galeri/<?php echo $post->nama;?>" alt="Nature 1"/>
                                    <div class="thumbnail-info">
                                        <p><?php echo $post->deskripsi;?></p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>                                        
										<button class="btn btn-primary" onclick="window.location.href='<?php echo base_url()?>upload/galeri/<?php echo $post->nama;?>'">	
											<span class="fa fa-eye"></span>
										</button>										
                                    </div>
                                </a>
                            </div>
							<?php
								endforeach; 
								}
							?>
                            
                        </div>
                        
                        <?php echo $model['pagination']; ?>                                              
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
				
			</div>
			<!-- /page content -->