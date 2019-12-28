			                
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
                                    <h3 class="panel-title"><strong>Tambah Kategori</strong></h3>                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Kategori</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
												<span class="input-group-addon"><span class="fa fa-bars"></span></span>
												<input type="text" name="kategori" class="form-control" />
											</div>                                                                                        
                                        </div>
                                    </div>                                                                                                                                             

                                </div>
                                <div class="panel-footer">                                    
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-plus"></span> Submit</button>
                                </div>
                            </div>                            
							<?php echo form_close(); ?>		
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

