<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('head.php'); ?>
</head>

<body id="top">
<?php include('menu.php'); ?>
	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>

					<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/maza.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								
								<span class="lato size28 slim caps white">Mazatlán</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Sinaloa</span><br/>
								<span class="lato size20 normal caps white">Desde</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$3,485.00</span><br/>
							 </div>
						</div>	
					</li>	

					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						<img src="images/slider/pvallarta.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">¡Verano Mástravel Puerto Vallarta!</span><br/><br/><br/>
								<!--<span class="lato size100 slim caps white">Jalisco</span><br/>-->
								<span class="lato size20 normal caps white">Desde</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$4,795.00</span><br/>
							 </div>
						</div>	
					</li>	
					
					<!-- FADE --
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/santorini.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo">
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Santorini</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>-->
					

				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>
	<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>
<!-- WRAP -->
	<div class="wrap cstyle03">
    <div class="container mt-200 z-index100">		
		  <div class="row">
          <div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="images/maza.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="evento.php?event=1"><img src="images/spacer.png" alt=""/></a></span></div></div>
					<div class="ctitle">Mazatlán<a href="evento.php?event=1"><img src="images/spacer.png" alt=""/></a>
						<span>$3,485.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="images/pvallarta.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="evento.php?event=2"><img src="images/spacer.png" alt=""/></a></span></div></div>
					<div class="ctitle">Puerto Vallarta<a href="evento.php?event=2"><img src="images/spacer.png" alt=""/></a>
						<span>$4,795.00</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shadow cstyle05">
					<div class="fwi one"><img src="images/surfer.jpg" alt="" /><div class="mhover none"><span class="icon"><a href="#"><img src="images/spacer.png" alt=""/></a></span></div></div>
					<div class="ctitle">Proximamente<a href="#"><img src="images/spacer.png" alt=""/></a>
						<span>$00.00</span>
					</div>
				</div>			
			</div>
		  </div>
		</div>
		
		<div class="lastminute lcfix">
			<div class="container lmc">	
				<img src="images/rating-4.png" alt=""/><br/>
				Ultimo Evento: <b>Puerto Vallarta</b><!-- - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person--><br/>
				<form action="#" >
					<button class="btn iosbtn" type="submit">Mas info</button>
				</form>
			</div>
		</div>

	<?php include('footer.php'); ?>
		
	</div>
	<!-- END OF WRAP -->
	

 <!-- Javascript -->
	
    <!-- This page JS -->
	<script src="assets/js/js-index.js"></script>	
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="assets/js/jquery.easing.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
   <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-43203432-1', 'titanicthemes.com');  ga('send', 'pageview');</script>
</body>
</html>