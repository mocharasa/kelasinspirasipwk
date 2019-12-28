			<!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="">Kelas Inspirasi</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title"><strong>Menu Navigasi</strong></li>
                    <li class="<?php echo activate_menu('dashboard') ?>">
                        <a href="<?php echo base_url('index.php/admin/dashboard'); ?>"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
					<li class="<?php echo activate_menu('slider') ?>">
                        <a href="<?php echo base_url('index.php/admin/slider'); ?>"><span class="fa fa-laptop"></span> <span class="xn-text">Slider</span></a>						
                    </li>
					<li class="<?php echo activate_menu('profil') ?>">
                        <a href=""><span class="fa fa-bank"></span> <span class="xn-text">Profil</span></a>
						<ul>
                            <li class="<?php echo activate_menu('profil','tentang') ?>"><a href="<?php echo base_url('index.php/admin/profil/tentang'); ?>"><span class="fa fa-home"></span> Tentang</a></li>
							<li class="<?php echo activate_menu('profil','kontak') ?>"><a href="<?php echo base_url('index.php/admin/profil/kontak'); ?>"><span class="fa fa-phone-square"></span> Kontak</a></li>							
                        </ul>
                    </li>
					<li class="<?php echo activate_menu('artikel') ?>">
                        <a href="<?php echo base_url('index.php/admin/artikel'); ?>"><span class="fa fa-file-text-o"></span> <span class="xn-text">Artikel</span></a>						
                    </li>
					<li class="<?php echo activate_menu('galeri') ?>">
                        <a href="<?php echo base_url('index.php/admin/galeri'); ?>"><span class="fa fa-camera"></span> <span class="xn-text">Galeri</span></a>
                    </li>
					<li class="<?php echo activate_menu('bukutamu') ?>">
                        <a href="<?php echo base_url('index.php/admin/bukutamu'); ?>"><span class="fa fa-envelope"></span> <span class="xn-text">Buku Tamu</span></a>						
                    </li>
					                                                                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->