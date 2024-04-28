
<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="reg.php" method="POST">
<div>
First Name<br>
<input type="text" name="fname" />
</div>
<div>
Last Name<br>
<input type="text" name="lname" />
</div>
<div>
Age<br>
<input type="text" name="age" />
</div>
<div>
<input type="submit" value="Save" id="secret" />
</div>
</form>
<table cellspacing="0" cellpadding="2" id="sample" >
<thead>
	<tr>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Age </th>
		<th> Action </th>
	</tr>
</thead>
<tbody>
	<?php
	$sql=mysqli_query($conn,"SELECT * FROM `` WHERE 1");
	while($row=mysqli_fetch_array($sql)){
	?>
	<tr class="record">
		<td><?php echo $row['fname']; ?></td>
		<td><?php echo $row['lname']; ?></td>
		<td><?php echo $row['age']; ?></td>
		<td><a href="editform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="delete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM members");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>
</div>