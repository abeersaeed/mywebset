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
<!-- //banner -->
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
<div id="grid-gallery" class="grid-gallery">
<div class="container">
<h3 class="h3-w3l">lab</h3>
	<section class="grid-wrap">
		<ul class="grid">
			<li class="grid-sizer"></li><!-- for Masonry column width -->
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/e.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/f.jpg" alt="img06"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/g.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/h.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/i.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/j.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/e.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/f.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/g.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/h.jpg" alt="img06"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/i.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/j.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img01"/>
				</figure>
			</li>
		</ul>
		<div class="clearfix"></div>
	</section><!-- // grid-wrap -->
	<section class="slideshow">
		<ul>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Chillwave nihil occupy</h3>
						<p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Kale chips lomo biodiesel</h3>
						<p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/e.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Exercitation occaecat</h3>
						<p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/f.jpg" alt="img06"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/g.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Exercitation occaecat</h3>
						<p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/h.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/i.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/j.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Bushwick selvage synth</h3>
						<p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Bottle wayfarers locavore</h3>
						<p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Nam tellus nec enim tempus</h3>
						<p>Pickled hoodie Pinterest 90's proident church-key chambray. Salvia incididunt slow-carb ugh skateboard velit, flannel authentic hoodie lomo fixie photo booth farm-to-table. Minim meggings Bushwick, semiotics Vice put a bird.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Vice velit chia</h3>
						<p>Tattooed assumenda chambray cray officia. 90's mollit ethnic church-key ex eu pop-up gentrify. Tonx raw denim eu, bitters nesciunt distillery Neutra pop-up. Drinking vinegar Helvetica Truffaut tattooed.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Brunch semiotics</h3>
						<p>Gentrify High Life adipisicing, duis slow-carb kogi Tumblr raw denim freegan Echo Park. Fingerstache laboris pork belly messenger bag, you probably haven't heard of them vegan twee Intelligentsia Vice Etsy pickled put a bird on it Godard roof party. Meggings small batch dreamcatcher velit.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/e.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Chillwave nihil occupy</h3>
						<p>Marfa exercitation non, beard +1 hashtag cardigan gluten-free mixtape church-key ugh eu Portland leggings. Ennui farm-to-table fingerstache keytar Echo Park tattooed. Seitan qui artisan, aliquip cupidatat sunt Portland wayfarers duis.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/f.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Kale chips lomo biodiesel</h3>
						<p>Lomo church-key whatever, seitan laborum drinking vinegar lo-fi semiotics nihil meh. Skateboard irure before they sold out Banksy. Narwhal High Life lomo aliqua drinking vinegar. PBR&B placeat proident, craft beer forage DIY nostrud meh flexitarian keytar Helvetica.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/g.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Exercitation occaecat</h3>
						<p>Skateboard Truffaut bicycle rights seitan normcore. Culpa lo-fi ennui, Pinterest before they sold out Echo Park roof party sapiente aesthetic consequat Truffaut freegan voluptate. Kogi banh mi vero nihil, freegan gluten-free cliche. Forage Etsy laboris anim normcore, McSweeney's ex.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/h.jpg" alt="img06"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Selfies viral four</h3>
						<p>Viral roof party locavore flexitarian nihil fanny pack actually Odd Future anim commodo. Sunt yr aute, enim quis plaid sartorial duis leggings lo-fi gluten-free. Tote bag flexitarian pug stumptown, Cosby sweater try-hard ethnic scenester. Mumblecore +1 hoodie accusamus skateboard slow-carb, Thundercats Godard placeat craft beer meh enim trust fund.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/i.jpg" alt="img01"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Photo booth skateboard</h3>
						<p>Culpa pour-over cray nesciunt dreamcatcher. Meggings distillery cillum raw denim voluptate, single-origin coffee lo-fi ethical iPhone four loko nihil salvia. Biodiesel ea Intelligentsia quis deep v, American Apparel trust fund slow-carb synth semiotics quinoa Brooklyn pour-over nulla Godard.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/j.jpg" alt="img02"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Ex fashion axe</h3>
						<p>Bespoke irony tousled nihil flexitarian, salvia tempor nostrud Bushwick hashtag Austin ethnic disrupt. Beard Helvetica nihil, chia craft beer Wes Anderson keytar dolore. Irure incididunt flexitarian photo booth cillum, YOLO deserunt Brooklyn artisan. Brunch assumenda irony, Blue Bottle roof party DIY ullamco quis.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/a.jpg" alt="img03"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Thundercats next level</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/b.jpg" alt="img04"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Bushwick selvage synth</h3>
						<p>Ethical Truffaut tofu food truck cred cornhole. Irure umami Austin cornhole blog ethical. Aliqua yr Truffaut, adipisicing hashtag Shoreditch eiusmod tempor literally vinyl.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/c.jpg" alt="img05"/>
				</figure>
			</li>
			<li>
				<figure>
					<figcaption>
						<h3>Bottle wayfarers locavore</h3>
						<p>Pork belly irony Shoreditch fashion axe DIY. Portland banjo irony, squid gentrify Austin fixie church-key magna. Marfa artisan Echo Park, McSweeney's banjo sunt keytar tofu. Brooklyn PBR single-origin coffee disrupt polaroid ut, gluten-free XOXO plaid magna.</p>
					</figcaption>
					<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/d.jpg" alt="img01"/>
				</figure>
			</li>
		</ul>
		<nav>
			<span class="icon nav-prev"></span>
			<span class="icon nav-next"></span>
			<span class="icon nav-close"></span>
		</nav>
		<div class="info-keys icon">Navigate with arrow keys</div>
	</section><!-- // slideshow -->
