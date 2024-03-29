
	<!--PAGE CONTENT -->
        <div id="content">   
		
            <div class="inner" style="min-height: 700px;">
			    <hr />
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Area</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<?php 
							//Form ini bisa dipakai untuk menambah ataupun edit Area
							if(!empty($area[0]['id_area']))
							{
								echo "Ubah Data Area";
							}
							else
							{
								echo "Tambah Data Area";
							}
							?>                        
						</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">		
									 <?php 
											//Jika update Sukses tampilkan Notifikasi sukses
											if(@$sukses):
											echo $sukses;
											echo "<br>";
											//Jika update gagal tampilkan Notifikasi error
											else:  
											if(@$error){echo @$error;} 
											endif;
											//Tampilkan Error Validasi
											echo validation_errors(); 
											//Jika tombol Simpan ditekan, maka jalankan controller Are->function simpan untuk menambah data atau function prosesUbah untuk mengubah data
											if(!empty($area[0]['id_area']))
											{
												echo form_open_multipart('Area/prosesUbah'); 
											}
											else
											{
												echo form_open_multipart('Area/simpanArea'); 
											}											
										?>
											<div class="form-group">
												<label>Nama Area</label>
												<input class="form-control" name="nama_area" value="<?php echo isset($area[0]['nama_area'])?$area[0]['nama_area']:'';?>">
											</div>
											<div class="form-group">
												<label>Subarea</label>
												<SELECT name="id_subarea" class="form-control">
													<OPTION value="<?php echo isset($area[0]['id_subarea'])?$area[0]['id_subarea']:'';?>"><?php echo isset($area[0]['nama_subarea'])?$area[0]['nama_subarea']:'';?></OPTION>
													<?php
													if(!empty($subarea))
													{
														foreach($subarea as $data)
														{
															$id_subarea=$data['id_subarea'];
															$nama_subarea=$data['nama_subarea'];

													?>	

														<OPTION value="<?php echo $id_subarea;?>"><?php echo $nama_subarea;?></OPTION>
													<?php
														}
													}
													?>		
												</SELECT>
											</div>
											
										<button type="submit" class="btn btn-success" name="save">Simpan</button>
										<a href="<?php echo site_url('Area'); ?>"> <button type="button" class="btn btn-danger" name="batal">Kembali</button></a>
                                </div>
								
                               
                            </div>
                            <!-- /.row (nested) -->
							
                        </div>
                        <!-- /.panel-body -->
						
						
						
                    </div>
                    <!-- /.panel -->
			
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
            <!-- /.row -->
		</div>

    </div>
    <!--END PAGE CONTENT -->
