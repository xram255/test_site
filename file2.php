<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <form action="file2.php" method="POST">
        <label>First Name </label>
        <input type="text" name="first_name">
        <br><br>
        <label>Last Name </label>
        <input type="text" name="last_name">
        <br><br>
        <input type="submit" name="submit" value="submit">
        </form>
        <br>
    </div>
    
    <?php 
        //$site_name = "test site";
        //echo "hi........<br><br>";
        //echo $site_name. "<br>";   
        //echo date('Y');
        //$firstName = $_POST['first_name'];
        //$lastName = $_POST['last_name'];
        //echo $firstName. "<br>";
        //echo $lastName. "<br>";
        //define(PI, 3.141);
        //echo PI;
        //echo (integer) (7/2). "<br>";
        //echo 5/2;
        $firstName = $_POST['first_name'];
        echo $firstName;
    ?>
   
</body>
</html>