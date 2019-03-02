<br>
<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../admin">Home</a></li>
        <li><a href="../aspirasi-belum-terjawab">Aspirasi Belum Terjawab</a></li>
        <li class="active"><a href="#">Aspirasi Terjawab</a></li><br>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
			<h3>Aspirasi Terjawab</h3>
			
			
			<?php
				include '../../../koneksi/koneksi.php';
				$sql  		= "SELECT * FROM tb_aspirasi where kd_unit=".$_SESSION['kd_unit']." and status='terjawab'";                        
				$result  	= mysqli_query($db, $sql);
				$total		= mysqli_num_rows($result);
				if(mysqli_num_rows($result) > 0){
					$no = 1;
					echo' <h5><b>Anda memiliki '. $total.' aspirasi yang telah anda jawab.</b></h5>';
					echo' <div class="table-responsive">
						<table class="table table-bordered">
							<tr>	
								<th style="text-align:center;">No</th>
								<th style="text-align:center;">Kode Aspirasi</th>
								<th style="text-align:center;">Subjek</th>
								<th style="text-align:center;">Pengirim</th>                        
								<th style="text-align:center;">Aksi</th>
							</tr>';
					while($row = mysqli_fetch_assoc($result)){
						$sql1  = "SELECT * FROM tb_mahasiswa where nim=".$row['nim']."";
						$result1 = mysqli_query($db, $sql1);
						$row1 = mysqli_fetch_assoc($result1);
							
						echo'<tr>
							<td style="text-align:center;">'.$no.'</td>
							<td>	'. $row['kd_aspirasi'].'   	</td>
							<td>	'. $row['subjek'].'			</td>
							<td>	'. $row1['nama'].'		</td>
							<td style="text-align:center;"><a href=cekkode/index.php?kd_aspirasi='.$row['kd_aspirasi'].'>Lihat Detail</a></td>
							</tr>';
						
						$no++;
                    }
                }
				else
					echo'<h5><b>Anda tidak memiliki aspirasi yang telah anda jawab.</b></h5>';
				?>
				</table>
			
			
			</div>			
		</div>
		</div>
	</div>		
</div>
</div>
</div>
<br>

