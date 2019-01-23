<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    
 <ul>

  <?php

   //Variable
    $i = 0;
    $num = 1;

    //For para sacar impares
    for ($i = 0; $i <= 20; $i++) {
     echo "<li>$num</li>";
     $num = $num + 2;
    }

  ?>

 </ul>

</body>
</html>

