<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression</title>
</head>
<body>
    <!-- SOURCE: https://www.w3schools.com/php/php_regex.asp -->
<?php 

    // The preg_match() function will tell you whether a string contains matches of a pattern.
    // Returns 1 if the pattern was found in the string and 0 if not
    $str1 = "Visit W3Schools";
    print_r($str1); echo "<br>";
    $pattern1 = "/w3schools/i"; // i performs a case-insensitive search
    echo preg_match($pattern1, $str1); // op 1

    echo "<br>";

    // The preg_match_all() function will tell you how many matches were found for a pattern in a string
    // Returns the number of times the pattern was found in the string, which may also be 0
    $str2 = "The rain in SPAIN falls mainly on the plains.";
    print_r($str2); echo "<br>";
    $pattern2 = "/ain/i";
    echo preg_match_all($pattern2, $str2); // op 4

    echo "<br>";

    // The preg_replace() function will replace all of the matches of the pattern in a string with another string.
    // Returns a new string where matched patterns have been replaced with another string
    $str3 = "Visit America!";
    print_r($str3); echo "<br>";
    $pattern3 = "/america/i";
    echo preg_replace($pattern3, "India", $str3); // op Visit India!

    echo "<br>";

    // You can use parentheses ( ) to apply quantifiers to entire patterns. 
    // They also can be used to select parts of the pattern to be used as a match.
    $str4 = "Apples and bananas.";
    print_r($str4); echo "<br>";
    $pattern4 = "/ba(na){2}/i";
    echo preg_match($pattern4, $str4); // op 1

    // SOURCE: https://www.w3schools.com/php/php_ref_regex.asp

    // i	Performs a case-insensitive search
    // m	Performs a multiline search (patterns that search for the beginning or end of a string will 
    //      match the beginning or end of each line)
    // u	Enables correct matching of UTF-8 encoded patterns

    // [abc]	Find one character from the options between the brackets
    // [^abc]	Find any character NOT between the brackets
    // [0-9]	Find one character from the range 0 to 9

    // |	Find a match for any one of the patterns separated by | as in: cat|dog|fish
    // .	Find just one instance of any character
    // ^	Finds a match as the beginning of a string as in: ^Hello
    // $	Finds a match at the end of the string as in: World$
    // \d	Find a digit
    // \s	Find a whitespace character
    // \b	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
    // \uxxxx	Find the Unicode character specified by the hexadecimal number xxxx

    // n+	Matches any string that contains at least one n
    // n*	Matches any string that contains zero or more occurrences of n
    // n?	Matches any string that contains zero or one occurrences of n
    // n{x}	Matches any string that contains a sequence of X n's
    // n{x,y}	Matches any string that contains a sequence of X to Y n's
    // n{x,}	Matches any string that contains a sequence of at least X n's

    /**
     * If your expression needs to search for one of the special characters you can use 
     * a backslash ( \ ) to escape them. For example, to search for one or more question marks you can 
     * use the following expression: $pattern = '/\?+/';
     */

?>

</body>
</html>