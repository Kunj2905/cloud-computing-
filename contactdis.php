<?php
include 'MENU.php';
include 'connection.php';

if(isset($_REQUEST['save'])){

$First_Name = $_REQUEST['First_Name'];
$Last_Name = $_REQUEST['Last_Name'];
$Email = $_REQUEST['Email'];
$Password = $_REQUEST['Password'];
$Country = $_REQUEST['Country'];



$sql = "Insert into contact(First_Name,Last_Name,Email,Password,Country) VALUES('$First_Name','$Last_Name','$Email','$Password','$Country')";

$add=mysqli_query($conn,$sql);

if($add){

	//echo "data added successfully";
}else{
	echo "fail".mysqli_error($conn);
}

}
if(isset($_REQUEST['deletId'])){
	$id=$_REQUEST['deletId'];
	$delete="delete from contact where id=$id";

	$deleteexc=mysqli_query($conn,$delete);

	if($deleteexc){
		//echo "delete success";
	}else{
		echo "delete fail".mysqli_error($conn);
	}
}

if(isset($_REQUEST['update'])){
	$id=$_REQUEST['id'];
	$First_Name=$_REQUEST['First_Name'];
	$Last_Name=$_REQUEST['Last_Name'];
	$Email=$_REQUEST['Email'];
	$Password=$_REQUEST['Password'];
	$Country=$_REQUEST['Country'];
	
	

	$update="update contact set First_Name='$First_Name',Last_Name='$Last_Name',Email='$Email',Password='$Password',Country='$Country' where id=$id";
	$updateexc=mysqli_query($conn,$update);
	if($updateexc){
		echo 'success';
	}else{
		echo 'fail'.mysqli_error($conn);
	}
}

$select = "select * from contact";
$result = mysqli_query($conn,$select);

?>


<div class="bg-dark pt-2">
<table class="table table-dark table-hover">
	<thead>
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
		    <th>EMAIL ID</th>
		    <th>PASSWORD</th>
		    <th>COUNTRY</th>
		  
		    
		    <th>Action</th>
		</tr>

	</thead>
	<tbody>
		<?php if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row['First_Name'];?></td>
			<td><?php echo $row['Last_Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Password'];?></td>
			<td><?php echo $row['Country'];?></td>
			
			
			<td>
				<a href="contactdis.php?deletId=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
				<a href="contect.php?editId=<?php echo $row['id']; ?>" class="btn btn-primary ">Edit</a>

			</td>
		</tr>

	<?php } } ?>
	</tbody>
	</table>
	</div>






	