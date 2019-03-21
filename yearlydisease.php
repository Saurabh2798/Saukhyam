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
	$query1="select Year, SUM(Dengue_Cases) as sumdeng from ".$table_name."  GROUP BY Year;";
	//echo $query1;
	$deng_cases_by_year = $con->query($query1);

	while($row = mysqli_fetch_array($deng_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $dengue_cases[] = floatval($row['sumdeng']);
	    $year[] = $row['Year'];
	};
	//print_r($dengue_cases) ;
}
	


	# flu_cases
	$flu_cases = array();	
	$query2="select Year, SUM(Flu_Cases) as sumflu from ".$table_name."  GROUP BY Year;";

	$flu_cases_by_year = $con->query($query2);

	while($row = mysqli_fetch_array($flu_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $flu_cases[] = floatval($row['sumflu']);
	    $year[] = $row['Year'];
	};
	//print_r($flu_cases) ;



	#typhoid_cases
	$typhoid_cases = array();
	$query3="select Year, SUM(Typhoid) as sumtyphoid from ".$table_name." GROUP BY Year;";

	$typhoid_cases_by_year = $con->query($query3);

	while($row = mysqli_fetch_array($typhoid_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $typhoid_cases[] = floatval($row['sumtyphoid']);
	    $year[] = $row['Year'];
	};
	//print_r($typhoid_cases) ;



	include "yearlygraph.php";
 ?>