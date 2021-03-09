<?php
$smallNuts = 125;
$regularNuts = 2;
$bigNuts = 13;

echo 'Le stock de Tac'.PHP_EOL;
echo '-------------------------------------'.PHP_EOL;
echo "| Petite(s) noisette(s)    |  $smallNuts   | ".PHP_EOL;
echo "| Noisette(s) classique(s) |  $regularNuts     | ".PHP_EOL;
echo "| Grosse(s) noisette(s)    |  $bigNuts    | ".PHP_EOL;
echo "-------------------------------------";

var_dump($smallNuts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <div id="tac">
        <?php echo   $regularNuts ?>
    </div>
</body>
</html>
