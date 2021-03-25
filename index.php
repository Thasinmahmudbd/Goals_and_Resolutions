

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
            
            <!-- post-template-start -->

            <div class="posts">

                <div class="date">
                    <p>Date</p>
                </div>

                <div class="goals">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad vel officia enim nemo quisquam quidem aut, natus esse earum iste.</p>
                </div>

                <div class="goals_status">
                    <form action="index.html" method="post">
                        <button class="complete_btn" type="submit" name="completed">Goal <br>Achived</button>
                    </form>
                </div>

            </div>
            
            <!-- post-template-end -->

        </div>

    </div>
</body>
</html>
