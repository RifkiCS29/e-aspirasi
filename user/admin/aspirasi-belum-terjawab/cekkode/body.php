<br>
<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../../admin">Home</a></li>
        <li class="active"><a href="../../aspirasi-belum-terjawab">Aspirasi Belum Terjawab</a></li>
        <li><a href="../../aspirasi-terjawab">Aspirasi Terjawab</a></li><br>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
			<h3>Aspirasi Belum Terjawab </h3>
			
			
			<?php 
				include '../../../../koneksi/koneksi.php';
				
				$kd_aspirasi 	= $_GET['kd_aspirasi'];
				$_SESSION['kd_aspirasi']=$kd_aspirasi;
				$sql  = "SELECT * FROM `tb_aspirasi` WHERE kd_aspirasi='".$kd_aspirasi."'";
				$result = mysqli_query($db, $sql);
				$row = mysqli_fetch_array($result);
				
				$nim			= $row['nim'];
				
				$sql1  			= "SELECT * FROM tb_mahasiswa where nim=".$nim."";
				$result1 		= mysqli_query($db, $sql1);
				$row1 			= mysqli_fetch_array($result1);
				
				
				echo "				
				<table class='table'>
					<tr>	
						<td ><label>Kode Aspirasi</label></td>
						<td>".$kd_aspirasi."</td>
					</tr>
					<tr>	
						<td ><label>Subjek Aspirasi</label></td>
						<td>".$row['subjek']."</td>
					</tr>
					<tr>	
						<td ><label>Pengirim</label></td>
						<td>".$row1['nama']."</td>
					</tr>
					<tr>	
						<td ><label>Waktu Masuk</label></td>
						<td>".$row['wkt_masuk']."</td>
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
						<td style{overflow:auto;}><label>Jawaban</label></td>
						<td>
							<form method='post' action='../../../../aspirasi/submitjawaban.php'>
							<div class='form-group'>
								<textarea class='form-control' id='aspr' name='jawaban'></textarea><font size='1'><br></font>		
								<button type='submit' class='btn-submit btn-primary'>Submit</button><br>
							</div>	
							</form>
								
						</td>
					</tr>
					
				</table>
				";			   
			?>
			</div>			
		</div>
		</div>
	</div>		
</div>
</div>
<br>
	

