<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" ></form>
  <?php 
  $countFile = 'inqs'; // Change this to the actual path of your txt file
  $inqs = $_GET["name"];
  
  file_put_contents($countFile, "" && $inqs);
  ?>
</body>
</html>
$countFile = 'visites.txt'; // Change this to the actual path of your txt file
    $count = 0;
    
    if (file_exists($countFile)) {
        $count = intval(file_get_contents($countFile));
    }
    
    $count++;
    file_put_contents($countFile, $count);