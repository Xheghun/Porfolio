<?php
require 'includes/sessions.php';

$submit = filter_input(INPUT_POST, "submit");
if (isset($submit)) {
    $project_name = filter_input(INPUT_POST, "project_name");
    $project_description = filter_input(INPUT_POST, "project_description");
    $project_link = filter_input(INPUT_POST, "project_link");
    
    $image = $_FILES['p_image']['name'];
    $target = "uploads/".basename($_FILES["p_image"]["name"]);
    
    $time = time();
    $f_time = strftime("%B-%d-%Y %H:%M:%S", $time);

    $con = mysqli_connect("localhost", "root", "", "portfolio");
    $sql = "INSERT INTO projects(name,description,link,p_image,time_added)"
            . "VALUES('$project_name','$project_description','$project_link','$image','$f_time')";
   
    if($_FILES['p_image']['name'] == null) {
        $_SESSION['error'] = "please select image";
        header("Location: projects.php");
        exit();
    }
    $query = mysqli_query($con,$sql);
    move_uploaded_file($_FILES['p_image']['tmp_name'], $target);
    
    if ($query) {
        
        $_SESSION["success"] = "project added Successfullly";
        header("Location: projects.php");
        exit;
    }
}
?>

<html>
    <head>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../voi/css/fontawesome-free-5.5.0-web/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="../voi/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../voi/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../voi/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="intro" class="view hm-red-light">
                <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 text-center">
                            <div class="container-fluid">
                                <form class="p-5 mr-2 ml-2" action="projects.php" enctype="multipart/form-data" method="post">
                                    <div class="card container mt-4">
                                        <div class="md-form form-sm">
                                            <input required="" type="text" id="project_name" name="project_name" class="form-control" />
                                            <label for="project_name">Project Name</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <p class="mb-3">Project Picture</p>
                                            <input required="" type="file" accept="image/*" class="form-control" name="p_image" id="p_image"/>

                                        </div>
                                        <div class="md-form form-sm">
                                            <input required="" type="text" id="project_link" class="form-control" name="project_link"/>
                                            <label for="project_link">Project Link</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <textarea required="" cols="48" class="md-textarea" id="project_description" name="project_description"></textarea>
                                            <label for="project_description">Project Description</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="submit" name="submit" class="mb-3 btn btn-outline-black" />
                                        </div>
                                            <?php 
                                                echo success();
                                                echo error();
                                            ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="../voi/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../voi/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../voi/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../voi/js/mdb.min.js"></script>
        <!-- Font Awesome core JavaScript -->
        <script type="text/javascript" src="../voi/css/fontawesome-free-5.5.0-web/js/all.js"></script>
    </body>
</html>