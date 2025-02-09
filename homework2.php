<?php

echo "<!DOCTYPE html>
<html>

<head>
    <title>This is my Homework 2</title>
</head>

<body>
    <h1>What is your birthday?</h1>
    <p>
        This is when you were born.
    </p>
</body>

</html>";

$dob = date(" l, F jS Y h:i:s A", mktime(23,34,00,11,16,2005)); //Imput your birth date, ex. you were born July 11th 2005 at 11:23:00 AM -> 11,23,00,7,11,2005

$birthdate = mktime(11,34,23,11,16); //Same us up there, but removing the year.
$today = time(); //This calculates the current time.
$targeting_down = ($birthdate-$today); //This subtracts your birthdate from the current day's current time.
$days = (int) ($targeting_down/86400); //24 hours in a day and 60 seconds in one minute. This is divided by the result of your birth date minus today's date and time. I'm getting old.
echo "You were born on $dob. Your birthday is $days days away. Happy early birthday.";
?>
