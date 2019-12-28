			                
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
                                <h3 class="panel-title"><strong>Tentang Kelas Inspirasi Purwakarta</strong></h3>                                    
                            </div>
                            <div class="panel-body">   
                            <div class="block">
                                <textarea name="tentang" class="summernote">
								<?php echo $data->tentang;?>
                                </textarea>
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

