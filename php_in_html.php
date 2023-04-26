<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>

<body>
    <h1>
        <?php
        // Single line comment
        # Also Single line comment
        /*
            Multi-line comment
        */
        $num1 = 10;
        $num2 = 20;

        echo $num1 + $num2;
        echo '<p>' . $num1 + $num2 . '</p>';
        ?>
        <?php echo "hello world! " // This will not comment the closing php tag 
        ?>
    </h1>

    <h2>
        <?= "Bye World! " ?>
    </h2>
</body>

</html>