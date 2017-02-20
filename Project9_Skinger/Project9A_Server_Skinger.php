<html>
<head>
<title>Project 9A Server Side</title>
<link rel="stylesheet" type="text/css" href="Project9_CSS.css" />
</head>
<body>

<h1> Tempeture Conversion Server Side </h1>

<?php

print("I made it to Server Side");

// Delcare Global Variable

$Celcius;
$Fahrenheit;

// Retrieve Input

$Celcius = $_POST['txtTemp_C'];
print ("<br />Show me $Celcius<br />");
// Do Calculation

// $Fahrenheit = $Celcius + 646;

$Fahrenheit = (9/5 * $Celcius) + 32;

// Display Output

print ("The tempture in fahrenheit is: $Fahrenheit <br /><br />");

print ("<a href=\"Project9A_Client_Skinger.html\"> Return to form </a>");

?>	
</body>
</html>

