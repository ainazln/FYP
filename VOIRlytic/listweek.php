<?php
	include 'dbconnect.php';
	mysqli_select_db($conn,'voirlytic');
	
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 1;
	}
	
	$num_per_page = 100;
	$start_from = ($page-1)*100;

	
	$query = "SELECT * FROM listweek limit $start_from, $num_per_page";
	$result = mysqli_query($conn,$query) or die('SQL Error');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List Week</title>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Dosis', sans-serif;
}

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  text-decoration: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

</style>
</head>

<body>	
<!DOCTYPE html>
<html>
<head>
	
	
</head>
<body>
<table align="center" border="1px">
        <tr>
            <th> time</th>
            <th> Title </th>
            <th> Review </th>
            <th> Sentiment </th>
			<th> Week </th>
        </tr>
        
        <?php 
        
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        
        <tr>
            <td><?php echo $rows['time'];?></td>
            <td><?php echo $rows['Title'];?></td>
            <td><?php echo $rows['Review'];?></td>
            <td><?php echo $rows['Sentiment'];?></td>
			<td><?php echo $rows['Week'];?></td>
        </tr>  
        
        <?php     
        }
          ?> 
    </table>
    <?php
		$pr_query = "select * from listweek";
		$pr_result = mysqli_query($conn, $pr_query);
		$total_record = mysqli_num_rows($pr_result );
		
		$total_page = ceil($total_record/$num_per_page);
		
		if($page>1)
		{
			echo "<a href='review.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
		}
		
		for($i=1; $i<$total_page; $i++)
		{
			echo "<a href='review.php?page=".$i."' class='btn btn-primary'>$i</a>";
		}
		
		if($i>$page)
		{
			echo "<a href='review.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
		}
	?>
	
	
	
    
	
</body>
</html>