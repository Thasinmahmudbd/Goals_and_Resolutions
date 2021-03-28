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
    <link rel="stylesheet" href="Style_css/create_goal_style.css">

</head>
<body>
   
    <div class="container">
        
        <!-- headline-and-navbar-start -->
        
        <!-- including headline and navbar -->
    
        <?php include"Includes/headline_and_navbar_inc.php"; ?>
            
        <!-- headline-and-navbar-end -->
            
        <!-- create-post-form-start -->

            <form class="form" action="actions.php" method="post">
                <label class="set_goals" for="post">Set Goals</label>
                <textarea class="textarea_for_set_goals" name="goals" required id="goals"></textarea>
                <button class="post_btn" type="submit" name="set" id="set">Set</button>                    
            </form>
            
        <!-- create-post-form-end -->
            
        <!-- note_start -->
            
        <?php countGoals(); ?>
            
        <!-- note_stop -->

    </div>
    
</body>
</html>
