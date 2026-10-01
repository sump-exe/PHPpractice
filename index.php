<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Practice</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="form.php" method="post">
                    <h1>Verify your Jomi-ness</h1>
                    <label>Name:</label><br>
                    <input type="text" name="name"><br>
                    <label>Password:</label><br>
                    <input type="password" name="password"><br><br>
                    <input type="submit" value="Log In">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>

<?php

//$name = "Sajomi";
//echo "<h1>Hello, {$name}!</h1>";

$x = intval(NULL);
$y = intval(NULL);
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$quotient = $y != 0 ? $x / $y : "nuh uh :3"; 

//include 'form.php'; <-- only use include if on the same webpage

?>