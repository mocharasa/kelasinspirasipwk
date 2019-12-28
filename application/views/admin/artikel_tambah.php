                <div class="page-title">                    
                    <h2> </h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                      <div class="row">
                        <div class="col-md-12">
						<?php echo form_open_multipart($action, array('role'=>'form', 'method'=>'post', 'class'=>'form-horizontal')); ?>									
						<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Tulis Artikel Baru</strong></h3>                                    
                            </div>
                            <div class="panel-body">  
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Judul</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-book"></span></span>
                                        <input type="text" name="judul" class="form-control" />
                                    </div>                                                                                        
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Penulis</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <input type="text" name="penulis" class="form-control" />
                                    </div>                                                                                        
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Tanggal</label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" name="tanggal" class="form-control" readonly value="<?php echo date('Y-m-d');?>"/>
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
									<span class="help-block">Maksimum ukuran gambar 2MB</span>
								</div>                                            
                            </div>
							<div class="form-group">
                                <label class="col-md-1 col-xs-12 control-label">Konten</label>
                                    <div class="col-md-11 col-xs-12">
									<div class="block">
										<textarea name="konten" class="summernote">								
										</textarea>
									</div>
									</div>
							</div>							
							<div class="panel-footer">                                
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Publish</button>
                            </div>
						</div>						
						<?php echo form_close(); ?>						
                        </div>                   
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   