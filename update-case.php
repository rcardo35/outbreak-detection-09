<?php
    require_once("config/database_config.php");
    require_once("controller/database_queries.php");
    
        $caseID = $_POST['CaseID'];
        $name   = $_POST['FullName'];
        $phone  = $_POST['PhoneNumber'];
        $email  = $_POST['UniversityEmail'];
//        $housing       = $_POST['CampusHousing'];
        $dorm          = $_POST['DormBuilding'];
        $campusPlaces  = $_POST['CampusPlaces'];
        $beenExposed   = $_POST['BeenExposed'];
        $exposureDesc  = $_POST['ExposureDescription'];
        $exposureDate  = $_POST['ExposureDate'];
        $symptoms      = $_POST['symptoms'];
        $beenEvaluated = $_POST['evaluated'];
        $medConfirmed  = $_POST['confirmed'];
        $confirmedDate = $_POST['confirmationDate'];
    
        $insertQuery = "UPDATE heroku_c224005b36bf596.studentcases SET FullName = '$name', PhoneNumber = '$phone', UniversityEmail = '$email', CampusHousing = '', DormBuilding ='$dorm', CampusPlaces = '$campusPlaces', BeenExposed ='$beenExposed', ExposureDescription = '$exposureDesc', Symptoms = '$symptoms', BeenMedicallyEvaluated = '$beenEvaluated', BeenMedicallyConfirmed = '$medConfirmed', ConfirmedDate = '$confirmedDate' WHERE CaseID = '$caseID'";
    
        $insertResult = $conn->query($insertQuery);
        if ( ! $insertResult) {
            print $this->dbconn->errorInfo();

//        var_dump($_POST);
        }
