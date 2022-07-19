 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9">
					<div class="row" style="margin-left:1pc;margin-right:1pc;">
				  <h1>DASHBOARD</h1>
				  <hr>
				  
				  <?php 
						$sql=" select * from barang where stok <= 3";
						$row = $config -> prepare($sql);
						$row -> execute();
						$r = $row -> rowCount();
						if($r > 0){
					?>	
					<?php
							echo "
							<div class='alert alert-warning'>
								<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
								<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
							</div>
							";	
						}
					?>
				  <?php $hasil_barang = $lihat -> barang_row();?>
				  <?php $hasil_beban = $lihat -> beban_row();?>
				  <?php $hasil_kategori = $lihat -> kategori_row();?>
				  <?php $stok = $lihat -> barang_stok_row();?>
				  <?php $jual = $lihat -> jual_row();?>
                    <div class="row">
                      <!--STATUS PANELS -->
					  <div class="col-md-3">
                      		<div class="panel panel-primary">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Nama Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo number_format($hasil_barang);?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='#'>Tabel Barang </a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
						  	<!--STATUS PANELS -->
					<div class="col-md-3">
                      		<div class="panel panel-warning">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Nama Beban</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo number_format($hasil_beban);?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='#'>Tabel Beban </a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-success">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Stok Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo number_format($stok['jml']);?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='#'>Tabel Barang  </i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
                      <!-- STATUS PANELS -->
                      	<div class="col-md-3">
                      		<div class="panel panel-danger">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Kategori Barang</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo number_format($hasil_kategori);?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='#'>Tabel Kategori  </a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
					</div>
				</div>
           </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
			
		  </div><! --/row -->
		 <div class="clearfix" style="padding-top:18%;"></div>
	  </section>
  </section>

