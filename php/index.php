<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = 'db';
        $user = 'test_user';
        $passwd = 'test_password';
        $db = 'test_db';

        $conn = new mysqli($host, $user, $passwd, $db);

        if($conn->connect_error){
            echo 'connessione fallita' . $conn->connect_error;    # failed connection
        }
        else
        {
            echo 'cennessione eseguita a mysql';                  # good connection
        }
    ?>
</body>
</html>
