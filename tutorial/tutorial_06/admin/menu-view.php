<html>
<head>
  <link rel="stylesheet" href="style/menu.css"/>
</head>
<body>
  <h1>Welcome to Menu Management</h1>
  <p>

<?php
include("../common/db_connection.php");


$sql = "SELECT * FROM `tbl_menu`;";
$result = $conn->query($sql);
?>


<input type="button" id="add-new-button" value="Add new" onclick="location.href = 'menu-add.php';"/>

    <table border="1" class="full-menu">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Url</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                  <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["url"] ?></td>
                    <td>
                      <button type="button" onclick="location.href = 'menu-edit.php?id=<?php echo $row["id"] ?>';">Edit</button>
                        <button type="button" >Delete</button>
                    </td>
                  </tr>
        <?php

                }
        }?>


      </tbody>
    </table>

  </p>
</body>
<html>
