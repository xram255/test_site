<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Javascript run PHP</h1><br><br>
    <p id="para1">Script not loaded</p><br>

    <?php
        $var3 = rand(10, 100);
    ?>
    
    <button id="btn">click here</button>
    
    <script>
        document.getElementById("btn").onclick = comments;
        
        function comments()
        {
            var var2 = "<?php echo $var3; ?>";
            //document.getElementById('para1').innerText = "from js => " + var2;
            document.getElementById('para1').innerText = var2;
        }
    </script>
    
</body>
</html>