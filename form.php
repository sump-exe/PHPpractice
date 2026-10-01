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
                <h3><?php echo "Hello, {$_POST['name']}!"; ?></h3>
                <br>
                <br>
                <form action="index.php" method="post">
                    <p>Wala ka pa naman magagawa dito eh... Maya nalang.</p>
                    <input type="submit" value="Go Back">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
</body>
</html>