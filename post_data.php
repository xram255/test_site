<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POST data on Page</h1><br>

    <?php
        $inval = "no string";
        $inval = $_POST['key1'];
        echo $inval;
    ?>

</body>
</html>