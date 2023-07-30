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
<form action="" method="GET">
  <label for="gsearch">Search Here:</label>
  <input type="search" id="search" name="search">
  <input type="submit">
</form>
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
  $message='';
  // $sql = "Select * From collect";
  if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql = "SELECT * FROM collect WHERE name LIKE '%$search%'";
  } else {
    $sql = "SELECT * FROM collect";
    // echo "Data not found";
  }



  // $sql = "Select * FROM collect";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){

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

} elseif(isset($_GET['search']) && mysqli_num_rows($result)==0) {
  echo "Data not found";
} else {
  echo "empty table";
}
?>
<?php
// if(isset($_GET['search']) && mysqli_num_rows($result)==0){
//   $message = 'Data not found';
// }
// echo $message;
?>
</table>
</body>
</html>
