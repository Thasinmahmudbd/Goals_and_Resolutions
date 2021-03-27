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
        
        <div class="whitespace"><span></span></div>

        <div class="head_line">
            <p>Goals & Resolutions</p>
        </div>

        <div class="links">

                <div class="view">
                    <a href="index.php">
                        <img src="Media/icons/Eye_100px.png" width="25px" alt="view">
                    </a>
                </div>

                <div class="create">
                   <a href="create_goal.php">
                       <img src="Media/icons/Create_104px.png" width="25px" alt="create">
                   </a>
                </div>

                <div class="edit_delete">
                    <a href="edit_goals.php">
                        <img src="Media/icons/Edit_100px.png" width="25px" alt="edit or delete">
                    </a>
                </div>

        </div>
            
        <!-- headline-and-navbar-end -->
       
        <div class="section">
           
            
        </div>
            
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
