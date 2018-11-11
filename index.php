    <?php
    // put your code here
    include_once './UploadPanel/includes/sessions.php';
    ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Rufai Oluwasegun</title>
    <!--        <!-- Font Awesome -->
    <        <link rel="stylesheet" type="text/css" href="voi/css/fontawesome-free-5.5.0-web/css/all.css">
            <!-- Bootstrap core CSS -->
            <link href="voi/css/bootstrap.min.css" rel="stylesheet">
            <!-- Material Design Bootstrap -->
            <link href="voi/css/mdb.min.css" rel="stylesheet">
            <!-- Your custom styles (optional) -->
            <link href="voi/css/style.css" rel="stylesheet">
<!--            <!-- Font Awesome -->-->
<!--            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
        </head>
        <body>


            <!--Main navigation -->
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark stylish-color-dark indigo fixed-top">
                    <div class="container">
                        <!-- Navbar brand -->
                        <a class="navbar-brand" href="index.php">Rufai Oluwasegun</a>

                        <!-- Collapse button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Collapsible content -->
                        <div class="collapse navbar-collapse" id="basicExampleNav">

                            <!-- Links -->
                            <ul class="navbar-nav mr-auto smooth-scroll">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#best-features">Best Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#examples">Examples
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <!-- Links -->
                        </div>
                        <!-- Collapsible content -->

                    </div>


                </nav>
                <!--/.Navbar-->

                <!-- Mask -->
                <div id="intro" class="view hm-red-light">
                    <div class="container-fluid full-bg-img d-flex align-items-center justify-content-center">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 text-center">
                                <h4 class="display-3 font-bold white-text mb-2">
                                    Rufai Oluwasegun
                                </h4>
                                <hr class="hr-light" />

                                <h4 class="white-text my-4">
                                    Basic Info About Me
                                </h4>

                                <button type="button"  class="btn btn-outline-white">
                                    <a style="color: #ffffff" href="#gallery">Read More</a> <i class="fa fa-book"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Mask -->
            </header>
            <!--End of Main navigation -->

            <!--site content-->
            <main class="mt-5">
                <div class="container">
                    <!-- Section: Best Features-->
                    <section id="best-features" class="text-center">
                        <!--Heading -->
                        <h2 class="mb-4">Best Features</h2>
                        <!-- /Heading -->
                        <!--Grid row -->
                        <div class="row d-flex justify-content-center mb-4">
                            <!--Grid Column -->
                            <div class="col-md-8">
                                <!--Description-->
                                <p>
                                    These Are My Current Best Features
                                </p>
                                <!-- /Description -->
                            </div>
                            <!-- /Grid Column -->
                        </div>
                        <!-- /Grid row -->


                        <!-- Grid row -->
                        <div class="row">
                            <!--Grid column -->
                            <div class="col-md-4 mb-4">
                                <i class="fa fa-3x fa-camera-retro orange-text"></i>
                                <h4 class="my-4 font-weight-bold">Experience</h4>
                                <p>
                                    10 years Programming Experience.
                                </p>
                            </div>
                            <!--Grid column -->

                            <!--Grid column -->
                            <div class="col-md-4 mb-4">
                                <i class="fa fa-3x fa-bicycle orange-text"></i>
                                <h4 class="my-4 font-weight-bold">Journey</h4>
                                <p>
                                    To Become a world class developer and make and
                                    impact as a Tech Enthusiast.
                                </p>
                            </div>
                            <!--Grid column -->

                            <!--Grid column -->
                            <div class="col-md-4 mb-4">
                                <i class="fa fa-3x fa-heart orange-text"></i>
                                <h4 class="my-4 font-weight-bold">Passion</h4>
                                <p>
                                    Love to Code In Java.
                                </p>
                            </div>
                            <!--Grid column -->
                        </div>
                        <!-- /Grid row -->
                    </section>
                    <!-- /Section: Best Features-->
                    <hr class="my-5"/>
                    <!-- Projects -->
                    <section id="projects">
                        <h2 class="mb-5 font-weight-bold text-center">Projects</h2>
                        <div class="container">
                            <div class="row">
                                        <div style="width: 100%;" class="MultiCarousel" data-items="1,1,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                            <div class="MultiCarousel-inner">
                                                <?php
                                                $connection = mysqli_connect("localhost", "root", "", "portfolio");
                                                $sql_q = "SELECT * FROM projects";
                                                $execute = mysqli_query($connection, $sql_q);
                                                if ($execute) {
                                                while ($row = mysqli_fetch_assoc($execute)) {
                                                $name = $row["name"];
                                                $description = $row["description"];
                                                $link = $row["link"];
                                                $image = $row["p_image"];
                                                ?>
    <!--                                            <div class="col-md-12 col-lg-4 mb-4">-->
                                                <div class="item card">
                                                    <div class="">
                                                        <div class="view overlay">
                                                            <img style="height: 200px;" class="card-img-top img-fluid" src="UploadPanel/uploads/<?php echo $image;?>" alt="project_image" />
                                                            <div class="mask waves-effect rgba-blue-light"></div>
                                                        </div>
                                                        <div class="card-body">
                                                            <h4 class="card-title"><?php echo $name; ?></h4>
                                                            <p class="card-text"><?php echo $description; ?></p>
                                                            <a class="btn stylish-color-dark" target="_blank" href="<?php echo $link; ?>">Check it Out</a>
                                                        </div>
                                                    </div>
                                                </div>
    <!--                                            </div>-->
                                                <?php }} ?>
                                            </div>
                                            <button class="btn btn-primary leftLst"><</button>
                                            <button class="btn btn-primary rightLst">></button>
                                        </div>
                                    </div>
                                </div>
                    </section>
                    <!-- \Projects -->
                    <hr class="my-5"/>

                    <!-- Section: Gallery-->
                    <section id="gallery">
                        <h2 class="mb-5 font-weight-bold text-center">Gallery</h2>
                        <!-- Grid row-->
                        <div class="row">
                            <!-- Grid column-->
                            <div class="col-md-6 mb-4">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
                                            <div class="mask waves-effect waves-light rgba-white-slight "></div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
                                            <div class="mask waves-effect waves-light rgba-white-slight "></div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
                                            <div class="mask waves-effect waves-light rgba-white-slight "></div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Grid column-->

                            <!-- Grid column-->
                            <div class="col-md-6">
                                <a href="" class="teal-text">
                                    <h6 class="mb-1">
                                        <i class="fa fa-heart mr-2"></i>
                                        <strong>Lifestyle</strong>
                                    </h6>
                                    <h4 class="mb-3">
                                        <strong>
                                            Very long Title
                                        </strong>
                                    </h4>
                                    <p>
                                        The carousel is a slideshow for cycling through a series of content,
                                        built with CSS 3D transforms and a bit of JavaScript.
                                        It works with a series of images, text, or custom markup.
                                        It also includes support for previous/next controls and indicators.
                                    </p>
                                    <p>
                                        The carousel is a slideshow for cycling through a series of content,
                                        built with CSS 3D transforms and a bit of JavaScript.
                                        It works with a series of images, text, or custom markup.
                                        It also includes support for previous/next controls and indicators.
                                    </p>
                                </a>
                            </div>
                            <!-- /Grid column -->
                        </div>
                        <!-- /Grid row-->
                    </section>
                    <!-- /Section: Gallery-->
                    <hr class="my-5"/>

                    <!-- Section: Contact-->
                    <section id="contact">
                        <!-- Heading -->
                        <h2 class="mb-5 font-weight-bold text-center">Contact</h2>
                        <!-- /Heading -->

                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-lg-5 col-md-12">
                                <div style="margin-left: 25px" class="card">
                                <form action="handlers/contact.php" method="post" class="p-5">
                                    <div class="md-form form-sm">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="name" id="name" class="form-control" />
                                        <label for="name">Your Name</label>
                                    </div>
                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="email" name="email" class="form-control" />
                                        <label for="email">Your Email Address</label>
                                    </div>
                                    <div class="md-form form-sm">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="subject" name="subject" class="form-control" />
                                        <label for="subject">Subject</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-unique">Send
                                            <i class="fa fa-paper-plane-o ml-2"></i></button>
                                    </div>
                                    <?php
                                    echo success();
                                    echo error();
                                    ?>
                                </form>
                                </div>
                            </div>
                            <!-- /Grid column -->
                            <!-- Grid column -->
                            <div class="col-lg-7 col-md-12">

                                <!-- Grid row -->
                                <div class="row text-center card">
                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-3 mt-3">
                                        <p><i class="fa fa-search-location mr-2 grey-text"></i>Igando, Lagos, Nigeria</p>
                                    </div>
                                    <!-- /Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-3">
                                        <p><i class="fa fa-home mr-2 grey-text"></i>97 Adexson Road, Igando, Lagos</p>
                                    </div>
                                    <!-- /Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-3">
                                        <p><i class="fa fa-phone mr-2 grey-text"></i>+234-9057-177-816</p>
                                    </div>
                                    <!-- /Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-3">
                                        <p><i class="fa fa-envelope mr-2 grey-text"></i>ysenruf@gmail.com</p>
                                    </div>
                                    <!-- /Grid column -->
                                </div>
                                <!-- /Grid row -->
                            </div>
                            <!-- /Grid column -->
                        </div>
                        <!-- /Grid row -->
                    </section>
                    <!-- /Section: Contact-->
                    <hr class="my-5"/>

                    <section id="ask_a_question">
                        <!-- Header -->
                        <h2 class="text-center font-weight-bold">About</h2>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 view overlay mb-3 mt-3">
                                        <img style="border-radius: 100%; width: 100%; height: 100%;" class="img-fluid" src="voi/img/MachineLearning.jpg" alt="picture"/>
                                        <div class="mask waves-effect rgba-blue-slight"></div>
                                    </div>
                                    </div>
                                </div>
                    </section>
                </div>
            </main>
            <!--end of site content -->

            <!--site footer-->
                <footer class="page-footer font-small cyan darken-3">

                    <!-- Footer Elements -->
                    <div class="container">

                        <!-- Grid row-->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 py-5">
                                <div class="mb-5 flex-center">

                                    <!-- Facebook -->
                                    <a class="">
                                        <span class="fa fa-facebook  fa-lg white-text mr-md-5 mr-3 fa-2x"> </span>
                                    </a>
                                    <!-- Twitter -->
                                    <a class="tw-ic">
                                        <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!-- Google +-->
                                    <a class="gplus-ic">
                                        <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Linkedin -->
                                    <a class="li-ic">
                                        <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Instagram-->
                                    <a class="ins-ic">
                                        <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                    </a>
                                    <!--Pinterest-->
                                    <a class="pin-ic">
                                        <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->

                    </div>
                    <!-- Footer Elements -->

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2018 Copyright:
                        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
                    </div>
                    <!-- Copyright -->

                </footer>
            <!--end of site footer -->

            <!-- SCRIPTS -->
            <!-- JQuery -->
            <script type="text/javascript" src="voi/js/jquery-3.3.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="voi/js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="voi/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="voi/js/mdb.min.js"></script>
            <!-- Font Awesome core JavaScript -->
            <script type="text/javascript" src="voi/css/fontawesome-free-5.5.0-web/js/all.js"></script>
            <!-- Carousel options -->
            <script>
                $('.carousel').carousel({
                    interval: 6000,
                })
            </script>

            <script type="text/javascript">
                $(document).ready(function () {
                    var itemsMainDiv = ('.MultiCarousel');
                    var itemsDiv = ('.MultiCarousel-inner');
                    var itemWidth = "";

                    $('.leftLst, .rightLst').click(function () {
                        var condition = $(this).hasClass("leftLst");
                        if (condition)
                            click(0, this);
                        else
                            click(1, this)
                    });

                    ResCarouselSize();




                    $(window).resize(function () {
                        ResCarouselSize();
                    });

                    //this function define the size of the items
                    function ResCarouselSize() {
                        var incno = 0;
                        var dataItems = ("data-items");
                        var itemClass = ('.item');
                        var id = 0;
                        var btnParentSb = '';
                        var itemsSplit = '';
                        var sampwidth = $(itemsMainDiv).width();
                        var bodyWidth = $('body').width();
                        $(itemsDiv).each(function () {
                            id = id + 1;
                            var itemNumbers = $(this).find(itemClass).length;
                            btnParentSb = $(this).parent().attr(dataItems);
                            itemsSplit = btnParentSb.split(',');
                            $(this).parent().attr("id", "MultiCarousel" + id);


                            if (bodyWidth >= 1200) {
                                incno = itemsSplit[3];
                                itemWidth = sampwidth / incno;
                            }
                            else if (bodyWidth >= 992) {
                                incno = itemsSplit[2];
                                itemWidth = sampwidth / incno;
                            }
                            else if (bodyWidth >= 768) {
                                incno = itemsSplit[1];
                                itemWidth = sampwidth / incno;
                            }
                            else {
                                incno = itemsSplit[0];
                                itemWidth = sampwidth / incno;
                            }
                            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                            $(this).find(itemClass).each(function () {
                                $(this).outerWidth(itemWidth);
                            });

                            $(".leftLst").addClass("over");
                            $(".rightLst").removeClass("over");

                        });
                    }


                    //this function used to move the items
                    function ResCarousel(e, el, s) {
                        var leftBtn = ('.leftLst');
                        var rightBtn = ('.rightLst');
                        var translateXval = '';
                        var divStyle = $(el + ' ' + itemsDiv).css('transform');
                        var values = divStyle.match(/-?[\d\.]+/g);
                        var xds = Math.abs(values[4]);
                        if (e == 0) {
                            translateXval = parseInt(xds) - parseInt(itemWidth * s);
                            $(el + ' ' + rightBtn).removeClass("over");

                            if (translateXval <= itemWidth / 2) {
                                translateXval = 0;
                                $(el + ' ' + leftBtn).addClass("over");
                            }
                        }
                        else if (e == 1) {
                            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                            translateXval = parseInt(xds) + parseInt(itemWidth * s);
                            $(el + ' ' + leftBtn).removeClass("over");

                            if (translateXval >= itemsCondition - itemWidth / 2) {
                                translateXval = itemsCondition;
                                $(el + ' ' + rightBtn).addClass("over");
                            }
                        }
                        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
                    }

                    //It is used to get some elements from btn
                    function click(ell, ee) {
                        var Parent = "#" + $(ee).parent().attr("id");
                        var slide = $(Parent).attr("data-slide");
                        ResCarousel(ell, Parent, slide);
                    }

                });
            </script>
        </body>
    </html>
