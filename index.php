<?php
#constantnaam sowieso in drukletters

#default atijd in switch case voorzien
# https://stackoverflow.com/questions/7801175/conditional-switch-statements-in-php

#oefening 1 Fortuinbouwer
$n = 2;
$x = 'directeur';
$y = 'België';
$z = 'Lisa';

echo 'U wordt ' , $x , ', woont in ' , $y , ', en bent getrouwd met ' , $z , ' met ' , $n , ' kinderen. <br/>';

#oefening 2 Bereken de leeftijd
define('YEAR',2018);
$birthYear = 1994;
$age = YEAR - $birthYear;
echo 'Je bent/wordt dit jaar ' , $age , ' jaar oud. <br/>';

#oefening 3 voorspeller
define('MAXAGE',100);
$yearsToGo = MAXAGE - $age;
echo 'Je hebt nog steeds ' , $yearsToGo , ' jaar voordat je de leeftijd van ' , MAXAGE , ' bereikt hebt. <br/>';


#oefening 4 prioriteiten
/*

let resultaat = (1 + 2) * 3 + 4 / 2;
* stap 1: (1 + 2) * 3 + 4 / 2;  --> (1+2)
* stap 2: (1 + 2) * 3 + 4 / 2; --> *3
* stap 3: (1 + 2) * 3 + 4 / 2; --> /2
* stap 4: (1 + 2) * 3 + 4 / 2; --> +4

dus
* stap 1: (3) * 3 + 4 / 2;
* stap 2: 9 + 4 / 2;
* stap 3: 9 + 2;
* stap 4: 11;

*/
$value = (1 + 2) * 3 + 4 / 2;
echo $value , '<br/>';

#oefening 5 talen
$language = 'fr'; #should either be "fr" , "nl" or "en"
define('GREETFR','Bonjour tout le monde. <br/>');
define('GREETNL','Hallo iedereen. <br/>');
define('GREETEN', 'Hallo world. <br/>');

switch($language)
{
  case 'fr':
    echo GREETFR;
    break;
  case 'nl':
    echo GREETNL;
    break;
  case 'en':
    echo GREETEN;
    break;
  default:
    echo 'Er ging iets mis. De taal moet fr, nl of en zijn. <br/>';
}

#oefening 6 score weergeven
$score = 65;
$typeScore = gettype ($score);

if ($typeScore == 'integer')
{
  switch(true)
  {
    case ($score>=90):
      $rank = 'A';
      break;
    case ($score<90 && $score>50):
      $rank = 'B';
      break;
    case ($score<=50):
      $rank = 'C';
      break;
    default:
      echo 'Er ging iets mis. <br/>';
      break;
  }
  echo 'Your ranking is ' , $rank , '.<br/>';
} else {
  echo 'Er is iets fout gegaan. <br/>';
}


#oefening 7 in het meervoud
$single = 'fiets';
$number = 5;
$result = '';

if ($number>1) {
  $result = $number . ' ' . $single . 'en';
} else {
  $result = $number . ' ' . $single;
}

echo 'Ik heb ' , $result , '.<br/>';


#oefening 8 temperatuurconversie

echo 'Kies hieronder <br/>
  0. End of the program <br/>
  1. Celsius to Fahrenheit <br/>
  2. Celsius to Kelvin <br/>
  3. Fahrenheit to Celsius <br/>
  4. Fahrenheit to Kelvin <br/>
  5. Kelvin to Celsius <br/>
  6. Kelvin to Fahrenheit <br/>';

$initialTemprature = 50;
$choice = 6;

if ($choice>0)
{
  switch ($choice)
  {
    case 1:
      $newTemprature = ($initialTemprature * 9/5)+32;
      $kindInitial = 'Celsius';
      $kindNew = 'Fahrenheit';
      break;
    case 2:
      $newTemprature = $initialTemprature + 273.15;
      $kindInitial = 'Celsius';
      $kindNew = 'Kelvin';
      break;
    case 3:
      $newTemprature = ($initialTemprature - 32)/(9/5);
      $kindInitial = 'Fahrenheit';
      $kindNew = 'Celsius';
      break;
    case 4:
      $newTemprature = (($initialTemprature-32)*(5/9))+273.15;
      $kindInitial = 'Fahrenheit';
      $kindNew = 'Kelvin';
      break;
    case 5:
      $newTemprature = $initialTemprature - 273.15;
      $kindInitial = 'Kelvin';
      $kindNew = 'Celsius';
      break;
    case 6:
      $newTemprature = ($initialTemprature* 9/5)-459.67;
      $kindInitial = 'Kelvin';
      $kindNew = 'Fahrenheit';
      break;
    default:
      echo 'Something went wrong';
      break;
  }
  echo $initialTemprature , ' graden ' , $kindInitial , ' is gelijk aan ' , $newTemprature , ' graden ' , $kindNew , '. <br/>';
} else {
  echo 'Er ging iets mis';
}

/*
$celToFah = ($initialTemprature * 9/5)+32;
$celToKev = $initialTemprature + 273.15;
$fahToCel = ($initialTemprature - 32)/(9/5);
$fahToKel = (($initialTemprature-32)*(5/9))+273.15;
$kelToCel = $initialTemprature - 273.15;
$kelToFah = ($initialTemprature* 9/5)-459.67;
*/
