<br>
<div class="container">
<div class="row">
	<div class="col-md-8">	
		<div class="page-header-body">
			<div class="text text-justify">
			<h3>e-Aspirasi </h3>
			<?php
				include '../../koneksi/koneksi.php';
				if (!($_POST['kode_aspirasi']=='')){
					$kd    		= $_POST['kode_aspirasi'];
					$sql  		= "SELECT * FROM tb_aspirasi where kd_aspirasi='".$kd."'";                        
					$result  	= mysqli_query($db, $sql);
					$row		= mysqli_fetch_assoc($result);
					
					$kd_unit		= $row['kd_unit'];
				
					$sql1  			= "SELECT * FROM tb_unitkerja where kd_unit=".$kd_unit."";
					$result1 		= mysqli_query($db, $sql1);
					$row1 			= mysqli_fetch_array($result1);
										
					echo"
					<table class='table'>
							<tr>	
								<td ><label>Kode Aspirasi</label></td>
								<td>".$kd."</td>
							</tr>
							<tr>	
								<td ><label>Subjek Aspirasi</label></td>
								<td>".$row['subjek']."</td>
							</tr>
							<tr>	
								<td ><label>Unit Kerja</label></td>
								<td>".$row1['nm_unit']."</td>
							</tr>
							<tr>	
								<td ><label>Waktu Masuk</label></td>
								<td>".$row['wkt_masuk']."</td>
							</tr>
							<tr>	
								<td ><label>Waktu Terjawab</label></td>
								<td>".$row['wkt_terjawab']."</td>
							</tr>
							<tr>	
								<td ><label>Status</label></td>
								<td>".$row['status']."</td>
							</tr>
							<tr>	
								<td ><label>Aspirasi</label></td>
								<td>".$row['aspirasi']."</td>
							</tr>
							<tr>	
								<td ><label>Jawaban</label></td>
								<td>".$row['jawaban']."</td>
							</tr>
						</table>";
				}
			?>
			</div>
		</div>		
	</div>
	<div class="col-md-4">		
			<form action="index.php" method="POST">
			<div class="form-group">
				<label for="kode_keluhan" class="label-search"><font size=2><br></font><h4>Cek Aspirasi </h4></label>
				<input name="kode_aspirasi" type="text" class="form-control" placeholder="Kode Aspirasi">
			</div>
				<button type="submit" class="btn btn-primary">Submit</button><br>
					
			
			<?php
			if($_POST['kode_aspirasi']==''){
				echo'
					<Center><h5><font color="red">Silahkan isi kolom kode aspirasi kemudian submit<br>Terima Kasih</font></h5></center>
					';
				}
			?>
			</form>
			
			
	</div>
</div>
</div>
</div>
<br>