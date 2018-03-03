<?php 
use common\models\User;
?>
<div class="container">
	<div class="w3_agile_logo">
		<h1><a href="<?php echo Yii::$app->urlManager->createUrl(['site/index']); ?>"><i class="agileits-logo fa fa-plus" aria-hidden="true"></i>Medicate</a></h1>
	</div>
	<div class="agileits_w3layouts_nav">
		<div id="toggle_m_nav">
			<div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			</div>
		</div>
		<div id="m_nav_container" class="m_nav wthree_bg">
			<nav class="menu menu--sebastian">
				<ul id="m_nav_list" class="m_nav menu__list">
					<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="<?php echo Yii::$app->urlManager->createUrl(['site/index']); ?>" class="menu__link"><i class="menu-icon fa fa-home" aria-hidden="true"></i> Home </a></li>
					<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="#about" class="menu__link"><i class="menu-icon fa fa-info-circle" aria-hidden="true"></i>About Us </a> </li>
					<li class="m_nav_item menu__item" id="moble_nav_item_3"> <a href="#services" class="menu__link"><i class="menu-icon fa fa-cog" aria-hidden="true"></i>Services</a> </li>
					<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="#contact" class="menu__link"><i class="menu-icon fa fa-map-marker" aria-hidden="true"></i> Contact </a> </li>
					<?php if(Yii::$app->user->isGuest){ ?>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="javascript:void(0);" class="menu__link login-btn" data-toggle="modal" data-target="#myModalLogin"><i class="menu-icon fa fa-user" aria-hidden="true"></i> Login </a> </li>
					<?php }else{ ?>
						<?php if(Yii::$app->user->identity->type == User::TYPE_PATIENT){ ?>
							<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="<?php echo Yii::$app->urlManager->createUrl(['site/patient-profile']); ?>" class="menu__link"><i class="menu-icon fa fa-map-marker" aria-hidden="true"></i> My Profile </a> 
							</li>
						<?php } ?>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a id="logout" href="javascript:void(0);" class="menu__link"><i class="menu-icon fa fa-user" aria-hidden="true"></i> Logout </a> </li>
						<?php 
							$this->registerJs("
								$(document).on('click','#logout',function(){
									$.ajax({
										url : '".Yii::$app->urlManager->CreateUrl('site/logout')."',
										type : 'post',
										success : function(data){
											window.location = data;
										}
									});
								});
							"); 
						?>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</div>
</div>
<?php echo $this->render('login_popup'); ?>