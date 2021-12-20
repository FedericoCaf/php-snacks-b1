<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Snack 6</title>
</head>
<body>

<div class="gray-div">
  <h2>TEACHERS</h2>
  <?php  
   
   for($i=0; $i<sizeof($db['teachers']); $i++){
    echo $db["teachers"][$i]["name"] . ' ' . $db["teachers"][$i]["lastname"];
    echo "<br>";
    
   }
   
  
  ?>
 
</div>

<div class="green-div">
<h2>PM</h2>
<?php  
   
   for($i=0; $i<sizeof($db['pm']); $i++){
    echo $db["pm"][$i]["name"] . ' ' . $db["pm"][$i]["lastname"];
    echo "<br>";
    
   }
   
  
  ?>
</div>
  
</body>
</html>