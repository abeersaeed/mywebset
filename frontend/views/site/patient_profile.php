
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
			<button id="btn-health" class="tablinks custom-tabs" data-tab="health">Health Information</button>
			<button id="btn-reports" class="tablinks custom-tabs" data-tab="reports">Reports</button>
		</div>

		<!-- Tab content -->
		<div id="health" class="tabcontent">
		  	<h3>Health information</h3>
		  	<div class="row" style="padding:20px;">
		  		<a class="btn btn-success" id="add-new-health-record">Add new record</a>
		  	</div>
		  	<div class="row">
			  	<table id="health-table" class="table table-striped table-bordered table-hover">
			  	<tr>
			  		<th>Height</th><th>Weight</th><th>BMI</th><th>Date</th><th></th>
			  	</tr>
			  	<?php if(!empty($healthRecords)){ ?>
			  			<?php foreach($healthRecords as $key => $value){ ?>
			  				<?php echo "<tr>"."<td>".$value->height."</td>"."<td>".$value->weight."</td>"."<td>".$value->bmi."</td>"."<td>".$value->date."</td>"."<td>"."</td>"."</tr>"; ?>
			  			<?php } ?>
			  	<?php }else{ ?>
			  		<tr><td>No records found.</td></tr>
			  	<?php } ?>
			  	</table>
			</div>
		</div>

		<div id="reports" class="tabcontent">
		  	<h3>Patient Reports</h3>
		  	<div class="row">
			  	<table id="health-table" class="table table-striped table-bordered table-hover">
			  	<tr>
			  		<th>Test Name</th><th>Test Date</th><th></th><th></th><th></th>
			  	</tr>
			  	<?php if(!empty($patientRecords)){ ?>
			  			<?php foreach($patientRecords as $key => $value){ ?>
			  				<?php echo "<tr>"."<td>".$value->test_name."</td>"."<td>".$value->test_date."</td>"."<td>"."</td>"."<td>"."</td>"."<td>"."</td>"."</tr>"; ?>
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

		$(document).ready(function(){
		    $("#health-table").DataTable();
		});
	');
?>
<?php echo $this->render('health_record_popup'); ?>