<?php
    include "configure.php";


    if(isset($_POST['delete'])){
        $prod_id = $_POST['id'];
    

 

       
      
      // sql to delete a record
      $sql = "DELETE FROM user WHERE id='$id'";
      
      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
  
    }
   

?>




<!DOCTYPE html>
<html>
<body>
        <h2> User Delete Form </h2>
        <form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>
     
       Product ID:<br>
        <input type="text" name="id">
        
</br>
 

        <input type="submit" value="delete" name="delete"
        </fieldset>
        </form>
</body>
</html>
?>