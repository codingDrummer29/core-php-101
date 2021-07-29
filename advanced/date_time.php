<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>
</head>
<body>
    
    <?php 

        // date(format,timestamp)
        /**
         * d - Represents the day of the month (01 to 31)
         * m - Represents a month (01 to 12)
         * Y - Represents a year (in four digits)
         * l (lowercase 'L') - Represents the day of the week
         * 
         * Other characters, like"/", ".", or "-" can also be inserted between the characters 
         * to add additional formatting
         */

        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");

        echo "<br /><br />";
        /**
         * H - 24-hour format of an hour (00 to 23)
         * h - 12-hour format of an hour with leading zeros (01 to 12)
         * i - Minutes with leading zeros (00 to 59)
         * s - Seconds with leading zeros (00 to 59)
         * a - Lowercase Ante meridiem and Post meridiem (am or pm)
         */
        
        echo "The time is " . date("h:i:sa"); // op not the local-system time
        echo "<br />";
        // Note that the PHP date() function will return the current date/time of the server
        // So, if you need the time to be correct according to a specific location, 
        // you can set the timezone you want to use.
        date_default_timezone_set("Asia/Kolkata");
        echo "The time is " . date("h:i:sa"); // op local-system time
        /**
         * date_default_timezone_set() SOURCE: https://www.w3schools.com/php/php_ref_date.asp
         * timezones SOURCE: https://www.php.net/manual/en/timezones.asia.php
         */
        
        echo "<br /><br />";
        
        // mktime(hour, minute, second, month, day, year)
        $d=mktime(11, 14, 54, 8, 12, 2020);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        
        echo "<br /><br />";
        
        // strtotime(time, now)
        $d1=strtotime("10:30pm April 15 2021");
        echo "Created date is " . date("Y-m-d h:i:sa", $d1) . "<br/>";
        $d2=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d2) . "<br>"; // op 2021-07-30 12:00:00am
        $d3=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d3) . "<br>"; // op 2021-07-31 12:00:00am
        $d4=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d4) . "<br>"; // oop 2021-10-29 05:39:21pm
          
        echo "<br /><br />";

        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);
        echo "Start date : " . date("M d", $startdate) . "<br />";
        echo "End date : " . date("M d", $enddate) . "<br />";

        while ($startdate <= $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }

        // Start date : Jul 31
        // End date : Sep 11
        // Jul 31
        // Aug 07
        // Aug 14
        // Aug 21
        // Aug 28
        // Sep 04
        // Sep 11

        echo "<br /><br />";

        // outputs the number of days until 4th of July:
        $d5=strtotime("October 04");
        $d6=ceil(($d5-time())/60/60/24);
        echo "There are " . $d6 ." days until 4th of October.";
        // There are 67 days until 4th of October.
    ?>

</body>
<footer>
    <br/><br/>
    &copy; <?php echo date("Y");?>    
    <!-- © 2021 -->
</footer>
</html>