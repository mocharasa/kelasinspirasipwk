			                
                <div class="page-title">                    
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
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">								
                
                    <div class="row">
                        <div class="col-md-9">                        
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <a href="<?php echo base_url()?>index.php/admin/artikel/tambah"><button class="btn btn-primary"><span class="fa fa-plus-square"></span> Tulis Artikel Baru</button></a> 
									<a href="<?php echo base_url()?>index.php/admin/artikel/category"><button class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Kategori</button></a>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>                                        
                                    </ul>                                
                                </div>
								<div class="panel-body">
								<?php
								  if( ! empty($post['artikel'])){
									foreach($post['artikel'] as $query):										  
									$id = $query->id_artikel;
								?>
								<div class="row">									
									<div class="col-md-3">
										<?php 												
											if(empty($query->gambar_artikel)){														
												echo '<img width="180px" height="160px" src="'.base_url().'upload/default.jpg" />';
											} else {
												echo '<img width="180px" height="160px" src="'.base_url().'upload/'.$query->gambar_artikel.'" />';
											}
										?>
										<hr/>
									</div>
									<div class="col-md-9">
										<h2><?php echo $query->judul; ?></h2>
										<p><?php echo word_limiter($query->konten,15); ?></p>
										<hr/>
										<a href="<?php echo base_url()?>index.php/admin/artikel/lihat/<?php echo $query->id_artikel;?>" data-toggle="tooltip" title="Lihat Artikel"><button class="btn btn-success"><span class="fa fa-folder-open"></span> Lihat</button></a>
										<a href="<?php echo base_url()?>index.php/admin/artikel/edit/<?php echo $query->id_artikel;?>" data-toggle="tooltip" title="Edit Artikel"><button class="btn btn-info"><span class="fa fa-pencil"></span> Edit</button></a>																																							
										<a href="#" data-toggle="tooltip" title="Hapus Data" class="mb-control" data-box="#confirm<?php echo $id;?>"><button class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</button></a>																						
									</div>									
                                </div>
								<?php 
									endforeach;
									} 
								?>
								</div>
								<div class="panel-footer">
									<?php echo $post['pagination']; ?>
								</div>
							</div>
						</div>                    
						<div class="col-md-3">
							<div class="list-group border-bottom push-down-20">
                            <a class="list-group-item active">Kategori Artikel <span class="badge badge-primary"><?php echo $jml_category; ?></span></a>
                            <?php 
								if(!empty($category)){
									foreach ($category as $list): 
									$id = $list->id_category;
							?>
							<span class="list-group-item">
								<?php 									
									
								?>
								<a href="#" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>" title="Hapus Kategori"><button class="btn btn-danger"><span class="fa fa-trash-o"></span></button></a>
								&nbsp;&nbsp; <?php echo $list->category;?> <span class="badge badge-success"><?php //echo $count; ?></span>
								<?php ?>
							</span>
                            <?php 
									endforeach;
								} else {
									echo '<span class="list-group-item"><center>Tidak ada untuk ditampilkan!</center></span>';
								}
							?>
							</div> 
						</div>
					</div>
                <!-- END PAGE CONTENT WRAPPER -->   		
		
		<?php
        foreach($post['artikel'] as $i):
            $id=$i->id_artikel;
            $judul=$i->judul;            
		?>
		<!-- MESSAGE BOX-->
		<div class="message-box animated fadeIn" data-sound="fail" id="confirm<?php echo $id;?>">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-trash-o"></span><strong>Hapus</strong> Data?</div>
					<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/artikel/hapus/'?>">
                    <div class="mb-content">
                        <p>Apakah anda yakin ingin menghapus data ini ?</p>                    
                        <p>Tekan tombol "Tidak" untuk kembali, atau tekan tombol "Ya" untuk melanjutkan.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
							<input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="submit" class="btn btn-success btn-lg" value="Ya" />
                            <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                        </div>
                    </div>
					</form>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->	
		<?php endforeach;?>			

	<?php
		foreach($category as $i):
        $id = $i->id_category;    
		$cat = $i->category;
    ?>
	<!-- ============ MODAL HAPUS DATA =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/artikel/category_hapus/'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus kategori <b><?php echo $cat;?></b> ?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!--END MODAL HAPUS DATA-->