<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php
if (isset($_POST['submit'])) { 
  $username = $_POST['username'];
  $password = $_POST['password'] ;
  $id = $_POST['id'];

  $query = "DELETE FROM users ";
  $query .= "WHERE id = $id ";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die(mysqli_error($connection));
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>php crud</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2>PHP Delete</h2>
<div class="container">
  <h2>Select the id to delete from the database</h2>
<div class="form-group">
   <select name="id" id="">
      <?php
      showAlldata();
      ?>
     </select>
     </div>
 <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-danger" value="Delete">Delete</button>
    </div>
  </div>
</form>

</div>
</body>
</html>