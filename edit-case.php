<?php
    require_once("config/database_config.php");
    require_once("controller/database_queries.php");
    
    if (isset($_POST['caseID'])) {
        $caseID = $_POST['caseID'];
        $stmt   = $conn->query("SELECT * FROM heroku_c224005b36bf596.studentcases WHERE CaseID = '$caseID'")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($stmt as $row) {
            $caseID        = $row['CaseID'];
            $name          = $row['FullName'];
            $phone         = $row['PhoneNumber'];
            $email         = $row['UniversityEmail'];
            $housing       = $row['CampusHousing'];
            $dorm          = $row['DormBuilding'];
            $campusPlaces  = $row['CampusPlaces'];
            $beenExposed   = $row['BeenExposed'];
            $exposureDesc  = $row['ExposureDescription'];
            $exposureDate  = $row['ExposureDate'];
            $symptoms      = $row['Symptoms'];
            $beenEvaluated = $row['BeenMedicallyEvaluated'];
            $medConfirmed  = $row['BeenMedicallyConfirmed'];
            $confirmedDate = $row['ConfirmedDate'];
        }
        
        $symptomsList = explode(",", $symptoms);
    }
?>
<!--<input type="hidden" name="caseID" id="caseID" class="form-control" value="--><?php //echo $caseID ?><!--">-->

<div class="form-group">
    <label>Case ID:</label>
    <input class="form-control" type="text" name="CaseID" id="CaseID" value="<?php echo $caseID; ?>" readonly>
</div>

<div class="form-group">
    <label>Name:</label>
    <input class="form-control" type="text" name="FullName" id="FullName" value="<?php echo $name; ?>">
</div>

<div class="form-group">
    <label>Phone:</label>
    <input class="form-control" type="text" name="PhoneNumber" id="PhoneNumber" value="<?php echo $phone; ?>">
</div>

<div class="form-group">
    <label>Email:</label>
    <input class="form-control" type="text" name="UniversityEmail" id="UniversityEmail" value="<?php echo $email; ?>">
</div>

<div class="form-group">
    <label>Dorm:</label>
    <input class="form-control" type="text" name="DormBuilding" id="DormBuilding" value="<?php echo $dorm; ?>">
</div>

<div class="form-group">
    <label>Campus Places:</label>
    <input class="form-control" type="text" name="CampusPlaces" id="CampusPlaces" value="<?php echo $campusPlaces; ?>">
</div>

<div class="form-group">
    <label>Has been directly Exposed:</label>
    <input class="form-control" type="text" name="BeenExposed" id="BeenExposed" value="<?php echo $beenExposed; ?>">
</div>

<div class="form-group">
    <label>Exposure Description:</label>
    <input class="form-control" type="text" name="ExposureDescription" id="ExposureDescription" value="<?php echo $exposureDesc; ?>">
</div>
<div class="form-group">
    <label>Exposure Date:</label>
    <input class="form-control" type="text" name="ExposureDate" id="ExposureDate" value="<?php echo $exposureDate; ?>">
</div>

<div class="form-group">
    <script type="text/javascript">
    
		var groupList = <?php echo json_encode($symptomsList); ?>;
		console.log(groupList);
		groupList.forEach(function(element){
			$('input:checkbox[name=symptoms]').each(function () {
				if ($(this).val() == element) {
					console.log($(this).val());
					($(this).prop('checked', true));
				}
			});
		});
    </script>
    <label>Symptoms:</label><br>
    <label class="checkbox"><input type="checkbox" name="symptoms" id="symptoms" value="No Symptoms"> No Symptoms</label><br>
    <label class="checkbox"><input type="checkbox" name="symptoms" id="symptoms" value="Fever"> Fever</label><br>
    <label class="checkbox"><input type="checkbox" name="symptoms" id="symptoms" value="Cough"> Cough</label><br>
    <label class="checkbox"><input type="checkbox" name="symptoms" id="symptoms" value="Shortness of Breath"> Shortness of Breath</label><br>
</div>

<div class="form-group">
    <label>Has been medically Evaluated?:</label><br>
    <label for="yes" class="radio-inline"><input type="radio" name="evaluated" id="evaluated" value="Yes"> Yes </label><br>
    <label for="no" class="radio-inline"><input type="radio" name="evaluated" id="evaluated" value="No"> No </label>
</div>

<div class="form-group">
    <label>Has been medically confirmed?:</label><br>
    <label for="yes" class="radio-inline"><input type="radio" name="confirmed" id="confirmed" value="Yes"> Yes </label><br>
    <label for="no" class="radio-inline"><input type="radio" name="confirmed" id="confirmed" value="No"> No </label>
</div>

<div class="form-group">
    <label>Confirmed Date: <span class="req">Leave blank if no confirmation yet</span> </label>
    <div class="input-group date">
        <input type="text" class="form-control" name="confirmationDate" id="confirmationDate" placeholder="DD/MM/YYYY"/>
    </div>
</div>
