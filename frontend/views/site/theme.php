<!-- banner -->
<div class="w3_banner">
    <div class="container">
	    <div class="slider">
		    <div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
				    <li>	
					    <div class="banner_text_w3layouts">
							<h3>Consult Doctors</h3>
							<p>Live and online</p>
					    </div>
				    </li>
					<li>	
						<div class="banner_text_w3layouts">
							<h3>Tellus nec enim tempus Nam </h3>
							<p>Nam tellus nec enim tempus</p>
						</div>
					</li>
					<li>							
						<div class="banner_text_w3layouts">
							<h3>Nam tellus nec enim tempus </h3>
							<p>Nam tellus nec enim tempus</p>
						</div>
				    </li>
		    	</ul>
			</div>
			<?php 
				$this->registerJs('
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: false,
						pager:true,
						nav:true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $(".events").append("<li>before event fired.</li>");
						},
						after: function () {
						  $(".events").append("<li>after event fired.</li>");
						}
					  });
				
					});
				');
			?>
	   </div>
	</div>   
</div>	
</div>

<!-- about -->
<div class="jarallax w3ls-about w3ls-section " id="about">
	<div class="container">
		<h3 class="h3-w3l">about us</h3>
		<div class="about-head text-center">
			<div class="col-md-4 col-sm-4 col-xs-6 wthree-s1 " >
				 <span class="fa fa-medkit sicon" aria-hidden="true"></span>
				 <h4>transplants</h4>
				 <p>Praesent imperdiet mollis odio,eget sodales tortor porttitor.Vac turpis egestas tortor.eget sodales tortor porttitor</p>
				 <div class="w3-button">
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wthree-s1  s1  s1-active">
				 <span class="fa fa-user-md sicon" aria-hidden="true"></span>
				 <h4>critical care</h4>
				 <p>Praesent imperdiet mollis odio,eget sodales tortor porttitor.Vac turpis egestas tortor.eget sodales tortor porttitor</p>
				 <div class="w3-button">
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wthree-s1">
				 <span class="fa fa-ambulance sicon" aria-hidden="true"></span>
				 <h4>Emergency</h4>
				 <p>Praesent imperdiet mollis odio,eget sodales tortor porttitor.Vac turpis egestas tortor.eget sodales tortor porttitor</p>
				 <div class="w3-button">
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->
