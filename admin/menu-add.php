<html>
<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["menu-name"];
    $url = $_POST["menu-url"];

    $sql = "INSERT INTO `tbl_menu`(`name`, `url`) VALUES('$name', '$url');";

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
