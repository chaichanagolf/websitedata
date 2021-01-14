<?php
$file = fopen("data.txt", "r") or die("Unable to open file!");
?>
<html>
<head>
   <title></title>
   <meta http-equiv="refresh" content="5" > 
</head>
<body>
   <pre>
       <?php
       while($line = fgets($file)) {
         echo $line;
       } 
       ?>
   </pre>
</body>
</html>