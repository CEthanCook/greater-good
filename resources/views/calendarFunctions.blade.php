
@extends('layouts.app')

@section('content')
<body>
<?php
function &configureCalAr($month, $year){
	$foundDayOne = 0;
	$dayCount = 0;
	$dayArray[5][7] = 0;
	$monthNum = 0;
	if(strcmp($month, "January") == 0){
		$monthNum = 1;
	}
	elseif(strcmp($month, "Febuary") == 0){
		$monthNum = 2;
	}
	elseif(strcmp($month, "March") == 0){
		$monthNum = 3;
	}
	elseif(strcmp($month, "April") == 0){
		$monthNum = 4;
	}
	elseif(strcmp($month, "May") == 0){
		$monthNum = 5;
	}
	elseif(strcmp($month, "June") == 0){
		$monthNum = 6;
	}
	elseif(strcmp($month, "July") == 0){
		$monthNum = 7;
	}
	elseif(strcmp($month, "August") == 0){
		$monthNum = 8;
	}
	elseif(strcmp($month, "September") == 0){
		$monthNum = 9;
	}
	elseif(strcmp($month, "October") == 0){
		$monthNum = 10;
	}
	elseif(strcmp($month, "November") == 0){
		$monthNum = 11;
	}
	elseif(strcmp($month, "December") == 0){
		$monthNum = 12;
	}
	$totalDays=cal_days_in_month(CAL_GREGORIAN,$monthNum,$year);
	//echo $totalDays;
	$jd=gregoriantojd(1,$monthNum,$year);
	//echo $jd;
	$dayOfWeek = jddayofweek($jd,1);
	//echo $dayOfWeek;
	//decision statement for determining correct starting point
	if(strcmp($dayOfWeek, "Sunday") == 0){
		$dayArray[0][0] = 1;
	}
	else if(strcmp($dayOfWeek, "Monday") == 0){
		$dayArray[0][1] = 1;
	}
	else if(strcmp($dayOfWeek, "Tuesday") == 0){
		$dayArray[0][2] = 1;
	}
	else if(strcmp($dayOfWeek, "Wednesday") == 0){
		echo "Great";
		$dayArray[0][3] = 1;
		echo $dayArray[0][3];
	}
	else if(strcmp($dayOfWeek, "Thursday") == 0){
		$dayArray[0][4] = 1;
	}
	else if(strcmp($dayOfWeek, "Friday") == 0){
		$dayArray[0][5] = 1;
	}
	else if(strcmp($dayOfWeek, "Saturday") == 0){
		$dayArray[0][6] = 1;
	}
	//initialize the rest of the dayArray
	for($i = 0; $i < 5; $i++){
		for($j = 0; $j < 7; $j++){
			if($dayArray[$i][$j] == 1){
				$dayCount = 1;
				$foundDayOne = 1;
			}
			if($dayCount <= $totalDays && $foundDayOne){
				$dayArray[$i][$j] = $dayCount;
				if($dayCount == $totalDays){
					return $dayArray;
				}
			}
			$dayCount++;
		}
	}
}
$dayArray[5][7] = 0;
$dayArray = configureCalAr('November', 2017);
echo $dayArray[0][3];
?>
</body>
@endsection
