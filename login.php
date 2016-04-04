<!DOCTYPE html>
<html>
  <head>
	<?php include('head.php'); ?>
  </head>
  <body>
	<!-- 100% Width & Height container  -->
	<div class="login-fullwidith">
		
		<!-- Login Wrap  -->
		<div class="login-wrap">
			<img src="images/maslogo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
				<div class="cpadding50">
					<input type="text" class="form-control logpadding" placeholder="Username">
					<br/>
					<input type="text" class="form-control logpadding" placeholder="Password">
				</div>
			</div>
			<div class="login-c2">
				<div class="logmargfix">
					<div class="chpadding50">
							<div class="alignbottom">
								<button class="btn-search4"  type="submit" onclick="errorMessage()">Enviar</button>							
							</div>
					</div>
				</div>
			</div>
			<div class="login-c3">
				<div class="left"><a href="#" class="whitelink"><span></span>Website</a></div>
				<div class="right"><a href="#" class="whitelink">Lost password?</a></div>
			</div>			
		</div>
		<!-- End of Login Wrap  -->
	
	</div>	
	<!-- End of Container  -->

	<!-- Javascript  -->
	<script src="assets/js/initialize-loginpage.js"></script>
	<script src="assets/js/jquery.easing.js"></script>
	<!-- Load Animo -->
	<script src="plugins/animo/animo.js"></script>
	<script>
	function errorMessage(){
		$('.login-wrap').animo( { animation: 'tada' } );
	}
	</script>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="dist/js/bootstrap.min.js"></script><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-43203432-1', 'titanicthemes.com');  ga('send', 'pageview');</script>
  </body>
</html>