

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
    <link rel="stylesheet" href="Style_css/info_style.css">

</head>
<body>
   
    <div class="container">
        
        <!-- headline-and-navbar-start -->
        
        <!-- including headline and navbar -->
    
        <?php include"Includes/headline_and_navbar_inc.php"; ?>
            
        <!-- headline-and-navbar-end -->
            
        <!-- info-start -->
            
        <div class="post_whitespace"></div>
           
        <div class="personal_info">
            
            <div class="image">
                <img class="profile_image" src="Media/pictures/Thasin.jpg" alt="Profile image">
            </div>

            <div class="info">
                <p>Thasin Mahmud</p>
            </div>

            <div class="about box">
                <h3>About</h3> <hr>
                <p>This is a small project that I did using procedural PHP. It a simple CMS (Content Management System). We have the basic create, read, update and delete (CRUD) functions and an extra counting function. This was a fun little project to work on. I hope to improve more in the future.</p>
            </div>

            <div class="database box">
                <h3>Database</h3> <hr>
                <p>Since this is a CRUD based web-app, a database is used to store the data. I used phpmyadmin in my local host and MySQL was used to perform all the data manipulation between the UI and database. The database structure is given below.<p>

                <p><b>Database name:</b> goals_and_resolutions. <br><b>Table name:</b> goals_table. <br><b>Table: </b></p>

                <table border="2px" class="table">
                    <tr>
                        <th>Column name</th>
                        <th>Data type</th>
                    </tr>
                    <tr>
                        <td>goals_id (PK)</td>
                        <td>int (11)</td>
                    </tr>
                    <tr>
                        <td>goals</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>date</td>
                        <td>varchar(50)</td>
                    </tr>
                </table>
            </div>

            <div class="ui_ux box">
                <h3>UI & UX</h3> <hr>
                <p>The UI (User Interface) was created from scratch. No external framework was used. As for the UX (User Experience), I made it pretty obvious and self-explanatory what this web-app is about. I think that a better UX is more important than a fancy UI, which is hard to understand. I also think avoiding unnecessary animations is a better thing to do than stacking up a lot of useless or unrelated animations. Only thing that does is raise confusion. </p>
            </div>
            
        </div>
            
        <!-- info-end -->

    </div>
        
        <div class="top_whitespace"></div>
        <div class="bottom_whitespace"></div>

</body>
</html>
