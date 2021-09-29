<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="A" placeholder="Podaj bok a"><br><br>
        <input type="submit" name="btn" value="Oblicz">
    </form>
    <?php
        if (isset($_GET['btn'])) {
            if (!empty($_GET['A'])) {
                $x = str_replace(',','.',$_GET['A']);
                echo "pole kwadratu wynosi: ".pow($x, 2)." cm<sup>2</sup><br>";
                echo "obwod kwadratu wynosi: ".(4*$x)." cm";
            }
            else {
                echo "No ale podaj ten bok...";
            }
        }
    ?>
</body>
</html>