<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require 'db.php';
 
// Check connection
$query=$_GET["dataaa"];
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

 
if(isset($query)){
    // Attempt select query execution
    $sql = "SELECT * FROM candidate WHERE candidate_name LIKE '" . $query . "%'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "" . $row['candidate_name'] . "";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No matches found for $query";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
 
// close connection
mysqli_close($conn);
?>
