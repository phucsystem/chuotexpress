<html>
<head>
  <link rel="stylesheet" href="style/menu.css"/>
</head>
<body>
  <h1>Welcome to Menu Management</h1>
  <p>

<?php

$db_server = "localhost";
$db_user_name = "root";
$db_password = "123456";
$db_name = "chuotexpress";

// Create connection
$conn = new mysqli($db_server, $db_user_name, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `tbl_menu`;";
$result = $conn->query($sql);



?>


    <table border="1" class="full-menu">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Url</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["url"] ?></td>
                  </tr>
        <?php }}?>


      </tbody>
    </table>

  </p>
</body>
<html>
