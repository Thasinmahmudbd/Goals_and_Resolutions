

<!-- including database connections  -->
   
<?php include"Includes/database_connection_inc.php"; ?>
    
<!-- including functions page -->
    
<?php include"Includes/functions_inc.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goals and resolutions</title>

    <link rel="stylesheet" href="Style_css/index_style.css">

</head>
<body>
   
    <div class="container">
        
        <!-- headline-and-navbar-start -->
        
        <!-- including headline and navbar -->
    
        <?php include"Includes/headline_and_navbar_inc.php"; ?>
            
        <!-- headline-and-navbar-end -->
            
        <!-- post-template-start -->
            
        <div class="post_whitespace"></div>
            
        <?php showGoals(); ?>
            
        <!-- post-template-end -->

    </div>
        
        <div class="top_whitespace"></div>
        <div class="bottom_whitespace"></div>

</body>
</html>
