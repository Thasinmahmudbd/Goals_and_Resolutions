<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goals and resolutions</title>

    <link rel="stylesheet" href="Style_css/index_style.css">
    <link rel="stylesheet" href="Style_css/create_goal_style.css">
    <link rel="stylesheet" href="Style_css/edit_goals_style.css">

</head>
<body>
   
   <!-- database-connections-start -->
   
   <?php include"Includes/database_connection_inc.php"; ?>
    
    <!-- database-connections-end -->
   
    <div class="container">
        
        <!-- headline-and-navbar-start -->

        <div class="head_line">
            <p>Goals & Resolutions</p>
        </div>

        <div class="section">
           
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
            
            <!-- create-post-form-start -->

                <form class="form" action="">
                    <label class="set_goals" for="post">Set Goals</label>
                    <textarea class="textarea_for_set_goals" name="post" required id="post"></textarea>
                    <button class="post_btn" type="submit" name="set">Set</button>                    
                </form>
            
            <!-- create-post-form-end -->
            
            <!-- edit-post-template-start -->

            <div class="posts">

                <div class="date">
                    <p>Date</p>
                </div>

                <div class="goals">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad vel officia enim nemo quisquam quidem aut, natus esse earum iste.</p>
                </div>

                <div class="goals_status">
                    <form action="action.php" method="post">
                        <button class="edit_btn" type="submit" name="update">
                        Edit</button>
                    </form>
                </div>

            </div>
            
            <!-- edit-post-template-end -->

        </div>

    </div>
</body>
</html>
