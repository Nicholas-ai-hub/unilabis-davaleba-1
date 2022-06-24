<?php

/*
*პირველი დავალება
*/

print 'How are you?';
print "I'm fine.";
echo "<br>";


/*
*მეორე დავალება
*/
$bigmac = 7;
$cocacola = 2.45;
$frenchfries = 1.75;
$sale = 7/100;

function countEx($bigmac,$cocacola,$frenchfries,$sale)
{
  $sum = (2*$bigmac + 3*$cocacola + 2*$frenchfries);
  $result = $sum - $sum*$sale;
  //ceil ფუნქციაში ჩავსვი, რადგან ისე აბრუნებდა 23.1105-ს, რაც არასწორია თანხის გამოთვლისთვის
  echo "გადასახდელი თანხა = " . ceil($result). '$';
}

countEx($bigmac,$cocacola,$frenchfries,$sale);
echo "<br>";


/*
*მესამე დავალება
*/
$html = '<span class="{class}">fried fish</span>
<span class="{class}">fried chicken</span>';

//str_repeat
$change = str_replace("{class}", "dinner", $html);
echo $change;
echo "<br>";

/*
*მეოთხე დავალება
*/
print (2 + (4 * 10)) / (9 - 2);
echo "<br>";

/*
*მეხუთე დავალება
*/

$city = [
  1000000 => 'Rustavi',
  750000 => 'Telavi',
  999000 => 'Qutaisi',
  1400000 => 'Batumi',
  2000000 => 'Tbilisi'
];

foreach($city as $key => $cit){
  echo $key . ' - '. $cit . ' <br> ';
}

/*
*მეექვსე დავალება
*/

krsort($city);
echo "<pre>";
print_r($city);
echo "</pre>";

/*
*მეშვიდე დავალება
*/
foreach($city as $key => $value){
  echo "<pre>";
  print $key . /* key-ს მინდა რომ დავამატო მნიშვნელობა სათითაოდ და ეს თუ არის შესაძლებელი */' - ' . $value;
  echo "</pre>";
}
?>