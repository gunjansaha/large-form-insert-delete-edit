
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head> 
 
 
 <center> <form method="post" action=" " enctype="multipart/form-data">
             <input type='text' value="" name="ss" id="txtsearch" />
             <input type="submit" name="submit" value="submit"/>
			 </form></center>



<table border="2">
 <table class="table">
  <thead class="thead-dark">                           
    <tr>
      <th scope="col">id</th>            
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">gender</th>
	  <th scope="col"> age </th>
	  <th scope="col">  phone    </th>
	  <th scope="col">  address </th>
	  <th scope="col"> city  </th>
	  <th scope="col"> state  </th>
	  <th scope="col">  zip   </th>
	  <th scope="col"> email  </th>
	  <th scope="col">password  </th>   
         <th scope="col">image  </th> 	  
	  <th scope="col">action  </th>   
      <form method="post"> <th scope="col"><input onclick="return confirm('are u sure?')" type="submit" value="delete all" name="del"></th></form> 	  
    </tr>
  </thead>




<?php 
 $con=mysqli_connect('localhost','root','','demo');
  if($con==false)
{
	echo"con notok";
}
   if(!empty($_POST['ss']))
        {
	$ss=($_POST['ss']);
	
	$query=" SELECT * FROM `demo` WHERE first_name LIKE '%".$ss."%'";
	$run=mysqli_query($con,$query);
		  while($data=mysqli_fetch_assoc($run))
	  {
		  ?>
		  
	 <tr>
		 
		  <td><?php echo $data['id']; ?></td>
		   <td><?php echo $data['first_name']; ?></td>
		    <td><?php echo $data['last_name']; ?></td>
					  <td><?php echo $data['gender']; ?></td>
					    <td><?php echo $data['age']; ?></td>
						  
						    <td><?php echo $data['phone']; ?></td>
							  <td><?php echo $data['address']; ?></td>
							    <td><?php echo $data['city']; ?></td>
								  <td><?php echo $data['zip']; ?></td>
								    <td><?php echo $data['about']; ?></td>
									  <td><?php echo $data['email']; ?></td>
			 <td><?php echo $data['password']; ?></td>
			 <td> <img src="images/<?php echo $data['imagename']; ?>" width="200" height="200"></td>
			  <td><a href="edit.php?id=<?php echo $data['id']; ?>">edit</a></td>
			  <td><a href="del.php?id=<?php echo $data['id']; ?>">delete</a></td>
			  </tr>
			  
			  
			  <?php
	  }
		}
		
	  
	
else
{
$con=mysqli_connect('localhost','root','','demo');
$query=" SELECT * FROM `demo`";
$run=mysqli_query($con,$query);
 	if($run==TRUE)
	{
	   while($data=mysqli_fetch_assoc($run))
	  {
		  ?>
		 
		 	 <tr>
		 
		  <td><?php echo $data['id']; ?></td>
		   <td><?php echo $data['first_name']; ?></td>
		    <td><?php echo $data['last_name']; ?></td>
					  <td><?php echo $data['gender']; ?></td>
					    <td><?php echo $data['age']; ?></td>
						  
						    <td><?php echo $data['phone']; ?></td>
							  <td><?php echo $data['address']; ?></td>
							    <td><?php echo $data['city']; ?></td>
								  <td><?php echo $data['zip']; ?></td>
								    <td><?php echo $data['about']; ?></td>
									  <td><?php echo $data['email']; ?></td>
			 <td><?php echo $data['password']; ?></td>
			 <td> <img src="images/<?php echo $data['imagename']; ?>" width="200" height="200"></td>
			  <td><a href="edit.php?id=<?php echo $data['id']; ?>">edit</a></td>
			  <td><a href="del.php?id=<?php echo $data['id']; ?>">delete</a></td>
			  </tr>
			  
			  <?php
	  
	  }
	}
	}
	
 function showdata(){
	 global $con;
 }
 
 
?>
</table>
<br>
<a href="form.php"> insert more</a>
</html>
<?php
if(isset($_POST['del']))
{
	$con=mysqli_connect('localhost','root','','demo');
$query=" DELETE FROM `demo`";
$run=mysqli_query($con,$query);
 	if($run==TRUE)
	{
		header("location:record.php");	
	}
}
	    	
		
		?>
