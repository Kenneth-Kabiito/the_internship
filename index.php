<?php
echo computeYear("Charles",2000);
echo computeYear("<br><br>Thembo",2005);

 function computeYear($name_of_person,$year_of_birth) {
  $current_Year = (int)date("Y");
  $ageToday = $current_Year - $year_of_birth;

  echo $name_of_person. " is ".$ageToday." years old ";
 }
