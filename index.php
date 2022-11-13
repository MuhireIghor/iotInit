<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $handler = fopen("retriever.txt","r");
    while(!feof($handler)){
        $data = fgets($handler);
        print($data);
    }
    
    
    ?>
   <a href="./formIot.html" style="text-decoration: none;color:cyan">Back</a>
    
    
</body>
</html>