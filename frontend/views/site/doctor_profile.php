
<style>
	/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<div class="row" style="margin-top:5%;margin-bottom: 5%;">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
		<!-- Tab links -->
		<div class="tab">
			<button id="btn-health" class="tablinks custom-tabs" data-tab="health">Patients</button>
		</div>

		<!-- Tab content -->
		<div id="health" class="tabcontent">
		  	<h3>Patients</h3>
		  	<div class="row">
			  	<table id="health-table" class="table table-striped table-bordered">
			  	<tr>
			  		<th>Name</th><th></th>
			  	</tr>
			  	<?php if(!empty($patients)){ ?>
			  			<?php foreach($patients as $key => $value){ ?>
			  				<?php echo "<tr>"."<td>".$value->getFullName()."</td>"."<td>"."<a href='".Yii::$app->urlManager->createUrl(['site/patient-records'])."' class='btn btn-primary'>View Records</a>"."</td>"."</tr>"; ?>
			  			<?php } ?>
			  	<?php }else{ ?>
			  		<tr><td>No records found.</td></tr>
			  	<?php } ?>
			  	</table>
			</div>
		</div>
	</div>
</div>
<?php 
	
	$this->registerJs('
		function openCity(evt, cityName) {

		    // Declare all variables
		    var i, tabcontent, tablinks;

		    // Get all elements with class="tabcontent" and hide them
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }

		    // Get all elements with class="tablinks" and remove the class "active"
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }

		    // Show the current tab, and add an "active" class to the button that opened the tab
		    document.getElementById(cityName).style.display = "block";
		    evt.addClass("active");
		}

		$(document).on("click",".custom-tabs",function(){
			var val = $(this).attr("data-tab");
			openCity($(this),val);
		});

		document.getElementById("health").style.display = "block";
		$("#btn-health").addClass("active");

		// $(document).ready(function(){
		//     $("#health-table").DataTable();
		// });

		$(document).on("click",".view-attachments",function(){
			$.ajax({
				url: "'.Yii::$app->urlManager->createUrl("site/fetch-attachments").'",
				type: "post",
				data: {},
				success: function(data){
					$("#file-holder-box").html(data);
					$("#ViewAttachmentsModal").modal("show");
				}
			});
		});
	');
?>
<?php echo $this->render('health_record_popup'); ?>
<?php echo $this->render('view_attachments_popup'); ?>