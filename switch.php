 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = trim(date('N'));

 switch($dayOfWeek) {
     case 1:
     	echo "\nMonday\n";
     	break;
         // Output Monday
     case 2:
     	echo "\nTuesday\n";
     	break;
     case 3:
     	echo "\nWednesday\n";
     	break;
     case 4:
     	echo "\nThursday\n";
     	break;
     case 5:
     	echo "\nFriday\n";
     	break;
     case 6:
     	echo "\nSaturday\n";
     	break;
     case 7:
     	echo "\nSunday\n";
     	break;
 }
