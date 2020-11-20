<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2phpP4</title>
</head>
<body>

<?php

function chainedeCaractere($phrase, $parameter)

{
    return $parameter .''. $phrase;

}

$result = chainedeCaractere('j\'adore le php', 'mais c\'est compliqué!');
echo $result;


?>

</body>
</html>