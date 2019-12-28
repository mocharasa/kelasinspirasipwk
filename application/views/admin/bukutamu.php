			                
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
                        <div class="col-md-12">
                        <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"><strong>List Buku Tamu</strong></h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>                                        
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered datatable_simple">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>                                                
                                                <th>Tanggal</th>  
												<th>Email</th>
												<th>Subjek</th>
												<th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>										
                                        <tbody>
										<?php
										  $i = "0";
										  foreach($post as $query){
										  $i++;
										  $id = $query->id;
										?>
                                            <tr>
                                                <td><center><?php echo $i; ?></center></td>
                                                <td><?php echo $query->nama; ?></td>                                                
                                                <td><?php echo $query->tanggal; ?></td>
                                                <td><?php echo $query->email; ?></td>
												<td><?php echo $query->subjek; ?></td>
												<td><?php echo $query->status; ?></td>
												<td>
												<center>
													<a href="<?php echo base_url()?>index.php/admin/bukutamu/lihat/<?php echo $query->id;?>" data-toggle="tooltip" title="Lihat Isi Pesan"><button class="btn btn-success"><span class="fa fa-folder-open"></span> Lihat</button></a>
													<a href="#" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>" title="Hapus Pesan"><button class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</button></a>
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
        $id = $i->id;    
		$pengirim = $i->nama;
    ?>
     <!-- ============ MODAL HAPUS DATA =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/bukutamu/hapus/'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus pesan dari <b><?php echo $pengirim;?></b></p>
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
    <!--END MODAL HAPUS BARANG-->