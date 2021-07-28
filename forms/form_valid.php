<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .error {color: #FF0000;}
    </style>    

    <title>Valid Form Exercise</title>
</head>
<body>

    <!-- SOURCE: https://www.w3schools.com/php/php_form_validation.asp -->

    <?php 
    
        $name = $email = $gender = ""; // set to null
        $rname = $remail = $rgender = $rwebsite = $rcomment = ""; // set to null

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            empty($_POST["name"]) ? $rname = "Name is required" : $name = form_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $rname = "Only letters and white space allowed";
            }
            /**
             * a simple way to check if the name field only contains letters, dashes, apostrophes and 
             * whitespaces. If the value of the name field is not valid, then store an error message
             * 
             * The preg_match() function searches a string for pattern, returning true if the pattern 
             * exists, and false otherwise
             * SOURCE: https://www.w3schools.com/php/func_regex_preg_match.asp
             */
            
            empty($_POST["email"]) ? $remail = "Email is required" : $email = form_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $remail = "Invalid email format";
            }
            /**
             * filter_var()
             * SOURCE: https://www.w3schools.com/php/php_filter.asp
             * 
             * FILTER_VALIDATE_EMAIL
             * SOURCE: https://www.w3schools.com/php/php_ref_filter.asp
             */

            empty($_POST["gender"]) ? $rgender = "Gender is required" : $gender = form_input($_POST["gender"]);
    
            $website = form_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                $website)) 
            {
                empty($_POST["website"]) ? $rwebsite = "" : $rwebsite = "Invalid URL";;
            }
            /**
             * to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). 
             * If the URL address syntax is not valid, then store an error message
             */

            $comment = form_input($_POST["comment"]);
            
        }

        function form_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    
    ?>

    <h4>Input Data</h4>
    <p><span class="error">* required field</span></p>
    <div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name</label> <br />
            <input type="text" name="name" value="<?php echo $name; ?>" />
            <span class="error">* <?php echo $rname; ?> </span> <br />

            <label for="email">Email</label> <br />
            <input type="text" name="email" value="<?php echo $email; ?>" />
            <span class="error">* <?php echo $remail; ?> </span> <br />

            <label for="gender">Gender</label>
            <span class="error">* <?php echo $rgender; ?> </span>
            <ul>
                <li>
                    <input 
                        type="radio" 
                        name="gender" 
                        <?php if(isset($gender) && $gender == "male") echo "checked"; ?>
                        value="male"
                    >Male
                </li>
                <li>
                    <input 
                        type="radio" 
                        name="gender" 
                        <?php if(isset($gender) && $gender == "female") echo "checked"; ?>
                        value="female"
                    >Female
                </li>
                <li>
                    <input 
                        type="radio" 
                        name="gender" 
                        <?php if(isset($gender) && $gender == "other") echo "checked"; ?>
                        value="other"
                    >other
                </li>
            </ul>

            <label for="website">Website</label> <br />
            <input type="text" name="website" value="<?php echo $website; ?>" /> <br />

            <label for="comment">Comment</label> <br />
            <textarea name="comment" id="" cols="30" rows="5">
                <?php echo $comment; ?>
            </textarea> <br />

            <button type="submit">Submit Form</button>
        </form>
        <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently 
            executing script.
            So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping 
            to a different page. This way, the user will get error messages on the same page as the form. -->

        <h5>DATA</h5>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $_POST["name"] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $_POST["email"] ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $_POST["gender"] ?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><?php echo $_POST["website"] ?></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><?php echo $_POST["comment"] ?></td>
            </tr>
        </table>
    </div>

<!-- DATA
Name	anubhab
Email	a@test.in
Gender	male
Website	sample website
Comment	very nice very nice very nice very nice -->
    
</body>
</html>