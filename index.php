<!-- 4. $_GET and $_POST -->

<?php
    // $_GET, $_POST = Special variables used to collect data drom an HTML form
    //                 data is sent to the file in the action attribute of <form>
    //                 <form action="some_file.php" method="get">

    // $_GET =  Data is appended to the url
    //          NOT SECURE
    //          char limit
    //          Bookmark is possible w/ values
    //          GET requests can be cached
    //          Better for a search page
    
    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requests are not cached
    //          Better for submitting credentials
?>

    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>username: </label><br>
            <input type="text" name="username"><br>
            <label>password: </label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Log in">
        </form>
    </body>
    </html> -->
<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html> -->

<?php
    // $item = "pitsa";
    // $price = 5.99;
    // $quantity = $_POST["quantity"];
    // $total = null;

    // $total = $quantity * $price;

    // echo"You have ordered {$quantity} x {$item}/s <br>";
    // echo"Your total is: {$total}€";
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="radius">
        <input type="submit" value="total">

    </form>
</body>
</html> -->

<?php

    // $radius = $_POST["radius"];
    // $circumference = null;
    // $area = null;
    // $volume = null;

    // $circumference = 2 * pi() * $radius;
    // $circumference = round($circumference, 2);

    // $area = pi() * pow($radius,2);
    // $area = round($area,2);

    // $volume = 4/3 * pi() * pow($radius, 3);
    // $volume = round($volume, 2);

    // echo "Circumference = {$circumference}cm^2 <br>";
    // echo "Area = {$area}cm^2 <br>";
    // echo "Volume = {$volume}cm^3 <br>";

?>

<!-- FOR LOOPS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];

    for($i = 0; $i <= $counter; $i++){
        echo $i . "<br>";
    }
?>