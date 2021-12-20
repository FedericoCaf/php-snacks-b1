<?php

 $paragrafo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At dolores similique, perferendis eos ex, beatae esse assumenda reprehenderit voluptatum modi labore ducimus. Eum iure beatae enim itaque autem laborum aperiam tempora, cum laboriosam explicabo illo vero dolores possimus natus quibusdam totam repellat molestias vitae obcaecati nesciunt deleniti. Ullam qui praesentium dicta doloribus. Optio minima debitis odio maxime saepe cum veniam consequuntur ratione, et ipsa temporibus dolore laudantium. Repudiandae pariatur, culpa eveniet assumenda fugiat minima incidunt tenetur beatae sunt et vel, nam accusantium facilis esse voluptatem. Accusantium quidem officiis, accusamus veritatis odit voluptate perferendis ea amet beatae sequi eaque, exercitationem nisi!';


 $arrayParagrafi = (explode('.', $paragrafo));

//  var_dump($arrayParagrafi);

 for($i; $i < count($arrayParagrafi); $i++){
   echo $i . $arrayParagrafi[$i];
   echo "<br>";
 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
  

</body>
</html>