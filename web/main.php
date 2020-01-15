
<?php echo "Today is " . date("l") . ", the "; 
$day = date("d");
if ($day > 20) {$dayR = $day % 10;} else {$dayR = $day;};
switch ($dayR) {
	case 1:
		echo $day . "st";
		break;
    case 2:
		echo $day . "nd";
		break;
    case 3:
		echo $day . "rd";
		break;
    default:
		echo $day . "th";
		break;
 }
echo " of ";
$month = date("m");
switch ($month) {
	case 1:
		echo "January";
		break;
	case 2:
		echo "February";
		break;
	case 3:
		echo "March";
		break;
	case 4:
		echo "April";
		break;
	case 5:
		echo "May";
		break;
	case 6:
		echo "June";
		break;
	case 7:
		echo "July";
		break;
	case 8:
		echo "August";
		break;
	case 9:
		echo "September";
		break;
	case 10:
		echo "October";
		break;
	case 11:
		echo "November";
		break;
	case 12:
		echo "December";
		break; }
echo " " . date("Y") . '.'; ?> 