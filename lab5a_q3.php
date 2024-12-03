<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 4;  
    $width = 2;    

    $area = calculateArea($length, $width);

    echo "<h3>The area of rectangle with a width of $length and $width is $area</h3>";
    ?>
</body>
</html>
