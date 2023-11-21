<?php
	include "configure.php";


	if(isset($_POST['submit'])){
         $id = $_POST['id'];
         $name = $_POST['name'];
	     $email = $_POST['email'];
	     $phone = $_POST['phone'];
	     $title = $_POST['title'];
         $created = $_POST['created'];
	

	$sql = "INSERT INTO user (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES ('$id', '$name', '$email', '$phone', '$title', '$created')";

	$result = $conn->query($sql);

	if($result == TRUE){
	echo "New record created successfully!!!";
	}
	else{
	echo "ERROR!!!".$sql."<br>". $conn->error;
	}
	$conn->close();
}	
?>
<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
        <fieldset>
                <center>
            <legend> Create Contact </legend>

            <br></br>

            ID:<br>
            <input type="text" name="id">
            </br>
            Name:<br>
            <input type="text" name="name" >
            </br>
            Email:<br>
            <input type="text" name="email">
            </br>
            Phone:<br>
            <input type="text" name="phone">
            </br> 
            Title:<br>
            <input type="text" name="title">
            </br> 
            Created:<br>
            <input type="text" name="created">
            </br> 
            <br></br>
            <input type="submit" name="submit" value="submit">
            </center>
        </fieldset>
</form>
</body>
</html>