<!DOCTYPE Html>
<!This is Derrick Skinger's Project 10B PHP part 2 Server project.>

<html>
<head>
<title> Project 10B Server Side </title>
<link rel="stylesheet" type="text/css" href="Project10_CSS.css" />
</head>
<body>

<?php

$Student;	// Input Variable
$ID;		// Input Variable
$Major;		// Input Variable
$Test_1;	// Input Variable
$Test_2;	// Input Variable
$Test_3;	// Input Variable
$Total;		// Output Variable
$Average;	// Output Variable
$Letter;	// Output Variable

//---------- Retrieve_Input ----------
function Retrieve_Input()
{
   print ("I made it to the Input Module <br />");
   global $Student, $ID, $Major, $Test_1, $Test_2, $Test_3;
   
   // Retrieve the User Input
   $Student= $_POST['txtStudent'];
   $ID= $_POST['txtID'];
   $Major= $_POST['txtMajor'];
   $Test_1= $_POST['txtGrade_1'];
   $Test_2= $_POST['txtGrade_2'];
   $Test_3= $_POST['txtGrade_3'];

   // Display User Input
   print ("<p>The Student's name is: $Student</p>");
   print ("<p>Your ID is: $ID </p>");
   print ("<p>Your Major is: $Major </p>");
   print ("<p>Test Grade 1: $Test_1 </p>");
   print ("<p>Test Grade 2: $Test_2 </p>");
   print ("<p>Test Grade 3: $Test_3 </p>");

}

//---------- Calculations ----------
function T_TGrade ()
{
   print ("<p>I Made it to the T_T module</p>");
   global $Test_1, $Test_2, $Test_3, $Total;

   // The Calculation
   $Total = $Test_1 + $Test_2 + $Test_3;
}

function Average_Grade ()
{
   print ("<p>I Made it to the Average module</p>");
   global $Total, $Average;

   $Average = $Total/3;
}

function Letter_Grade ()
{
   print ("<p>I Made it to the Letter module</p>");
   global $Average, $Letter;

   if ($Average <=100 AND $Average >=90)
   {
    $Letter = "A";
   }
//
   if ($Average <=89 AND $Average >=80)
   {
    $Letter = "B";
   }
//
   if ($Average <=79 AND $Average >=70)
   {
    $Letter = "C";
   }
//
   if ($Average <=69 AND $Average >=60)
   {
    $Letter = "D";
   }
//
   if ($Average <=59 AND $Average >=0)
   {
    $Letter = "F";
   }
//
   if (($Average >100) OR ($Average <0))
   {
    print ("<p>Invalid Input</p>");
    $Letter = "Invalid Input";
   }
}

//---------- Display_Output ----------
function Display_Output ()
{
   print ("<p>I made it to the display module</p>");
   global $Total, $Letter, $Average;

   // Display the output
   print ("<p>Your total grade is: $Total</p>");
   print ("<p>Your Average Grade is: $Average</p>");
   print ("<p>Your Letter Grade is: $Letter</p>");
}

//********** Main Module **********

Retrieve_Input ();
T_TGrade ();
Average_Grade ();
Letter_Grade ();
Display_Output ();


print("<br/> <br />");
 
print ("<p><a href=\"Project_10B_Client_Skinger.html\"> Return to The Client Side </a></p>");

?>
</body>
</html>
