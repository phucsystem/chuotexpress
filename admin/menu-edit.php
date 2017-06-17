<html>
<body>

<?php

include("../common/db_connection.php");

// Get data to display on inputs
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET["id"];
    $query_sql = "SELECT * FROM `tbl_menu` WHERE id=" . $id;

    $result = $conn->query($query_sql);
    $row = $result->fetch_assoc();
}

// Update data into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["menu-id"];
    $name = $_POST["menu-name"];
    $url = $_POST["menu-url"];

    $update_sql = "UPDATE `tbl_menu` SET `name`='$name',`url`='$url' WHERE id=$id";

    $conn->query($update_sql);

    // Redirect to menu view page
    header('Location: '. 'menu-view.php');
}

?>


  <h1>Edit menu page</h1>

  <form method="POST" action="menu-edit.php">
    <span>Name</span>
    <br>
    <input type="text" name="menu-name" value="<?php echo $row["name"] ?>"/>

    <br>

    <span>Url</span>
    <br>
    <input type="text" name="menu-url" value="<?php echo $row["url"] ?>"/>

    <input type="hidden" name="menu-id" value="<?php echo $row["id"] ?>" />

    <br>
    <button type="submit">Update </button>
  </form>

</body>
</html>
