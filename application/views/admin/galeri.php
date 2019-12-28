			    <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                						
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
				
                <!-- START CONTENT FRAME -->
                <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">						
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Galeri</h2>
                        </div>                                      
                        <div class="pull-right">                            
                            <a href="<?php echo base_url()?>index.php/admin/galeri/kategori"><button class="btn btn-primary"><span class="fa fa-plus-square"></span> Tambah Kategori</button></a>
							<a href="<?php echo base_url()?>index.php/admin/galeri/unggah"><button class="btn btn-primary"><span class="fa fa-upload"></span> Unggah</button></a>
                            <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                        </div> 						
                    </div>
                    
                    <!-- START CONTENT FRAME RIGHT -->
                    <div class="content-frame-right">                                                                       
                        <h4>Kategori :</h4>
                        <div class="list-group border-bottom push-down-20">
                            <a class="list-group-item active">All <span class="badge badge-primary"><?php echo $jml_foto; ?></span></a>
                            <?php 
								if(!empty($kategori)){
									foreach ($kategori as $list): 
									
							?>
							<span class="list-group-item">
								<button data-toggle="tooltip" title="Hapus Kategori" data-box="#Hapus" class="btn btn-danger mb-control"><span class="fa fa-trash-o"></span></button> 
								&nbsp;&nbsp; <?php echo $list->kategori;?> <span class="badge badge-success"></span>
							</span>
                            <?php 
									endforeach;
								} else {
									echo '<span class="list-group-item"><center>Tidak ada untuk ditampilkan!</center></span>';
								}
							?>
                        </div>                                                                        
                    </div>
                    <!-- END CONTENT FRAME RIGHT -->
                
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left"> 
												
                        <div class="pull-left push-up-10">
                            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
                        </div>
						
						<form action="hapus" method="post" enctype="multipart/form-data">
                        <div class="pull-right push-up-10">
                            <div class="btn-group">    								
                                <button data-toggle="tooltip" title="Hapus Gambar" data-box="#confirm" class="btn btn-primary mb-control"><span class="fa fa-trash-o"></span> Hapus</button>
                            </div>                            
                        </div>                        
                        <div class="gallery" id="links">
                            <?php 
									if( ! empty($model['galeri'])){
										foreach($model['galeri'] as $post): 									
							?>
                            
							<a class="gallery-item" href="<?php echo base_url()?>upload/galeri/<?php echo $post->nama;?>" title="<?php echo $post->nama;?>" data-gallery>
                                <div class="image">                              
                                    <img width="180px" height="150px" src="<?php echo base_url()?>upload/galeri/<?php echo $post->nama;?>" alt="Kelas Inspirasi"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" name="delete[]" value="<?php echo $post->id ?>" class="icheckbox"/></label></li>										
										<li><label class="check"><input type="hidden" name="img[]" value="<?php echo $post->nama ?>"/></label></li>
										<li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong><?php echo $post->kategori;?></strong>
                                    <span>
										<?php 
											if(empty($post->deskripsi)){
												echo 'Tidak ada deskripsi.';
											} else {
												echo word_limiter($post->deskripsi,3);
											}
										?>											
									</span>
                                </div>                                
                            </a>
							
							<?php
								endforeach; 
								}
							?>
                        </div>
						<!-- MESSAGE BOX-->
						<div class="message-box animated fadeIn" data-sound="fail" id="confirm">
						<div class="mb-container">
							<div class="mb-middle">
								<div class="mb-title"><span class="fa fa-trash-o"></span><strong>Hapus</strong> Data?</div>
								<div class="mb-content">
									<p>Apakah anda yakin ingin menghapus data ini ?</p>                    
									<p>Tekan tombol "Tidak" untuk kembali, atau tekan tombol "Ya" untuk melanjutkan.</p>
								</div>
								<div class="mb-footer">
									<div class="pull-right">
										<input type="submit" class="btn btn-success btn-lg" value="Ya" />
										<button class="btn btn-default btn-lg mb-control-close">Tidak</button>
									</div>
								</div>
							</div>
						</div>
						</div>
						<!-- END MESSAGE BOX-->
						
						</form>
                        <?php echo $model['pagination']; ?>													
                    </div>       
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->                   
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

				<!-- MESSAGE BOX-->
						<div class="message-box animated fadeIn" data-sound="fail" id="Hapus">
						<div class="mb-container">
							<div class="mb-middle">
								<div class="mb-title"><span class="fa fa-trash-o"></span><strong>Hapus</strong> Kategori?</div>
								<div class="mb-content">
									<p>Apakah anda yakin ingin menghapus data ini?</p>                    
									<p>Tekan tombol "Tidak" untuk kembali, atau tekan tombol "Ya" untuk melanjutkan.</p>
								</div>
								<div class="mb-footer">
									<div class="pull-right">
										<a href="<?php echo base_url()?>index.php/admin/galeri/kategori_hapus/<?php echo $list->id_kategori;?>" class="btn btn-success btn-lg">Ya</a>
										<button class="btn btn-default btn-lg mb-control-close">Tidak</button>
									</div>
								</div>
							</div>
						</div>
						</div>
				<!-- END MESSAGE BOX-->
				