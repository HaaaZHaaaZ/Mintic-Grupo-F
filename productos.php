<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continental Restaurant</title>
    
    <link rel="stylesheet" href="./css/styles.css">
    
  
</head>
<body>
    <?php 
    include './views/navbar.html'
    ?>  
    <div class="contenido_productos">
    <?php 
    include './views/region_colombia.html'
    ?>  
    <?php 
    include './views/region_italia.html'
    ?>
    <?php 
    include './views/region_japon.html'
    ?>  
   
    </div>
    <?php 
    include './views/footer.html'
    ?>

</body>
</html>