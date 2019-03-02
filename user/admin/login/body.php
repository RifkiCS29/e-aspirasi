<br>
<br>
<div class="container">
<div class="row">
	<div class="col-xs-2 col-md-4 col-sm-3 col-lg-4">
	</div>
	<div class="col-xs-8 col-md-4 col-sm-6 col-lg-4">
		<div class="page-header-body">
	
<?php
    /* handle error */
	if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
	
    <div class="outter-form-login">
	<div class="logo-login">
        <em class="glyphicon glyphicon-user"></em>
    </div>
		<form action="../../../koneksi/check-login-admin.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Admin</h3>
            <div class="form-group">
				<label for="password" class="label-search">Username </label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
				<label for="password" class="label-search">Password </label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div><font size="1"/></font><br>             
				<input type="submit" class="btn btn-block btn-primary" value="LOGIN" />
        </form>
    </div>
   			

</div>
</div>
<div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
	</div>
</div>
</div>
<br>
<br>
<br>
<br>