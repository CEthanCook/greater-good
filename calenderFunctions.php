function configureCalAr($month, $year){
	$foundDayOne = 0;
	$dayCount = 0;
	$dayArray[7][5] = 0;
	$totalDays=cal_days_in_month(CAL_GREGORIAN,$month,$year);
	echo $totalDays;
	$jd=gregoriantojd(1,$month,$year); 
	echo $jd;
	$dayOfWeek = jddayofweek($jd,1);
	echo $dayOfWeek;
	 

	<!--decision statement for determining correct starting point -->
	if(strcmp($dayOfWeek, "Sunday")) $dayArray[0][0] = 1;
	if(strcmp($dayOfWeek, "Monday")) $dayArray[1][0] = 1;
	if(strcmp($dayOfWeek, "Tuesday")) $dayArray[2][0] = 1;
	if(strcmp($dayOfWeek, "Wednesday")) $dayArray[3][0] = 1;
	if(strcmp($dayOfWeek, "Thursday")) $dayArray[4][0] = 1;
	if(strcmp($dayOfWeek, "Friday")) $dayArray[5][0] = 1;
	if(strcmp($dayOfWeek, "Saturday")) $dayArray[6][0] = 1;

	<!--initialize the rest of the dayArray -->
	for($i = 0; $i < 7; $i++){
		for($j = 0; $j < 5; $j++){
			if($dayArray[$i][$j] == 1){
				$dayCount = 1;
				$foundDayOne = 1;
			}
			if($dayCount <= $totalDays && $foundDayOne){
				$dayArray[$i][$j] = $dayCount;
				if($dayCount == $totalDays && $foundDayOne){
					return $dayArray;
				}
			}
		}
	}
}

$dayArray[7][5] = configureCalAr(11, 2017);
echo $dayArray[3][0];