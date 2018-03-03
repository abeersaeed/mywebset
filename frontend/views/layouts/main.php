<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\asset_b\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
		

<div class="agileits_main">
		<!-- header -->
		<?php echo $this->render('header'); ?>
		<!--// header -->
		<!-- banner -->
		<div class="w3_banner">
		    <div class="container">
			    <div class="slider">
				    <div class="callbacks_container">
					   <ul class="rslides callbacks callbacks1" id="slider4">
						    <li>	
							    <div class="banner_text_w3layouts">
									<h3>Nam tellus nec enim tempus</h3>
									<p>Nam tellus nec enim tempus</p>
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


		<?php echo $content; ?>
	<!-- //contact -->	


<!-- Tooltip -->
<div class="tooltip-content">
	<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">medicate</h4>
				</div>
				<div class="modal-body">
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/1.jpg" class="img-responsive" alt="image">
					<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Appointment -->
<div class=" w3_agileits-apt">	
	<div class="container">
		<div class="agile-caption">
			<h4 class="apt-t"><span class="apt-t1">Find a doctor </span><span class="apt-t2">Now</span></h4>
			<div class="agileits-apmnt-button">
				<a href="#" data-toggle="modal" data-target="#myModal1">Consult Now</a>
			</div>
		</div>
	</div>	
</div>
<!-- //Appointment -->

<!-- //Tooltip -->
<div class="jarallax w3ls-services w3ls-section" id="services">
<div class="container">
	<h3 class="h3-w3l">services</h3>
	<div class="services-head text-center">
		<h4>the skill to heal.the spirit to care</h4>
		<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
	</div>
	<div class="services-bg">
		<h6>Hope lives here</h6>
		<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
	</div>
</div>	
<div class="wthree-services-bottom">
	<div class="container">
		<div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1 " >
			 <span class="fa fa-certificate sicon" aria-hidden="true"></span>
			 <span class="num">01</span><h4>service1</h4>
			 <p>Praesent imperdiet mollis odio, eget sodales tortor porttitor.Vac turpis egestas tortor.</p>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1  sb1">
			 <span class="fa fa-heartbeat sicon" aria-hidden="true"></span>
			 <span class="num">02</span><h4>service2</h4>
			 <p>Praesent imperdiet mollis odio, eget sodales tortor porttitor.Vac turpis egestas tortor.</p>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1 sb2">
			 <span class="fa fa-star-o sicon" aria-hidden="true"></span>
			 <span class="num">03</span><h4>service3</h4>
			 <p>Praesent imperdiet mollis odio, eget sodales tortor porttitor.Vac turpis egestas tortor.</p>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-6 wthree-sb1">
			 <span class="fa fa-plus-circle sicon" aria-hidden="true"></span>
			 <span class="num">04</span><h4>service4</h4>
			 <p>Praesent imperdiet mollis odio, eget sodales tortor porttitor.Vac turpis egestas tortor.</p>
		</div>
		<div class="clearfix"></div>
	</div>	
</div>
</div>	

<!-- modal -->
<div class="modal about-modal fade" id="myModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Quick</h4>
					<h5>appointment booking</h5>
			</div> 
			<div class="modal-body">
					<div class="wthree-info">
						<h3>Fill details below to book an appointment</h3>
						<div class="login">
							<form action="#" method="post">
									 <input type="text" class="user" name="email" placeholder="Name" required="">
									 <input type="text" name="phone" placeholder="Phone" required=""> 
									<input placeholder="Date" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
									 <select required="">
										<option value="">Select Time</option>
										<option value="1">08:00-8:30</option>
										<option value="2">08:30-9:00</option>
										<option value="3"> 09:00-9:30</option>
										<option value="4">09:30-10:00</option>
									 </select>
									 <select required="">
										<option value="">Select City</option>
										<option value="1">city1</option>
										<option value="2">city2</option>
										<option value="3"> city3</option>
										<option value="4">city4</option>
									 </select>
									 <select required="">
										<option value="">Select Hospital/Clinic</option>
										<option value="1">Hospital1</option>
										<option value="2">Hospital2</option>
										<option value="3">Hospital3</option>
										<option value="4">Hospital4</option>
									 </select>
									 <select required="">
										<option value="">Select Speciality</option>
										<option value="1">Dermatology</option>
										<option value="2">ENT</option>
										<option value="3"> Genaral Medicine</option>
										<option value="4">Nutritionist</option>
									 </select>
			
									 <input type="submit" value="request appointment">
							</form>
						</div>	
 					</div> 
					<div class="clearfix"> </div>
				</div>
		   </div>
	</div>
</div>
<!-- //modal -->

<!-- contact -->	
<div class="contact w3ls-section" id="contact">
	<div class="container">
		<h3 class="h3-w3l">get in touch</h3>
		<div class="contact-grids">
			 <div class="col-md-6 col-sm-6 contact-left">
				<form action="#" method="post">
					<input type="text" class="name" name="name" placeholder="First Name" required="">
					<input type="text" class="name" name="name" placeholder="Last Name" required="">
					<input type="email" class="name" name="name" placeholder="Email" required="">
					<input type="text" class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Your Message" required=""></textarea>
					<input type="submit" value="SEND">
				</form>
			</div>
			<div class="col-md-6 col-sm-6 contact-left" data-wow-duration="2s" data-wow-delay="0.5s">
				<h2>Contact Information</h2>
				<p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industries "</p>
				<ul class="contact-list">
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>756 global Place, New York.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 2222 222</li>
				</ul>
				<ul class="social-icons3">
					<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
					<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

				</ul>
			</div>						
			<div class="clearfix"> </div>
		</div>		
	</div>	
</div>

<!-- footer-->	
<div class="agileits_w3layouts-footer" style="bottom: 0;">
	<!-- <div class="agileits-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1491897561113" style="border:0" allowfullscreen></iframe>
	</div> -->
	<div class="copy-right text-center">
	<span class="agileits-copy fa fa-plus" aria-hidden="true"></span>
	<p>&copy; 2018 myWebSet. All rights reserved </p>
	</div>	
</div>	
<!-- footer-->	
<?php echo $this->render('profile_complete_popup'); ?>
<?php $this->endBody() ?>
<script type="text/javascript" defer>
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</body>
</html>
<?php $this->endPage() ?>
