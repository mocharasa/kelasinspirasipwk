                <div class="page-title">                    
                    <h2> </h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                      <div class="row">
                        <div class="col-md-12">
						<?php echo form_open_multipart($action, array('role'=>'form', 'method'=>'post', 'class'=>'form-horizontal')); ?>	
						<?php  
							foreach ($post as $data):
						?>
						<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Edit Artikel</strong></h3>                                    
                            </div>
                            <div class="panel-body">							
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Judul</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-book"></span></span>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $data->judul;?>"/>
                                    </div>                                                                                        
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Penulis</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <input type="text" name="penulis" class="form-control" value="<?php echo $data->penulis;?>"/>
                                    </div>                                                                                        
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Tanggal</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" name="tanggal" class="form-control" readonly value="<?php echo $data->tanggal;?>"/>
                                    </div>                                                                                        
                                </div>
                            </div>
							<div class="form-group">
                                        <label class="col-md-1 col-xs-12 control-label">Kategori</label>
                                        <div class="col-md-10 col-xs-12">                                        
                                            <select class="form-control select" name="id_category" required oninvalid="this.setCustomValidity('Silahkan pilih data')">                                                
                                                <?php $sql = $this->db->query("SELECT * FROM kategori_artikel")->result();
													foreach ($sql as $d) {
													echo "<option value='$d->id_category'>".ucwords($d->category)."</option>"; 
													}
												?>
                                            </select>
                                        </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Gambar</label>
                                <div class="col-md-10 col-xs-12">
									<input type="file" class="fileinput btn-primary" name="gambar_artikel" id="gambar_artikel" data-filename-placement="inside" title="Unggah gambar"/>
									<input type="hidden" name="old_image" value="<?php echo $data->gambar_artikel;?>" />
                                </div>                                            
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Konten</label>
                                    <div class="col-md-11 col-xs-12">
									<div class="block">
										<textarea name="konten" class="summernote">								
											<?php echo $data->konten;?>
										</textarea>
									</div>
									</div>
							</div>							
							<div class="panel-footer">                                
                                <button type="submit" name="simpan" class="btn btn-primary pull-right">Simpan</button>
                            </div>
						</div>						
						<?php endforeach ?>
						<?php echo form_close(); ?>						
                        </div>                   
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   