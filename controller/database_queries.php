<?php
    namespace Queries;
    
    class ProcessQueries {
        protected $result = array();
        protected $dbconn;
        
        function __construct($conn) {
            $this->dbconn = $conn;
        }
        
        public function insertStudentSurvey() {
            $name                   = $_POST['name'];
            $phone                  = $_POST['phone_number'];
            $univEmail              = $_POST['email'];
            $housing                = $_POST['housing'];
            $dorm                   = $_POST['dorm'];
            $campusPlaces           = $_POST['campus_places'];
            $beenExposed            = $_POST['exposure'];
            $exposureDesc           = $_POST['exposureDesc'];
            $exposureDate           = $_POST['exp_date'];
            $symptoms               = $_POST['symptoms'];
            $beenMedicallyEvaluated = $_POST['evaluated'];
            
            $insertQuery = "INSERT INTO heroku_c224005b36bf596.studentcases VALUES (default, '$name', '$phone', '$univEmail', '$housing', '$dorm', '$campusPlaces', '$beenExposed', '$exposureDesc' ,'$exposureDate', '$symptoms', '$beenMedicallyEvaluated', ' ', ' ')";
            
            $insertResult = $this->dbconn->query($insertQuery);
            if ( ! $insertResult) {
                print $this->dbconn->errorInfo();
            }
        }
        
        public function insertNonStudentSurvey() {
            $name                   = $_POST['name'];
            $phone                  = $_POST['phone_number'];
            $univEmail              = $_POST['email'];
            $deparment              = $_POST['department'];
            $building               = $_POST['building'];
            $supervisor             = $_POST['supervisor_name'];
            $supervisorPhone        = $_POST['supervisor_phone'];
            $supervisorEmail        = $_POST['supervisor_email'];
            $campusPlaces           = $_POST['campus_places'];
            $beenExposed            = $_POST['exposure'];
            $exposureDesc           = $_POST['exposureDesc'];
            $exposureDate           = $_POST['exp_date'];
            $symptoms               = $_POST['symptoms'];
            $beenMedicallyEvaluated = $_POST['evaluated'];
            
            $insertQuery = "INSERT INTO heroku_c224005b36bf596.nonstudentcases VALUES (default , '$name', '$phone', '$univEmail', '$deparment', '$building', '$supervisor', '$supervisorPhone', '$supervisorEmail','$campusPlaces', '$beenExposed', '$exposureDesc' ,'$exposureDate', '$symptoms', '$beenMedicallyEvaluated', ' ', ' ') ";
    
            $insertResult = $this->dbconn->query($insertQuery);
            if ( ! $insertResult) {
                print $this->dbconn->errorInfo();
            }
        }
    }