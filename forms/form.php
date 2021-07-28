<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Form Exercise</title>
  </head>
  <body>
    <form action="./welcome_post.php" method="post">
    <!-- <form action="./welcome_get.php" method="get"> -->
      <label for="name">Name</label> <br />
      <input type="text" name="name" placeholder="Enter your name here" />
      <br />

      <label for="name">Email</label> <br />
      <input type="email" name="email" placeholder="Enter your email here" />
      <br />

      <input type="submit" />
    </form>
  </body>
</html>
