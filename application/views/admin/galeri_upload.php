			                
                <div class="page-title">                    
                    <h2> </h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                      <div class="row">
                        <div class="col-md-12">
                            <?php echo form_open_multipart($action, array('role'=>'form', 'class'=>'form-horizontal')); ?>										
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Unggah Gambar / Foto</strong></h3>                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File Gambar</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">                                                
												<input required type="file" class="fileinput" name="gambar" id="gambar" data-filename-placement="inside" title="Klik disini untuk unggah gambar" oninvalid="this.setCustomValidity('Silahkan unggah gambar/foto')" />																									
												<span class="help-block">Maksimum ukuran gambar 2MB</span>
											</div>                                                                                        
                                        </div>
                                    </div> 
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kategori</label>
                                        <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" name="id_kategori" required oninvalid="this.setCustomValidity('Silahkan pilih data')">                                                
                                                <?php $sql = $this->db->query("SELECT * FROM kategori")->result();
													foreach ($sql as $data) {
													echo "<option value='$data->id_kategori'>".ucwords($data->kategori)."</option>"; 
												}
												?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Deskripsi</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                                            <span class="help-block">Isi dengan deskripsi gambar</span>
                                        </div>
                                    </div>                                                                        

                                </div>
                                <div class="panel-footer">                                    
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-cloud-upload"></span> Upload</button>
                                </div>
                            </div>                            
							<?php echo form_close(); ?>		
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

