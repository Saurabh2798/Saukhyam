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
	$query1="select Season, AVG(Dengue_Cases) as avgdeng from ".$table_name."  GROUP BY Season;";
	//echo $query1;
	$deng_cases_by_year = $con->query($query1);

	while($row = mysqli_fetch_array($deng_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $dengue_cases[] = floatval($row['avgdeng']);
	    $season[] = $row['Season'];
	};
	//print_r($dengue_cases) ;
}
	


	# flu_cases
	$flu_cases = array();	
	$query2="select Season, AVG(Flu_Cases) as avgflu from ".$table_name."  GROUP BY Season;";

	$flu_cases_by_year = $con->query($query2);

	while($row = mysqli_fetch_array($flu_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $flu_cases[] = floatval($row['avgflu']);
	    $season[] = $row['Season'];
	};
	//print_r($flu_cases) ;



	#typhoid_cases
	$typhoid_cases = array();
	$query3="select Season, AVG(Typhoid) as avgtyphoid from ".$table_name." GROUP BY Season;";

	$typhoid_cases_by_year = $con->query($query3);

	while($row = mysqli_fetch_array($typhoid_cases_by_year)){
	    /*echo $row['district']."</br>";*/
	    $typhoid_cases[] = floatval($row['avgtyphoid']);
	    $season[] = $row['Season'];
	};
	//print_r($typhoid_cases) ;



	include "seasonlygraph.php";
 ?>