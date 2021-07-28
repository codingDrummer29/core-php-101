<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>
    Welcome <?php echo $_POST["name"]; ?> <br />
    Your Email ID is : <?php echo $_POST["email"]; ?>

    <!-- Welcome Anubhab
         Your Email ID is : a@test.in -->
    
    <!-- unlike get data not visible here -->
    <!-- http://localhost:3000/forms/welcome_post.php -->
</body>
</html>