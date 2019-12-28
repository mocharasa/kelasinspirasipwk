			                
                <div class="page-title">                    
                    <h2> Artikel</h2>
                </div>                   
                
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
                
                      <div class="row">
                        <div class="col-md-12">
                        <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <a href="<?php echo base_url()?>index.php/admin/artikel/tambah"><button class="btn btn-primary"><span class="fa fa-plus-square"></span> Tulis Baru</button></a> 
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>                                        
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table id="example2" class="table table-bordered table-striped datatable">
                                        <thead>
                                            <tr>											
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Penulis</th>  
												<th>Gambar</th>
                                                <th>Aksi</th>											
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										  $i = "0";
										  foreach($post as $query){
										  $i++;
										  $id = $query->id_artikel;
										?>
                                           <tr>
                                                <td><center><?php echo $i; ?></center></td>
                                                <td><?php echo $query->judul; ?></td>                                                
                                                <td><center><?php echo $query->tanggal; ?></center></td>
                                                <td><?php echo $query->penulis; ?></td>
												<td>
												<center>
												<?php 												
													if(empty($query->gambar_artikel)){														
														echo '<img width="80px" height="80px" src="'.base_url().'upload/default.jpg" />';
													} else {
														echo '<img width="80px" height="80px" src="'.base_url().'upload/'.$query->gambar_artikel.'" />';
													}
												?>
												</center>
												</td>
												<td>
												<center>
													<a href="<?php echo base_url()?>index.php/admin/artikel/lihat/<?php echo $query->id_artikel;?>" data-toggle="tooltip" title="Lihat Artikel"><button class="btn btn-success"><span class="fa fa-folder-open"></span> Lihat</button></a>
													<a href="<?php echo base_url()?>index.php/admin/artikel/edit/<?php echo $query->id_artikel;?>" data-toggle="tooltip" title="Edit Artikel"><button class="btn btn-info"><span class="fa fa-pencil"></span> Edit</button></a>																																							
													<a href="#" data-toggle="tooltip" title="Hapus Pesan" class="mb-control" data-box="#confirm<?php echo $id;?>"><button class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</button></a>
												</center>
												</td>
                                            </tr>			
										<?php   }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <!-- END SIMPLE DATATABLE -->
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   		
		
		<?php
        foreach($post as $i):
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

	