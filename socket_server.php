<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Socket Server</h1>

    <?php
        
        $host = "127.0.0.1";
        $port = 5353;
        set_time_limit(0);
        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("could not create socket..\n");
        $result = socket_bind($socket, $host, $port) or die("could not bind to socket\n");
        $result = socket_listen($socket, 3) or die ("could not setup socket listener\n");
        $spawn = socket_accept($socket) or die ("could not accept incomming connection\n");
        $input = socket_read($spawn, 1024) or die ("could not read input..\n");
        $output = strrev($input) . "\n";
        socket_close($spawn);
        socket_close($socket);


    ?>
</body>
</html>