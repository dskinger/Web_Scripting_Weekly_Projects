<html>
<head>
<title>Project 9B Server Side</title>
<link rel="stylesheet" type="text/css" href="Project9_CSS.css" />
</head>
<body>

<h1> Age Conversion Server Side </h1>

<?php

print("I made it to Server Side <br />");
//User's Name, Age in Year, and the Calculated Age in Months, and Age in Days
// Delcare Global Variable

$Name;
$Years;
$Months;
$Days;

// Retrieve Input

$Name = $_POST['txtName'];
$Years = $_POST['txtAge'];

// Do Calculation

$Months = $Years * 12;
$Days = $Months *30;

// Display Output

print ("Your Name: $Name <br /><br />");

print ("Your age in Years: $Years <br /><br />");

print ("Your age in Months: $Months <br /><br />");

print ("Your age in Days: $Days <br /><br />");

print ("<a href=\"Project9B_Client_Skinger.html\"> Return to form </a>");

?>	
</body>
</html>

