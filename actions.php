<?php ob_start(); ?>

<!-- including database connections  -->
   
<?php include"Includes/database_connection_inc.php"; ?>
    
<!-- including functions page -->
    
<?php include"Includes/functions_inc.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <!-- create post function call -->
    
    <?php setGoals(); ?>

    <!-- create post edit function call -->
    
    <?php updateGoals(); ?>
    
</body>
</html>