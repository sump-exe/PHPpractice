<?php
    $name = $_POST['name'];
    $answer = '';

    
//$name = "Sajomi";
//echo "<h1>Hello, {$name}!</h1>";

$x = $_POST['x'] ?? NULL;
$y = $_POST['y'] ?? NULL;

$x = intval($x);
$y = intval($y);
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$quotient = $y != 0 ? $x / $y : "nuh uh :3";

switch ($_POST['operation'] ?? '') {
    case 'add':
        $answer = $sum;
        break;
    case 'subtract':
        $answer = $diff;
        break;
    case 'multiply':
        $answer = $product;
        break;
    case 'divide':
        $answer = $quotient;
        break;
    default:
        $answer = "";
        break;
}

//include 'form.php'; <-- only use include if on the same webpage

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Your Jomi-ness has been verified!</h1>
                <h3><?php echo "Hello, {$name}!"; ?></h3>
                <br>
                <br>
                <form action="form.php" method="post">
                    <label>Wala akong maisip. Oh eto, calcu para sayo, <?php echo $name; ?>:</label><br><br>
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES, 'UTF-8'); ?>"> <!--this is so the name stays the same even after hitting "Calculate"-->
                    <input type="number" name="x">
                    <select name="operation">
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                    <input type="number" name="y">
                    <input type="submit" value="Calculate">
                    <br><br>
                    <?php echo "<h3>{$answer}</h3>"; ?>
                </form>
                <form action="index.php" method="post">
                    <p>Yun lang.</p>
                    <input type="submit" value="Go Back">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
</body>
</html>