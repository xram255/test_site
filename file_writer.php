<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Writer</h1>
    <?php
        $txt = $_POST['key1'];
        $myfile = fopen("newtxt.txt", "w") or die("Unable to open file..");      
        fwrite($myfile, $txt);
        fclose($myfile);
        //echo "write operation done..";
    ?>
    
</body>
</html>