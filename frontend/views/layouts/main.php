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
		<?php echo $content; ?>
	<!-- //contact -->	
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
