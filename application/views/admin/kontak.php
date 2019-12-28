			                
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
                            <?php echo form_open($action, array('role'=>'form', 'class'=>'form-horizontal')); ?>			
							<?php  
								foreach ($post as $data):
							?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Kontak Kelas Inspirasi Purwakarta</strong></h3>                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Telepon</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" name="telepon" class="form-control" value="<?php echo $data->telepon;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Whatsapp</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-comments"></span></span>
                                                <input type="text" name="whatsapp" class="form-control" value="<?php echo $data->whatsapp;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="text" name="email" class="form-control" value="<?php echo $data->email;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL Instagram</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-instagram"></span></span>
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $data->instagram;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL Facebook</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-facebook"></span></span>
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $data->facebook;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">URL Twitter</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-twitter"></span></span>
                                                <input type="text" name="twitter" class="form-control" value="<?php echo $data->twitter;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Youtube Channel</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-youtube"></span></span>
                                                <input type="text" name="youtube" class="form-control" value="<?php echo $data->youtube;?>"/>
                                            </div>                                                                                        
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea name="alamat" class="form-control" rows="5"><?php echo $data->alamat;?></textarea>
                                            <span class="help-block">Isi dengan alamat sekretariat</span>
                                        </div>
                                    </div>                                                                        

                                </div>
                                <div class="panel-footer">                                    
                                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                </div>
                            </div>
                            <?php endforeach ?>
							<?php echo form_close(); ?>		
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

