<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index2</title>
</head>
<body>
    <?php
        $segundos = date("s");
        var_dump($segundos);

        settype($segundos, "int");
        var_dump($segundos);
    ?>     
</body>
</html>