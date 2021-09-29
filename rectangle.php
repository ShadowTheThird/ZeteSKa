<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
    <form method="get">
        <input type="text" name="A" placeholder="Podaj bok a"><br><br>
        <input type="text" name="B" placeholder="Podaj bok b"><br><br>
        <input type="submit" name="btn" value="Oblicz">
    </form>
    <?php
        if (isset($_GET['btn'])) {
            if (!empty($_GET['A']) && !empty($_GET['B'])) {
                $xa = str_replace(',','.',$_GET['A']);
                $xb = str_replace(',','.',$_GET['B']);
                echo "pole kwadratu wynosi: ".($xa*$xb)." cm<sup>2</sup><br>";
                echo "obwod kwadratu wynosi: ".($xa*2+$xb*2)." cm";
            }
            else {
                echo "No ale podaj te boki...";
            }
        }
    ?>
</body>
</html>