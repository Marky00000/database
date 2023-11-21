<?php
    include "configure.php";

    if(isset($_POST['update'])){
        $prod_id = $_POST['prod_id'];
        $prod_name = $_POST['prod_name'];
        $arrival_date = $_POST['arrival_date'];
        $cost = $_POST['cost'];
        $quantity = $_POST['quantity'];

        $sql = "UPDATE stock SET prod_id='$prod_id', prod_name='$prod_name', arrival_date='$arrival_date', cost='$cost', quantity='$quantity' WHERE prod_id='$prod_id'";

        $result = $conn->query($sql);

    if($result == TRUE){
            echo "Updated record successfully!!!";
        }
        else{
            echo "ERROR!!!". $conn->error;
        }
    }

    if(isset($_GET['prod_id'])){
        $prod_id = $_GET['prod_id'];
        $sql = "SELECT * FROM 'stock' WHERE 'prod_id'='$prod_id'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
         
			  $prod_id = $row['prod_id'];  
			  $prod_name = $row['prod_name']; 
			  $arrival_date = $row['arrival_date']; 
			  $cost = $row['cost']; 
              $quantity = $row['quantity']; 
            }

            

        
        }

    }
?>
<!DOCTYPE html>
<html>
<body>
        <h2>  Update Contact </h2>
        <form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>
     
        ID:<br>
        <input type="text" name="id">
        
</br>
        Name:<br>
        <input type="text" name="name">
        
</br>
        Arriva:<br>
        <input type="text" name="date">
</br>
        Cost:<br>
        <input type="text" name="cost">
</br>
        Quantity:<br>
        <input type="text" name="quantity">
</br>

        <input type="submit" value="update" name="update"
        </fieldset>
        </form>
</body>
</html>