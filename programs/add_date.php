<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Date</title>
</head>
<body>
    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="date">Enter a Date</label> <br />
        <input type="date" name="date" id="" />

        <br /><br />
        
        <label for="add">How many days you want to add ?</label>
        <input type="number" name="add" />
        
        <br /><br />

        <button type="submit">Add Days</button>
    </form>

    <?php 

        // Add days to date and display it 
        // echo date('Y-m-d', strtotime($date. ' + 10 days')); 
        function add_time($date, $add){
            return date('Y-m-d', strtotime($date . ' + ' . $add . ' days'));
            // https://www.w3schools.com/php/func_date_strtotime.asp
        }
        
        $date = add_time($_POST["date"], $_POST["add"]);
        echo "<br />Result date is : " . $date . "<br /><br />";
    ?>

</body>
</html>