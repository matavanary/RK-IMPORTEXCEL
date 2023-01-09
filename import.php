<?php
include 'db.php';

if(isset($_POST["Import"])){

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				// $sql = "INSERT INTO DIGITALTENKO_FEEDBACKDRIVER (ROUTE_DATE,ROUTE_CODE,RUN_SEQ,PLAN_ACCESS_SEQ,TRUCK_LICENSE,PROVINCE,DRIVER_NAME,LOGISTIC_POINT_NAME,HOP,LOCATION,
				// PLAN_ARRIVAL,PLAN_DEPARTURE,ACTUAL_ARRIVAL,ACTUAL_DEPARTURE,OPERATION_TIME_PLAN,OPERATION_TIME_ACTUAL,TYPE,
				// PUNC_OF_ARRIVAL,PUNC_OF_DEPARTURE,FILES_NAMES,UPLOAD_TO_DB_DATE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				// $params = array($resultmark,$split[1],$split[2],$split[3],$split[4],$split[5],$resultspace,$split[7],$split[8],$split[9],
				// 				$split[10],$split[11],$split[12],$split[13],$split[14],$split[15],$split[16],$split[17],$split[18],$fileName,date("Y-m-d H:i:s"));
				// $stmt = sqlsrv_query( $conn, $sql, $params);

				
	           $sql = "INSERT into subject (SUBJ_CODE, SUBJ_DESCRIPTION, UNIT, PRE_REQUISITE,COURSE_ID, AY, SEMESTER) 
	            	values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]')";
					
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