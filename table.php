<?php
$connect = mysqli_connect("localhost","root","","table");
$query = "SELECT * FROM `table_record";
$result1 = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="text-align: center;">Table Record</h1>
		</div>
		<div class="table">
		<div class="col-sm-12">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>age</th>
					<th>Mobile Number</th>
				</tr>
			</thead>
				<?php 
				$no=1;
				while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
            	<td><?php echo $no;?></td>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[4];?></td>
            </tr>
            <?php
            $no++;
        endwhile;?>
			</table>
		</div>
	</div>
</div>
</div>
</body>
</html>