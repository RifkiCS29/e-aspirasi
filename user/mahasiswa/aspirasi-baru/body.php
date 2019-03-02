<br>




<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../mahasiswa">Home</a></li>
        <li class="active"><a href="#">Aspirasi Baru</a></li>
		<li><a href="../aspirasi-belum-terjawab">Aspirasi Belum Terjawab</a></li>
        <li><a href="../aspirasi-terjawab">Aspirasi Terjawab</a></li><br><br>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
			<h3>Aspirasi Baru </h3>
				<h5><b>Silahkan isi seluruh borang yang tersedia pada form dibawah ini untuk mengajukan aspirasi anda.</b></h5>	
				<form action="../../../aspirasi/aspirasibaru.php" method="post">
				<div class="form-group">
					<label for="usr">Subjek</label>
						<input type="text" class="form-control" id="usr" name="subjek">
					<label for="sel1">Unit Kerja</label>
						<select name="unit_kerja" class="form-control" id="sel1">
							<option></option>
							<?php
								include '../../../koneksi/koneksi.php';
								$query = mysqli_query($db,"SELECT * FROM tb_unitkerja ORDER BY kd_unit ASC");								
								$jumlah=$query->num_rows;
								if($jumlah > 0){
									while($data = $query->fetch_array()){
										echo '<option value='.$data['kd_unit'].'>'.$data['nm_unit'].'</option>';
									}
								}
							?>
						</select>
					<label for="aspr">Aspirasi </label>
						<textarea class="form-control" id="aspr" name="aspirasi"></textarea><font size="1"><br></font>		
					<button type="submit" class="btn-submit btn-primary">Submit</button><br>
				</div>
				</form>
		</div>
		</div>
	</div>		
</div>
</div>
</div>
<br>
	

