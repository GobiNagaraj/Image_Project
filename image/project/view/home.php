<?php 
	include_once 'header.php';
	html_header("Home Page");
 ?>
<body background="../images/body.jpg"></body>
<nav class="navbar">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-earphone"> 1-512-554-9987</span></a></li>
			<li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-comment"> Contact Us</span></a></li>
			<li><a href="login.php" class="navbar-brand"><span class="glyphicon glyphicon-log-in"> Sign In</span></a></li>
			<li><a href="signup.php" class="navbar-brand"><span class="glyphicon glyphicon-edit"> Create Account</span></a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="navbar-brand"> Follow Us :</a>&nbsp;
			<input type="image" name="facebook" href="https://www.facebook.com" src="../images/file/f.png" style="height: 26px; margin-top: 7px;"  ></li>
			<li>&nbsp;</li>
			<li><input type="image" name="wifi" img src="../images/file/wifi.png"  style="width: 26px; margin-top: 7px;"></li>
			<li>&nbsp;</li>
			<li><input type="image" name="wifi" img src="../images/file/wifi.png"  style="width: 26px; margin-top: 7px;"></li>
			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><input type="image" name="ebay" img src="../images/file/ebay.png"  style="width: 60px; margin-top: 10px;"></li>
			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><a href="#" class="navbar-brand"> Member Of :</a>&nbsp;
			<li><input type="image" name="ebay" img src="../images/file/t.png"  style="width: 26px; margin-top: 10px;"></li>
			<li>&nbsp;</li>
			<li><input type="image" name="ebay" img src="../images/file/insta.png"  style="width: 26px; margin-top: 10px;"></li>
			
		</ul>
		</div>
		<img src="../images/file/download.jpg" class="img_skyfall">
		<div class="pull-right" style="margin-top: 30px;">
			<table>
				<tr>
					<td>
						<span class="glyphicon glyphicon-gift"><input type="submit" name="submit" class="btn btn-warning form-control" value="ManageCart" style="width:100px; margin-left: 14px;"></span></td>
					<td><label class="lbl_name">Cart is empty</label></td>
				</tr>
				<tr>
					<td>
						<span class="glyphicon glyphicon-search"><input type="text" placeholder="ProductSearch..." class="form-control" style="width:130px;"></span>
					</td>
					<td><label class="lbl_name">Advanced Search</label></td>
				</tr>
			</table><br>
			<table align="left">
				<tr>
					<td><img src="../images/file/insta.png"></td><td>&nbsp;</td>
					<td><img src="../images/file/fb1.png"></td><td>&nbsp;</td>
					<td><img src="../images/file/t.png"></td><td>&nbsp;</td>
					<td><img src="../images/file/you.png"></td><td>&nbsp;</td>
					<td><label class="lbl_name">Share</label></td>
				</tr>
			</table>			
		</div>
</nav>
<div class="border_color">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<a href="#" class="navbar-brand">Meteorites for Sale <span class="glyphicon glyphicon-chevron-right"></span></a>
			<a href="#" class="navbar-brand">Impactites & Textites for  Sale <span class="glyphicon glyphicon-chevron-right"></span></a>
			<a href="#" class="navbar-brand">Other Items <span class="glyphicon glyphicon-chevron-right"></span></a>
			<a href="#" class="navbar-brand">Spotlight <span class="glyphicon glyphicon-chevron-right"></span></a>
			<a href="#" class="navbar-brand">Gift Certificates </a>
			<a href="#" class="navbar-brand">Client Services </a>
			<a href="#" class="navbar-brand">Education &Research <span class="glyphicon glyphicon-chevron-right"></span></a>
		</ul>
	</div>
</div><br>

	<!-- Image slide -->
<header id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <h1><span class="label label-default">Powered By X-Cart reBOOT</span></h1><br>
        <h2><span class="label label-default">The Bootstrap based,fully responsive template</span></h2><br>
        <button class="btn btn-success form-control" id="btn_purchase">Purchase</button><br>
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	        <li data-target="#myCarousel" data-slide-to="3"></li>
	        <li data-target="#myCarousel" data-slide-to="4"></li>
	        <li data-target="#myCarousel" data-slide-to="5"></li>
	        <li data-target="#myCarousel" data-slide-to="6"></li>
	        <li data-target="#myCarousel" data-slide-to="7"></li>
	        <li data-target="#myCarousel" data-slide-to="8"></li>
	        <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol> 
    <div class="carousel-inner">
        <div class="item active">
           <div class="fill" style=" background-image:url('../images/gobi/1.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/0.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/3.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/4.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/5.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/6.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/7.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/8.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('../images/gobi/9.jpg');"></div>
        </div>
    </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
</header>
    <script>
    $('.carousel').carousel({
        interval: 50000
    })
    </script>

    <!-- after image_slide -->
<div class="container-fluid">
	<div class="col-md-3" style="background-color:#FFFFFF;">
		<strike><h3 id="h3_categories">Categories</h3></strike>
		<p>
			>> Meteorites for Sale (7) <br>	
			>> Impactites & Tektites for sale <br>
			>> Other Items (1) <br>
			>> Spotlight <br>
			>> Gift Certificates <br>	
			>> Client Services <br>
			>> Education & Research <br>
		</p>
	</div>
	<div class="col-md-6 ">
		<strike><h3 id="h3_skyfall">Welcome to SkyFall Meteorites</h3></strike>
		<p>
			SkyFall Meteorites is your trusted resource for all things meteoritic: sales, purchases, services, education & research.
		</p>
	</div>
	<div class="col-md-3">
		<strike><h3 class="h3_education">Education & Research</h3></strike>
		<p>
			>> Meteorite Wiki (3) <br>
			>> Impactite Wiki <br>
			>> Tektite Wiki (1) <br>
			>> Wiki Submission Guidelines
		</p>
	</div>
