								<div class="text-column">
                                    <h3>Komentar</h3>								
                                </div>
                                <div class="block">
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-text" src="<?php echo base_url()?>assets/frontend/assets/avatar/user.jpg" alt="Dmitry Ivaniuk" width="64">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading">Dmitry Ivaniuk</h6>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class="text-muted">October 24, 2014, 15:20</p>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object img-text" src="<?php echo base_url()?>assets/frontend/assets/avatar/user6.jpg" alt="Darh Vader" width="64">
                                                    </a>
                                                    <div class="media-body">
                                                      <h6 class="media-heading">Darth Vader</h6>
                                                      <p>What? What did you say? It's not even a language...</p>
                                                      <p class="text-muted">October 24, 2014, 16:20</p>
                                                    </div>
                                                </div>                                                                                          
                                            </div>                                            
                                        </li>                                        
                                    </ul>   
									<?php
										if( ! empty($comment)){
											foreach($comment as $query):										  
											$id = $query->id_artikel;
									?>
									<ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-text" src="<?php echo base_url()?>assets/frontend/assets/avatar/user.jpg" alt="Guest" width="64">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading"><?php echo $query->nama; ?></h6>
                                                <p><?php echo $query->isi; ?></p>
                                                <p class="text-muted"><?php echo $query->tanggal; ?></p>
                                                                                                                                          
                                            </div>                                            
                                        </li>                                        
                                    </ul>
									<?php
										endforeach;
										}
									?>
                                </div>
                                <div class="text-column">
                                    <h3>Tambah Komentar</h3>
                                    <div class="text-column-info">
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
									<form class="form-horizontal" action="<?php echo base_url('index.php/home/tambah_komentar');?>" method="POST">
									<input type="hidden" name="ID" value="<?php echo $post['id_artikel']; ?>" />
										<div class="form-group">
											<label class="control-label col-sm-2">Nama :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nama">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Email :</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="email" >
											</div>
										</div>		
										<div class="form-group">
											<label class="control-label col-sm-2">Komentar :</label>
											<div class="col-sm-10">
												<textarea class="form-control"name="isi"></textarea>
											</div>
										</div>						
										<button type="submit" value="tambah_komentar" class="btn btn-warning pull-right">Kirim</button>
									</form>	
									</div>                                    
                                </div>