</div>
</div><!-- // grid-gallery -->
	<?php 
		$this->registerJs("
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		");
	?>
<!-- //laboratory-section -->
	<!-- team -->
	<div class="team w3ls-section" id="team">
		<div class="container">
				<div class="w3-agileits-team-title"> 
					<h3 class="h3-w3l">team</h3>
					<div id="horizontalTab">
					<div class="resp-tabs-container">
					<ul class="col-md-6 col-sm-6 resp-tabs-list">
						<li>
							<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/t1.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/t2.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/t3.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo Yii::getAlias('@external_url'); ?>/images/t4.jpg" alt=" " class="img-responsive" />
						</li>
					</ul>
						<div class="tab1">
							<div class="col-md-6 col-sm-6 team-Info-agileits">
								<h4>Dr.Evelyn </h4>
								<span>Neurologist</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								<div class="social-bnr-agileits footer-icons-agileinfo">
									<ul class="social-icons3">
										<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
										<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
										<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
										<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

									</ul>
								</div>							
							</div>
							
							<div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="tab2">
							<div class="col-md-6 col-sm-6 team-Info-agileits">
								<h4>Dr.Lawrence</h4>
								<span>cardiologist</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>							
							</div>
							<div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="tab3">
							<div class="col-md-6 col-sm-6 team-Info-agileits">
								<h4>Dr.Robinson</h4>
								<span>psychiatrist</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
								<div class="social-bnr-agileits footer-icons-agileinfo">
									<ul class="social-icons3">
										<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
										<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
										<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
										<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

									</ul>
								</div>							
							</div>
							<div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="tab4">
							<div class="col-md-6 col-sm-6 team-Info-agileits">
								<h4>Dr.Myrick</h4>
								<span>dermatologist</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>

								</ul>
							</div>							
							</div>
							<div class="col-md-6 col-sm-6 team-img-w3-agile"></div>
							<div class="clearfix"> </div>
						</div>
						</div>
						<div class="clearfix"> </div>
						
				</div>
			</div>
		</div>
	</div>
<!-- //team -->

<!-- Appointment -->
<div class=" w3_agileits-apt">	
<div class="container">
<div class="agile-caption">
	<h4 class="apt-t"><span class="apt-t1">Find a doctor today</span> and Book your appointment<span class="apt-t2">Now</span></h4>
	<div class="agileits-apmnt-button">
		<a href="#" data-toggle="modal" data-target="#myModal1">Book online</a>
	</div>
</div>
</div>	
</div>
<!-- //Appointment -->	
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