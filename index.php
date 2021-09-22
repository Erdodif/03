<?php
    if($_SERVER["REQUEST_METHOD"]==='POST'){
        if(empty($_POST["nev"])){
            $nevHiba = "Nincs név megadva";
            $nev = "";
        } else {
            $nev = htmlspecialchars($_POST["nev"] ?? "",ENT_QUOTES);
        }
    } else {
        $nev = "";
    }
    $keres = $_GET["keres"] ?? "false";
    $ervenyesKereses = ['true', 'false'];;
    if(!in_array($keres,$ervenyesKereses)){
        $keresesHiba = "Érvénytelen keresés";
    }$keres = htmlspecialchars($_GET["keres"] ?? "N/A",ENT_QUOTES);
?>
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
        <p>
            <?php
                if(isset($nevHiba)){
                    echo $nevHiba;
                }
                elseif ($nev !==""){
                    echo "Név: ".$nev;
                }
            ?>
        </p>
        <p>
            <?php 
                if(isset($keresesHiba)){
                    echo $keresesHiba;
                } elseif($keres==="true"){
                    echo "Keresés: ".$keres;
                }
                else{
                    echo "Nincs keresés";
                }
            ?>
        </p>
        <form method="post">
            <label for="nev">Név:</label>
            <input type="text" name="nev" id="nev" placeholder="Név" value="<?php echo $nev?>">
            <input type="submit" value="elküld">
        </form>
    </body>
</html>