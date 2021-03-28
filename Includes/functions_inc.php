<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goals and resolutions</title>

</head>
<body>
    
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!--connecting database-->
<?php include"database_connection_inc.php"; ?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to store post data in database.
function setGoals() {
global $connection; 
    
if(isset($_POST['set'])){
    
    // Getting data from form and storing in variables (with SQL injection).
    $goals = mysqli_real_escape_string( $connection, $_POST['goals'] );
    date_default_timezone_set('Asia/Dhaka');
    $posting_date = date("F j, Y, g:i a");
  
    // Form data insertion in Database: goals_and_resolutions, Table name: goals_table.
               
        //Data insertion.
        $insert_post_data = "INSERT INTO goals_table (goals, date) ";
        $insert_post_data .= " VALUES ('$goals' , '$posting_date');";
                        
        mysqli_query($connection, $insert_post_data);
        
        header("Location: index.php");

    }      
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to show goals that are stored in database.
function showGoals() {
global $connection; 
        
        //Data read.
        $read_post_data = "SELECT * FROM goals_table ORDER BY goals_id DESC;";
    
        $result = mysqli_query($connection, $read_post_data);
        
        while($row = mysqli_fetch_assoc($result)) {
            
            $post = $row['goals'];
            $post_date = $row['date'];
            $post_id = $row['goals_id'];

//post template
    echo "<div class='posts'>";

    echo    "<div class='date'>";
    echo        "<p>$post_date</p>";
    echo    "</div>";

    echo    "<div class='goals'>";
    echo        "<p>$post</p>";
    echo    "</div>";

    echo    "<div class='goals_status'>";
    echo        "<a class='complete_btn' href='actions.php?p_d=$post_id'>Goal<br>Achieved</a>";
    echo    "</div>";

    echo "</div>";


        }
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to show goals in the edit page with edit functionality.
function showEditableGoals() {
global $connection; 
        
        //Data read.
        $read_post_data = "SELECT * FROM goals_table ORDER BY goals_id DESC;";
    
        $result = mysqli_query($connection, $read_post_data);
        
        while($row = mysqli_fetch_assoc($result)) {
            
            $post = $row['goals'];
            $post_date = $row['date'];
            $post_id = $row['goals_id'];

//post template
    echo "<div class='posts'>";

    echo    "<div class='date'>";
    echo        "<p>$post_date</p>";
    echo    "</div>";

    echo    "<div class='goals'>";
    echo        "<p>$post</p>";
    echo    "</div>";

    echo    "<div class='goals_status'>";
    echo            "<a class='edit_btn' href='edit_goals.php?p_id=$post_id'>Edit<a>";
    echo    "</div>";

    echo "</div>";

        }

}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to put goals in the editor textarea.
function fetchGoals() {
global $connection; 

if(isset($_GET['p_id'])){

    $post_id = $_GET['p_id'];

        //Data read.
        $read_post_data_again = "SELECT * FROM goals_table WHERE goals_id = '$post_id';";

        $result = mysqli_query($connection, $read_post_data_again);

        while($row = mysqli_fetch_assoc($result)) {
            
            $post = $row['goals'];

            echo "$post";

            return $post_id;

        }
}
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to update goals.
function updateGoals() {
global $connection; 
    
if(isset($_POST['update'])){
    
    // Getting data from form and storing in variables with SQL injection.
        $goal_update = mysqli_real_escape_string( $connection,  $_POST['post'] );
        $post_id = $_POST['post_id'];
        
        //Data update.
        $update_post_data = "UPDATE goals_table SET goals = '$goal_update' WHERE goals_id = '$post_id';";
                        
        $update = mysqli_query($connection, $update_post_data);
        
        header("Location: edit_goals.php");

}            
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to update goals.
function deleteGoals() {
global $connection; 
    
        if(isset($_GET['p_d'])){
        
        $post_id_delete = $_GET['p_d'];
        
        //Data delete
        $delete_post_data = "DELETE FROM goals_table WHERE goals_id = $post_id_delete ;";
        
        mysqli_query($connection, $delete_post_data);
        
        header("Location: index.php");
        
        }
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to update goals.
function countGoals() {
global $connection; 
        
        //Data count
        $count_post_data = "SELECT COUNT(*) AS total FROM goals_table;";
        
        $result = mysqli_query($connection, $count_post_data);
        $value = mysqli_fetch_assoc($result);
        $number_of_rows = $value['total'];
    
        echo    "<div class='note'>";
        echo        "<p>You have $number_of_rows unachieved goals!</p>";
        echo    "</div>";
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
</body>
</html>