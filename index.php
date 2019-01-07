<?php
$input1 = rand(0, 10);
$input2 = rand(0, 10);
function compare($number1, $number2){
  if ($number1 > $number2){
    return 'Le premier nombre est plus grand';
  }elseif ($number1 < $number2){
    return 'Le premier nombre est plus petit';
  }else{
    return 'Les deux nombres sont identiques';
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>php partie4</title>
</head>
<body>
  <p><?= $input1 ?></p>
  <p><?= $input2 ?></p>
  <p><?= compare($input1, $input2) ?></p>
</body>
</html>
