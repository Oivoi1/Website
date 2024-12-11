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

<!-- <!DOCTYPE html>
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
</html> -->

<?php
    // $counter = $_POST["counter"];

    // for($i = 0; $i <= $counter; $i++){
    //     echo $i . "<br>";
    // }
?>

<?php

    // $foods = array("apple","orage","banana", "coconut");

    // //array_push($foods, "pineapple");
    // //array_pop($foods);
    // //array_shift($foods);
    // //$reversed_foods = array_reverse($foods);
    // //echo count($foods)

    // foreach($foods as $food){
    //     echo $food . "<br>";
    // }

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
        <label>Enter a country:</label><br>
        <input type="text" name="country">
        <input type="submit" value="start">
    </form>
</body>
</html> -->

<?php
    // associative array = An array made of key=>value pairs
    // countries => capitals
    // id => username
    // item => price

    // $capitals = array("Finland"=>"Helsinki", 
    //                    "Sweden"=>"Stockholm",
    //                    "Norway"=>"Oslo",
    //                    "Denmark"=>"Kopenhagen");

    // $capital = $capitals[$_POST["country"]];

    // echo "The capital is {$capital}";

    //$capitals["Sweden"] = "Uppsala";
    //$capitals["Estonia"] = "Tallin";
    //array_pop($capitals);
    //array_shift($capitals);
    //$keys = array_keys($capitals);
    //$values = array_values($capitals);
    //$capitals = array_flip($capitals);
    //$capitals = array_reverse($capitals);

    // foreach($capitals as $key => $value){
    //     echo"{$key} = {$value}<br>";
    // }

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
        <label>Enter a username:</label><br>
        <input type="text" name="username"><br>
        <label>Enter a password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html> -->

<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    // foreach($_POST as $key => $value){
    //     echo"{$key} = {$value}<br>";
    // }

    // if(isset($_POST["login"])){

    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     if(empty($username)){
    //         echo"Username is missing!";
    //     }
    //     elseif(empty($password)){
    //         echo"Password is missing!";
    //     }
    //     else{
    //         echo"Hello {$username}";
    //     }

    // }

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
        <label>Enter a username:</label><br>
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html> -->


<?php
    // if(isset($_POST["confirm"])){

    //     $credit_card = null;

    //     if(isset($_POST["credit_card"])){
    //         $credit_card = $_POST["credit_card"];
    //         //echo $credit_card;
    //     }
    //     switch($credit_card){
    //         case "Visa":
    //             echo "You selected Visa";
    //             break;
    //         case "Mastercard":
    //             echo "You selected Mastercard";
    //             break;
    //         case "American Express":
    //             echo "You selected American Express";
    //             break;
    //         default:
    //             echo"Please make a selection";
    //     }
    // }
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
        <label>Foods you like: </label><br>
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html> -->

<?php

    // if(isset($_POST["submit"])){

    //     if(isset($_POST["pizza"])){
    //         echo"You like pizza! <br>";
    //     }
    //     if(isset($_POST["hamburger"])){
    //         echo"You like hamburgers! <br>";
    //     }
    //     if(isset($_POST["hotdog"])){
    //         echo"You like hotdogs! <br>";
    //     }
    //     if(isset($_POST["taco"])){
    //         echo"You like tacos! <br>";
    //     }
    //     if(empty($_POST["pizza"])){
    //         echo"You don't like pizza! <br>";
    //     }
    //     if(empty($_POST["hamburger"])){
    //         echo"You don't like hamburgers! <br>";
    //     }
    //     if(empty($_POST["hotdog"])){
    //         echo"You don't like hotdogs! <br>";
    //     }
    //     if(empty($_POST["taco"])){
    //         echo"You don't like tacos! <br>";
    //     }
    // }

?>

<?php
    // FUNCTIONS

    // function hypotenuse(float $a, float $b){
    //     $c = sqrt($a ** 2 + $b ** 2);
    //     return $c;
    // }

    // echo hypotenuse(4,5);
    
?>

<?php
    // String functions

    // $username = "Kayttaja tunnus";
    // $phone = "123-456-7890";
    
    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20 , "0");
    //$phone = str_replace("-", "", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username);
    //$count = strlen($username);
    //$index = strpos($username, "t")
    //$firstname = substr($username, 0, 8);
    //$lastname = substr($username, 9);
    // $fullname = explode(" ", $username);

    // echo $username;

    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }
    
?>

    <!-- SANITAZE / VALIDATE INPUT DATA -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a username:</label><br>
        <input type="text" name="username"><br>
        <label>Enter age:</label><br>
        <input type="text" name="age"><br>
        <label>Enter email:</label><br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html> -->

<?php

    // if(isset($_POST["login"])){
    //     // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    //     // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    //     // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    //     // echo "Hello {$username}, you are {$age} years old and your email is {$email}!";

    //     $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    //     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    //     if(empty($email)){
    //         echo"That email wasn't valid";
    //     }
    //     else{
    //         echo"Your email is: $email";
    //     }

    // }

?>

<?php

    // include() = Copies the content of a file (php/html/text) and includes it in your php file.
    //             Sections of our website become reusable. Changes only need to be made in one place

    //include("header.html")

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page <br>
    Stuff about my Home page can go here.
</body>
</html> -->

<?php
    //include("footer.html")
?>

<!-- -->


<?php
    // Session = SGB used to store information on a user to be used across multiple pages.
    // A user is assigned a session-id ex. login credentials
    
    //session_start();
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
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html> -->

<?php

    // if(isset($_POST["login"])){

    //     if(!empty($_POST["username"]) && !empty($_POST["password"])){
    
    //         $_SESSION["username"] = $_POST["username"];
    //         $_SESSION["password"] = $_POST["password"];

    //         header("Location: home.php");
    //     }
    //     else{
    //         echo"Missing username/password <br>";
    //     }
    // }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:<br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html> -->

<?php
    // $_SERVER = SGB that contains headers, paths and script locations.
    // The entries in this array are created by the web server.
    // Shows nearly everything you need to know about the current web page environment.

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     echo"Hello";
    // }

?>

<?php
    // hashing = transforming sensitive data(password) into letters, numbers and/or symbols
    // via a mathematical process. (similar to encryption) Hides the original data from 3rd parties.

    // $password = "admin123";

    // $hash = password_hash($password, PASSWORD_DEFAULT);
    
    // if(password_verify("admin123", $hash)){
    //     echo"You are logged in";
    // }
    // else{
    //     echo"Incorrect password!";
    // }

?>

<?php
    // include("database.php");

    // $username = "Patrick";
    // $password = "rock3";
    // $hash = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "INSERT INTO users (user, password)
    //         VALUES ('$username', '$hash')";

    // try{
    //     mysqli_query($conn, $sql);
    //     echo"User is now registered";
    // }
    // catch(mysqli_sql_exception){
    //     echo"Could not register user <br>";
    // }


    // mysqli_close($conn);
    
?>

<?php
    // include("database.php");

    // $sql = "SELECT  * FROM users ";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row["id"] . "<br>";
    //         echo $row["user"] . "<br>";
    //         echo $row["register_date"] . "<br>";
    //     }
    // }
    // else{
    //     echo"No user found";
    // }

    // mysqli_close($conn);
?>

<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <h2>Welcome to Fakebook!</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($username)){
            echo"Please enter a username";
        }
        elseif(empty($password)){
            echo"Please enter a password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username','$hash')";

            try{
                mysqli_query($conn, $sql);
                echo"You are now registered!";
            }
            catch(mysqli_sql_exception){
                echo"That username is taken!";
            }


        }

    }

    mysqli_close($conn);
?>