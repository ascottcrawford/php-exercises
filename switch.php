<?php

// $value = 'Hello!';

// switch (gettype($value)) { 
// 	default:
// 		echo: 'IDK';
// 	case 'integer':
// 		echo '$value is an integer';
// 		break;
// 	case 'float':
// 		echo '$value is float';
// 		break;
// 	case 'boolean';
//     	echo '$value is a boolean';
//     	break;
//     case 'array';
//     	echo '$value is an array';
//     	break;
//     case 'null';
//     	echo '$value is null';
//     	break;
//     case 'string';
//     	echo '$value is a string';
//     	break;
// }

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         echo 'Monday';
         break;
     case 2:
         echo 'Tuesday';
         break;
     case 3;
     	 echo 'Wednesday';
     	 break;
      case 4;
          echo 'Thursday';
          break;
      case 5;
      	  echo 'Friday';
      	  break;
      case 6;
      	   echo 'Saturday';
      	   break;
       case 7:
       		echo 'Sunday';
       		break;
 }

date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 if ($dayOfWeek == 1) {
 	echo 'Monday';
} 	elseif ($dayOfWeek == 2) {
	echo 'Tuesday';
}	elseif ($dayOfWeek == 3) {
	echo 'Wednesday';
}	elseif ($dayOfWeek == 4) {
	echo 'Thursday';
}	elseif ($dayOfWeek == 5) {
	echo 'Friday';
}	elseif ($dayOfWeek == 6) {
	echo 'Saturday';
}	elseif ($dayOfWeek == 7) {
	echo 'Sunday';
}
 



