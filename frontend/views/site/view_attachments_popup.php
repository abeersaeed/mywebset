<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\PatientDetails;

?>

<!-- Modal -->
<div id="ViewAttachmentsModal" class="modal fade" role="dialog">
    <div class="container" style="margin-top:60px">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="panel-heading"><h3 class="panel-title"><strong>Report Attachments</strong></h3></div>
                <div class="panel-body">
                    <div class="col-md-12" id="file-holder-box">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $this->registerJs("
        
    ");
?>