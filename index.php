<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table, th, td{
            border:1px solid black;
        }
        </style>
</head>
<body>
<label for="gsearch">Search Here:</label>
<input type="search" id="gsearch" name="gsearch">
<input type="submit">
<br>
<br>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Image</th>
  </tr>
<?php
  include 'connection.php';
  $sql = "Select * From collect";
  $result = mysqli_query($conn, $sql);


  while($row = mysqli_fetch_assoc($result)){
    ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><img src="<?php echo $row['image']; ?>" width="100" height="50"></td>
  </tr>


<?php
  }
?>
</table>
</body>
</html>