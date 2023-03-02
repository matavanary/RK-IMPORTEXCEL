<?php
include 'db.php';

if(isset($_POST["Import"])){

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 50000, ",")) !== FALSE)
	         {
				// $sql = "INSERT INTO DIGITALTENKO_FEEDBACKDRIVER (ROUTE_DATE,ROUTE_CODE,RUN_SEQ,PLAN_ACCESS_SEQ,TRUCK_LICENSE,PROVINCE,DRIVER_NAME,LOGISTIC_POINT_NAME,HOP,LOCATION,
				// PLAN_ARRIVAL,PLAN_DEPARTURE,ACTUAL_ARRIVAL,ACTUAL_DEPARTURE,OPERATION_TIME_PLAN,OPERATION_TIME_ACTUAL,TYPE,
				// PUNC_OF_ARRIVAL,PUNC_OF_DEPARTURE,FILES_NAMES,UPLOAD_TO_DB_DATE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				// $params = array($resultmark,$split[1],$split[2],$split[3],$split[4],$split[5],$resultspace,$split[7],$split[8],$split[9],
				// 				$split[10],$split[11],$split[12],$split[13],$split[14],$split[15],$split[16],$split[17],$split[18],$fileName,date("Y-m-d H:i:s"));
				// $stmt = sqlsrv_query( $conn, $sql, $params);

				
				// $sql = "INSERT into subject (SUBJ_CODE, SUBJ_DESCRIPTION, UNIT, PRE_REQUISITE,COURSE_ID, AY, SEMESTER) 
				// values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]')";

				$sql = "INSERT into subject2 (F1,F2,F3,F4,F5,F6,F7,F8,F9,F10,F11,F12,F13,F14,F15,F16,F17,F18,F19,F20,F21,F22,F23,F24,F25,F26,F27,F28,F29,F30,F31,F32,F33,F34,F35,F36,F37,F38,F39,F40,F41,F42,F43,F44,F45,F46,F47,F48,F49,F50) 
				values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','$emapData[22]','$emapData[23]','$emapData[24]','$emapData[25]','$emapData[26]','$emapData[27]','$emapData[28]','$emapData[29]','$emapData[30]','$emapData[31]','$emapData[32]','$emapData[33]','$emapData[34]','$emapData[35]','$emapData[36]','$emapData[37]','$emapData[38]','$emapData[39]','$emapData[40]','$emapData[41]','$emapData[42]','$emapData[43]','$emapData[44]','$emapData[45]','$emapData[46]','$emapData[47]','$emapData[48]','$emapData[49]','$emapData[50]')";

	          $result = sqlsrv_query( $conn, $sql );
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
	        
			 

			 //close of connection
			sqlsrv_close($conn); 
							
		 }
	}	 
?>		 