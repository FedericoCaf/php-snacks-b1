<?php


function getRandomArray($min, $max, $totNum){

  if(($max - $min) < $totNum){
    $totNum = ($max - $min) + 1;
  }

  $arrayRandom = [];
  while(count($arrayRandom) < $totNum) {
    $numRand = rand($min, $max);
  
    if(!in_array($numRand, $arrayRandom)) {
       $arrayRandom[] = $numRand;
    }
  }

  return $arrayRandom;
  
}


var_dump(getRandomArray(1, 5, 10));

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>