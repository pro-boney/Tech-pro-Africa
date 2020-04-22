<!DOCTYPE html>
<html>
<head>
	<title>TechPro Africa</title>
	@include('include.header')
</head>
<body>
	<div style="background:black; color:white;">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<i class="fas fa-1x fa-phone-square-alt"></i>
				0776657791
			</div>
			<div class="col-xs-6 col-md-3">
				<i class="fab  fa-facebook"></i>
				facebook
			</div>
			<div class="col-xs-6 col-md-3">
				<i class="fab fa-whatsapp"></i>
				whatapp
			</div>
			<div class="col-xs-6 col-md-3">
				<i class="fas fa-1x fa-envelope" style="color:white;"></i>
				techproafrica@gmail.com
			</div>
		</div>
	</div>
	<div class="myNav">
		@include('include.nav')
	</div>
	<div>
		@yield('body')
	</div>
	<div id="foot">
		@include('include.footer')
	</div>

</body>
</html>