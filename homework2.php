<!DOCTYPE html>
<html lang="eng">
	<head>
        <style>
            h1 {text-align: center;}
			h3 {text-align: center;}
			h6 {text-align: center;}
			p {text-align: center;}
			pre {text-align: center;}
			div {text-align: center;}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
        <title>This is my Homework 2, let's if I can make this look fun.</title>
	</head>

    <body>
        <p>
            <h1>What is your birthday?</h1> 
            <h3>
                <?php
                $dob = date(" l, F jS Y h:i:s A", mktime(23,34,00,11,16,2005)); //Imput your birth date, ex. you were born July 11th 2005 at 11:23:00 AM -> 11,23,00,7,11,2005

                $birthdate = mktime(11,34,23,11,16); //Same us up there, but removing the year.
                $today = time(); //This calculates the current time.
                $targeting_down = ($birthdate-$today); //This subtracts your birthdate from the current day's current time.
                $days = (int) ($targeting_down/86400); //24 hours in a day and 60 seconds in one minute. This is divided by the result of your birth date minus today's date and time. I'm getting old.

                echo "You were born on $dob. Your birthday is $days days away. Happy early birthday.";
                //So I did set up Github, Git is way too confusing for me and I messed with Github ever since I was in my early teens.
                ?>
            </h3>
        </p>
    </body>
</html><!DOCTYPE html>
<html lang="eng">
	<head>
        <style>
            h1 {text-align: center;}
			h3 {text-align: center;}
			h6 {text-align: center;}
			p {text-align: center;}
			pre {text-align: center;}
			div {text-align: center;}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
        <title>This is my Homework 2, let's if I can make this look fun.</title>
	</head>

    <body>
        <p>
            <h1>What is your birthday?</h1> 
            <h3>
                <?php
                $dob = date(" l, F jS Y h:i:s A", mktime(23,34,00,11,16,2005)); //Imput your birth date, ex. you were born July 11th 2005 at 11:23:00 AM -> 11,23,00,7,11,2005

                $birthdate = mktime(11,34,23,11,16); //Same us up there, but removing the year.
                $today = time(); //This calculates the current time.
                $targeting_down = ($birthdate-$today); //This subtracts your birthdate from the current day's current time.
                $days = (int) ($targeting_down/86400); //24 hours in a day and 60 seconds in one minute. This is divided by the result of your birth date minus today's date and time. I'm getting old.

                echo "You were born on $dob. Your birthday is $days days away. Happy early birthday.";
                //So I did set up Github, Git is way too confusing for me and I messed with Github ever since I was in my early teens.
                ?>
            </h3>
        </p>
    </body>
</html>
