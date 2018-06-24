<?php include "db.php"; ?>
 <?php 
  function showAlldata(){

$query = "SELECT * FROM users";

global $connection;
$result = mysqli_query($connection,$query);
 //Here we will have all the id's in the database in the select option box
        while ($row = mysqli_fetch_assoc($result)) {

          $id = $row['id'];
          echo "<option value='$id'>$id</option>";
        }

    }


?>