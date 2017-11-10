<!DOCTYPE html>
<html>
<body>
<?php
/*
abstract class monthsToInt{
	const January = 1;
	const Febuary = 2;
	const March = 3;
	const April = 4;
	const May = 5;
	const June = 6;
	const July = 7;
	const August = 8;
	const September = 9;
	const October = 10;
	const November = 11;
	const December = 12;
}
*/
function &configureCalAr($month, $year){
	$foundDayOne = 0;
	$dayCount = 0;
	$dayArray[5][7] = 0;

	$totalDays=cal_days_in_month(CAL_GREGORIAN,$month,$year);
	//echo $totalDays;
	$jd=gregoriantojd(1,$month,$year);  
	//echo $jd;
	$dayOfWeek = jddayofweek($jd,1);
	//echo $dayOfWeek;

	//decision statement for determining correct starting point 
	if(!strcmp($dayOfWeek, "Sunday")){
		$dayArray[0][0] = 1;
	}
	else if(!strcmp($dayOfWeek, "Monday")){
		$dayArray[0][1] = 1;
	}
	else if(!strcmp($dayOfWeek, "Tuesday")){ 
		$dayArray[0][2] = 1;
	}
	else if($dayOfWeek == "Wednesday")){
		echo "Great";
		$dayArray[0][3] = 1;
		//echo $dayArray[0][3]; 
	}
	else if(!strcmp($dayOfWeek, "Thursday")){
		$dayArray[0][4] = 1;
	}
	else if(!strcmp($dayOfWeek, "Friday")){
		$dayArray[0][5] = 1;
	}
	else if(!strcmp($dayOfWeek, "Saturday")){
		$dayArray[0][6] = 1;
	}
	//initialize the rest of the dayArray 
	for($i = 0; $i < 5; $i++){
		for($j = 0; $j < 7; $j++){
			if($dayArray[$i][$j] == 1){
				$dayCount = 1;
				$foundDayOne = 1;
			}
			else if($dayCount <= $totalDays && $foundDayOne){
			    $dayCount++;
				$dayArray[$i][$j] = $dayCount;
				if($dayCount == $totalDays){
					//echo $dayArray[0][3];
					return $dayArray;
				}
			}
		}
	}
}
$dayArray[5][7];
$dayArray = configureCalAr(November, 2017);
echo $dayArray[0][3];
for($i = 0; $i < 5; $i++){
	for($j = 0; $j < 7; $j++){
		if($dayArray[$i][$j] == 30){
			echo "well done";
		}
	}
}
?>
</body>
</html>