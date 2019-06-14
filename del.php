<?php
$con=mysqli_connect('localhost','root','','demo');
$id=$_GET['id'];
$query= "DELETE FROM `demo` WHERE  id='$id'";
$run=mysqli_query($con,$query);
if($run==true)
{
	?>
  <script> alert("data is deleted"); </script>
  <?php
  header("location:record.php");
}
else{
	echo"error";
}
?>