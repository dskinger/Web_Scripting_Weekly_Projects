<!DOCTYPE Html>
<!--This is Derrick Skinger's Project 10A PHP part 2 Server Side project.-->

<html>
<head>
<title>Project 10A Server Side</title>
<link rel="stylesheet" type="text/css" href="Project10_CSS.css" />
</head>
<body>

<h1>Hello</h1>

<?php

print ("I made it to Server Side");

$Username;		// Input Variable
$Gender;		// Input Variable
$Letter;		// Input Variable
$Status;		// Output Variable


// ---------- Retrieve_Input Module --------------------------
// This module is designed to retrieve the user input
function Retrieve_Input()
{
   print ("Begining of Retrieve_Input Module");
   global $Username, $Gender, $Letter;

   $Username= $_POST['txtUser_Name'];
   $Gender= $_POST['txtGender'];
   $Letter= $_POST['lstMarital'];
   
// Display User Input using the PHP input variables

   print ("<p>Your Username: $Username </p>");

   print ("<p>Your Gender: $Gender </p>");

   print ("<p>Your Marital Status Letter: $Letter </p>");

}

// --------------- Determine_Marital_Status Module -------------------------

function Determine_Marital_Status()
{
   global $Letter, $Status;

   if ($Letter =="S")
     {
   	$Status = "Single";
     } 
//
   if ($Letter =="M")
     {
   	$Status = "Married";
     } 
//
   if ($Letter =="D")
     {
   	$Status = "Divorced";
     }
//
   if ($Letter =="W")
     {
   	$Status = "Widowed";
     }
print ("<p>$Status $Letter</p>");
//
}

// ------------ Display the Output ---------
//
function Display_Output()
{
   print ("<p> Made it to the Display Module <p>");

   global $Status;

   print ("<p>Your Marital Status is: $Status</p>");

}

// ************ The Main Module ******************************

Retrieve_Input();
Determine_Marital_Status();
Display_Output ();


// Alow the User to get back to the Client App.

print("<br/>");
 
print ("<a href=\"Project_10A_Client_Skinger.html\"> Return to The Client Side </a>");

?>	
</body>
</html>
