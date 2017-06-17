<html>
<body>

<?php

include("../common/db_connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["menu-name"];
    $url = $_POST["menu-url"];

    $sql = "INSERT INTO `tbl_menu`(`name`, `url`) VALUES('$name', '$url');";

    $conn->query($sql);

    // Redirect to menu view page
    header('Location: '. 'menu-view.php');
}

?>


  <h1>Add new menu page</h1>

  <form method="POST" action="menu-add.php">
    <span>Name</span>
    <br>
    <input type="text" name="menu-name"/>

    <br>

    <span>Url</span>
    <br>
    <input type="text" name="menu-url"/>

    <br>
    <button type="submit">Add </button>
  </form>

</body>
</html>
