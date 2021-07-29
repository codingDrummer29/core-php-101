<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Form</title>
    <!-- SOURCE: https://www.w3schools.com/php/php_file_upload.asp -->
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data" >
        Select File: <br />
        <input type="file" name="image" />
        <br /><br />
        <button type="submit">Upload file</button>
    </form>

</body>
</html>