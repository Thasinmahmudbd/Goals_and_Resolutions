<!-- including database connections  -->
   
<?php include"Includes/database_connection_inc.php"; ?>
    
<!-- including functions page -->
    
<?php include"Includes/functions_inc.php"; ?>

<?php global $post_id; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Goals</title>

    <link rel="stylesheet" href="Style_css/index_style.css">
    <link rel="stylesheet" href="Style_css/create_goal_style.css">
    <link rel="stylesheet" href="Style_css/edit_goals_style.css">

</head>
<body>
   
    <div class="container">
        
        <!-- headline-and-navbar-start -->
        
        <!-- including headline and navbar -->
    
        <?php include"Includes/headline_and_navbar_inc.php"; ?>
            
        <!-- headline-and-navbar-end -->
            
        <!-- edit-post-form-start -->

            <form class="form" action="actions.php" method="post">
                <label class="set_goals" for="post">Edit Goals</label>
                <textarea class="textarea_for_set_goals" name="post" required id="post"><?php $post_id = fetchGoals(); ?></textarea>
                <input type="hidden" name="post_id" id="post_id" value=" <?php echo "$post_id"; ?> ">
                <button class="post_btn" type="submit" name="update">Update</button>                    
            </form>
            
        <!-- edit-post-form-end -->
            
        <!-- edit-post-template-start -->

        <?php showEditableGoals(); ?>
            
        <!-- edit-post-template-end -->

    </div>
</body>
</html>
