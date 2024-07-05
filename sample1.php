<?php
	$name1=$_POST['name'];
	$adde=$_POST['address'];
	$pho=$_POST['phone'];

	$conn=new mysqli('localhost','root','','watches');
	if($conn->connect_error){
		echo "Unsuccessful Connection";
	}
    else  
    {
		    $q="INSERT INTO `register`(`name`, `address`, `phone`) VALUES ('$name1','$adde','$pho')";
		    $check=$conn->query($q);
		    header("location: skeleton.html");
	}
        
?>
