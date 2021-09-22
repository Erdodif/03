<?php $nev = htmlspecialchars($_POST["nev"] ?? "",ENT_QUOTES)?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>K cs</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="M1.ico" type="image/x-icon">
    </head>
    <body>
        <?php
            if($nev!=="")
            {
                echo $nev;
            }
        ?>
        <form method="post">
            <label for="nev">Név:</label>
            <input type="text" name="nev" id="nev" placeholder="Név" value="<?php echo $nev?>">
            <input type="submit" value="elküld">
        </form>
    </body>
</html>