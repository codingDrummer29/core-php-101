<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>
    Welcome <?php echo $_GET["name"]; ?> <br />
    Your Email ID is : <?php echo $_GET["email"]; ?>

    <!-- Welcome Anubhab
         Your Email ID is : a@test.in -->
    <!-- data visible in the url -->
    <!-- http://localhost:3000/forms/welcome_get.php?name=a&email=a%40test.in -->
</body>
</html>