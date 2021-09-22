<?php
    $param = $_GET["param"] ?? "üres";
    $kiad = "";
    $kiad.= 0 + mb_strpos($param,"re");
    $kiad.= "<br/>";
    $kiad.= 0 + mb_strpos($param,"RE");
    $kiad.= "<br/>";
    $kiad.= 0 + mb_stripos($param,"RE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pff</title>
    <link rel="shortcut icon" href="../M1.ico" type="image/x-icon">
</head>
<body>
    <p>
        <?php echo $kiad; ?>
    </p>
</body>
</html>