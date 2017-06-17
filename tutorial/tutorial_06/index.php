<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="style/main.css"/>

    <!-- JQUEYR -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


</head>
<body>

<?php
 include("common/db_connection.php");

$sql = "SELECT * FROM `tbl_menu`;";
$result = $conn->query($sql);

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
                <!--<span class="sr-only">Toggle navigation</span>-->
                <!--<span class="icon-bar"></span>-->
                <!--<span class="icon-bar"></span>-->
                <!--<span class="icon-bar"></span>-->
                <!--</button>-->
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>

                            <li class="" style="font-weight: bold; text-decoration: underline;">
                                <a href="<?php echo $row["url"] ?>"><?php echo $row["name"] ?> <span class="sr-only">(current)</span></a>
                            </li>

                            <?php

                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

    </div>
</nav>


<div class="container">
    <div class="row">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
                <li data-target="#main-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/la.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/chicago.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/ny.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#main-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <!-- LEFT CONTENT -->
        <div class="col-md-8">

            <h1 class="news-type">Latest news</h1>

            <h1>Title</h1>
            <p class="lead">by <a href="#">Author</a></p>
            <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam
                sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum
                minus inventore?
            </p>

            <hr>
            <h1>Title</h1>
            <p class="lead">by <a href="#">Author</a></p>
            <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam
                sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum
                minus inventore?
            </p>

            <h1 class="news-type">Featured news</h1>

            <hr>
            <h1>Title</h1>
            <p class="lead">by <a href="#">Author</a></p>
            <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam
                sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum
                minus inventore?
            </p>

            <hr>
            <h1>Title</h1>
            <p class="lead">by <a href="#">Author</a></p>
            <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam
                sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum
                minus inventore?
            </p>


        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <div class="well">
                <h4>Category</h4>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="http://www.google.com">menu 1</a></li>
                            <li>test1</li>
                            <li>test1</li>
                            <li>test1</li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>test1</li>
                            <li>test1</li>
                            <li>test1</li>
                            <li>test1</li>

                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>

</body>
</html>