</div>

	<!-- content searching -->
<div class="container-fluid">
	<div class="col-md-3" style="background-color:#FFFFFF;">
		<strike><h3 id="h3_categories">Categories</h3></strike>
		<p>
			>> Meteorites for Sale (7) <br>	
			>> Impactites & Tektites for sale <br>
			>> Other Items (1) <br>
			>> Spotlight <br>
			>> Gift Certificates <br>	
			>> Client Services <br>
			>> Education & Research <br>
		</p>
	</div>
	<div class="col-md-6 ">
		<strike><h3>Spotlight</h3></strike>
			<nav class="navbar navbar-default" id="navbar_spotlight">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li class="active"><a href="new_arraivals.php" class="navbar-brand"> New Arraivals</a></li>
						<li><a href="#" class="navbar-brand"> On Sale</a></li>
						<li><a href="login.php" class="navbar-brand"> Featured</a></li>
						<li><a href="signup.php" class="navbar-brand"> Recently viewed</a></li><br>
						<table>
							<tr>
								<td><input type="text" name="new_arraivals" class="form-control" style="width: 60px;"></td>
								<td>&nbsp;</td>
								<td><a href="#" class="btn btn-primary">
          							<span class="glyphicon glyphicon-shopping-cart"></span> Add</a></td>
          						<td>&nbsp;</td>

          						<td><input type="text" name="new_arraivals" class="form-control" style="width: 60px;"></td>
								<td>&nbsp;</td>
								<td><a href="#" class="btn btn-primary">
          							<span class="glyphicon glyphicon-shopping-cart"></span> Add</a></td>
          						<td>&nbsp;</td>

          						<td><input type="text" name="new_arraivals" class="form-control" style="width: 60px;"></td>
								<td>&nbsp;</td>
								<td><a href="#" class="btn btn-primary">
          							<span class="glyphicon glyphicon-shopping-cart"></span> Add</a></td>
							</tr>
						</table><br>	
					</ul>
				</div>
			</nav>
	</div>
		<div class="col-md-3">
			<strike><h3 class="h3_education">Education & Research</h3></strike>
			<p>
				>> Meteorite Wiki (3) <br>
				>> Impactite Wiki <br>
				>> Tektite Wiki (1) <br>
				>> Wiki Submission Guidelines
			</p>
		</div>
	</div>

	<!-- footer page -->

<div class="footer">
	<div class="container-fluid">
		<div class="col-md-3">
			<strike><h4>Testimonials</h4></strike>
			<p>
				Great website, shipping was very quick! I'll be sure to e-order soon.
			</p>
		</div>
		<div class="col-md-3 ">
			<strike><h4>Help</h4></strike>
			<p>
				<a href="#">>> SkyFall's History, Mission & Values </a><br><br>
				<a href="#">>> Excellent Customer Satisfaction </a><br><br>
				<a href="#">>> Secure Shopping Experience </a><br><br>
				<a href="#">>> Guaranteed Lifetime Authenticity </a><br><br>
				<a href="#">>> Have You Found a Meteorite? </a><br><br>
				<a href="#">>> Terms & Conditions </a><br><br>
				<a href="#">>> Help Recover My Password </a><br><br>
			</p>
		</div>
		<div class="col-md-3">
			<strike><h4>Contact Us</h4></strike>
			<p>
				<a href="#"><span class="glyphicon glyphicon-comment"> Contact Us & Map</span></a><br><br>
				<a href="#"><span class="glyphicon glyphicon-envelope"> Email</span></a><br><br>
				<a href="#"><span class="glyphicon glyphicon-earphone"> 1-512-554-9987</span></a><br><br>
			</p>
		</div>
		<div class="col-md-3">
			<strike><h4>Subscribe</h4></strike>
			<p>
				Receive exclusive offers, discounts, be first to see new items & enjoy other exclusive benefits. Your privacy is guaranteed.
			</p>
		</div>

		<div class="col-md-12">
			<div class="container">
				<hr><h4 style="text-align: center;">Shop Securely</h4><hr>
			<div class="image_div">
				<img src="../images/file/Paypal.png" class="footer_image">&nbsp;
				<img src="../images/file/visa.jpg" class="footer_image">&nbsp;
				<img src="../images/file/master.png" class="footer_image">&nbsp;
				<img src="../images/file/discover.jpg" class="footer_image">&nbsp;
				<img src="../images/file/ame.jpg" class="footer_image">&nbsp;
				<img src="../images/file/link.png" class="footer_image">&nbsp;
			</div><br>
				<p>
					All content inclluded in or made available through SkyFall Meteorites, such as but not limited to text, graphics, logos, button icons, images, video clips and audio clips is the property of SkyFall Meteorites and protected by US copyright law &copy; 2015. No conntent may be copied, reposted, shared or distributed for any reason without the express permission of SkyFall Meteorites. By viewing or using our websites, you agree to be bound by these <b style="color: black;">Terms & Conditions</b>, without any limitations. All rights reserved.
				</p>
			</div>
		</div>
	</div>
</div>
<?php html_footer();?>