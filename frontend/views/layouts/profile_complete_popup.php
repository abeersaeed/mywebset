<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$check = false;

if(!Yii::$app->user->isGuest){
    if(empty($app->user->identity->profile)){
        $check = true;
    }
}

?>

<?php if($check){ ?>
<!-- Modal -->
<div id="profileCompleteModal" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                jfl;sfl;sk;fllskdf;ksfSSSS
            </div>
        </div>
    </div>
</div>

<?php 
    $this->registerJs("
        $('#profileCompleteModal').modal('show');
    ");
?>
<?php } ?>