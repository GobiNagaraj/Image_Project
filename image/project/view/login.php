<?php 
	include_once 'header.php';
	html_header("Login_Page");
 ?>
		<h1 style="text-align: center;">Login</h1>
<div class="container">
	<form method="POST" action="../controller/login-controller.php">
		<img src="../images/Gobi/LoginRed.jpg" style="margin-left: 390px; width: 350px; height: 250px">
			<input type="email" name="email_id" class="form-control" placeholder="User Email id" required ><br/>
			<input type="password" name="password" class="form-control" placeholder="User Password" required><br/>
			<input type="image" src="../images/Gobi/login-button.png" name="gobi" alt="Submit" style="margin-left: 500px; width: 120px; height: 80px" />
			<!-- <input type="submit" name="submit" class="btn btn-success form-control" value="Login"> -->
	</form>
</div>
<?php html_footer();?>