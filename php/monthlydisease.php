<?php 	

include "connection.php";

	 // Group by year

	$month = array();
	$year = array();
	$region = array();
	$season = array();
	$table_name="disease";
	
	# dengue_cases
	if(!isset($disease['Dengue_Cases'])){
	$dengue_cases = array();
	$query1="select Month, AVG(Dengue_Cases) as avgdeng from ".$table_name."  GROUP BY Month;";
	//echo $query1;
	$deng_cases_by_month = $con->query($query1);

	while($row = mysqli_fetch_array($deng_cases_by_month)){
	    /*echo $row['district']."</br>";*/
	    $dengue_cases[] = floatval($row['avgdeng']);
	    $month[] = $row['Month'];
	};
	//print_r($dengue_cases) ;
}
	


	# flu_cases
	$flu_cases = array();	
	$query2="select Month, AVG(Flu_Cases) as avgflu from ".$table_name."  GROUP BY Month;";

	$flu_cases_by_month = $con->query($query2);

	while($row = mysqli_fetch_array($flu_cases_by_month)){
	    /*echo $row['district']."</br>";*/
	    $flu_cases[] = floatval($row['avgflu']);
	    $month[] = $row['Month'];
	};
	//print_r($flu_cases) ;



	#typhoid_cases
	$typhoid_cases = array();
	$query3="select Month, AVG(Typhoid) as avgtyphoid from ".$table_name." GROUP BY Month;";

	$typhoid_cases_by_month = $con->query($query3);

	while($row = mysqli_fetch_array($typhoid_cases_by_month)){
	    /*echo $row['district']."</br>";*/
	    $typhoid_cases[] = floatval($row['avgtyphoid']);
	    $month[] = $row['Month'];
	};
	//print_r($typhoid_cases) ;



	include "monthlygraph.php";
 ?>