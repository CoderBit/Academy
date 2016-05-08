<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('head.php'); ?>

</head>

<body>

    <!-- Navigation -->
    <?php include('nav.php'); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/3.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container top-space">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Academy Maris
                </h1>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="thumbnail radius-3cent">
                      <!-- font-size: 2em;
                        color: #fff;
                        background: #2f9812;
                        border-radius: 50%;
                        padding: 15px 11px; -->
                    <h4><i class="fa fa-fw fa-graduation-cap action-call1"></i></h4>
                    <div class="caption">
                        <h1>Language Courses</h1>
                        <p>- German - A1, A2, B1, B2, C1<br/>
                          - English - Conversation<br/>
                          - Intensive courses, regular courses,
                            Weekend &nbsp;&nbsp;courses<br/>
                          - Individual lessons, lessons
                            small group</p>
                        <a href="courses.html" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail radius-3cent">
                    <h4><i class="fa fa-fw fa-book action-call2"></i></h4>
                    <div class="caption">
                        <h1>Tution</h1>
                        <p>- Mathematics<br/>
                          - Physics<br/>
                          - Chemistry<br/>
                          - German<br/>
                          - Individual lessons, small group</p>
                        <a href="tution.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail radius-3cent">
                    <h4><i class="fa fa-fw fa-gear action-call3"></i></h4>
                    <div class="caption">
                        <h1>Easy to Use</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-info">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">About Academy Maris</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/academy marie.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
    </div>
    <hr class="top-space">

    <script src="js/jquery.js"></script>

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- /.container -->

    <!-- jQuery -->
    <?php include('footnotes.php'); ?>
</body>

</html>
