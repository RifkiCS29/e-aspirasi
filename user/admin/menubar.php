<div class="container">
<div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../../../belajar">e-Aspirasi FKTI</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="../../../belajar">Home</a></li>
					<li><a href="../../tentang.php">Tentang</a></li> 
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-user"></span>
						<font size=4> Admin <?php echo $_SESSION['nama'];?></font></h4>
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../../koneksi/logout.php">Logout</a></li>
					</ul>
					</li>
				</ul>
				</div>
			</div>
		</nav>
  	</div>
</div>
</div>