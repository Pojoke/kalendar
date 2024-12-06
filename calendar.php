
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

$daysOfWeek = ['Неділя', 'Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятница', 'Субота'];
echo "Today " . date("d.m.Y, l") . "\n";
$daysOfWeekN = date("w");
$month = date("m");
$year = date("Y");
echo $daysOfWeek[$daysOfWeekN] . "\n";
$tomorrow = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
echo date("d.M.Y", $tomorrow) . "\n";
$y = mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"));
echo date("d.M.Y", $y) . "\n";
$firstDay = date("w", mktime(0, 0, 0, $month, 1, $year));

echo $firstDay . "\n";
$days_number = date("w") ? date("w") - 1 : 6;
$firstDayOfWeek = mktime(0, 0, 0, date("m"), date("d") - $days_number, date("Y"));
echo date("d") . "\n";
echo date("d", $firstDayOfWeek);
echo "<table border='1'>";
echo "<tr>";
for ($i = 1; $i <= count($daysOfWeek); $i++) {
    if ($i == 7) {
        echo "<td class='red'>{$daysOfWeek[0]}</td>";
    } elseif ($i == 6) {
        echo "<td class='red'>{$daysOfWeek[6]}</td>";
    } else {
        echo "<td class='blue'>{$daysOfWeek[$i]}</td>";
    } 
}
echo "</tr>";
// echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
echo "<tr>";
for ($i = 1; $i <= count($daysOfWeek); $i++) {
    $day = date("j", mktime(0, 0, 0, date("m"), $firstDayOfWeek+$i  , date("Y")));
   
   
        echo "<td>$day</td>";
    
   

}
echo "</tr>";

?>
</body>
</html>