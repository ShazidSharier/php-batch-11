<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light navbar-light shadow">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="assets/image/logo.png" alt="" height="50"/>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mx-auto">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">About</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Service One</a></li>
                            <li><a href="" class="dropdown-item">Service Two</a></li>
                            <li><a href="" class="dropdown-item">Service Three</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="nav-link">Gallery</a></li>
                    <li><a href="" class="nav-link">Contact</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">Login</a></li>
                    <li><a href="" class="nav-link">Sing Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/image/s1.jpg" alt="" height="500" class="w-100"/>
                <div class="carousel-caption my-caption">
                    <h1> This is caption One </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur deleniti esse, illo ipsa ipsam, laudantium, maiores maxime molestiae mollitia nihil officiis perferendis quasi sapiente sed sint veniam vitae voluptates.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/s2.jpg" alt="" height="500" class="w-100"/>
                <div class="carousel-caption my-caption">
                    <h1> This is caption Two </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur deleniti esse, illo ipsa ipsam, laudantium, maiores maxime molestiae mollitia nihil officiis perferendis quasi sapiente sed sint veniam vitae voluptates.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/s3.jpg" alt="" height="500" class="w-100"/>
                <div class="carousel-caption my-caption">
                    <h1> This is caption Three </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur deleniti esse, illo ipsa ipsam, laudantium, maiores maxime molestiae mollitia nihil officiis perferendis quasi sapiente sed sint veniam vitae voluptates.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image/s4.jpg" alt="" height="500" class="w-100"/>
                <div class="carousel-caption my-caption">
                    <h1> This is caption Four </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur deleniti esse, illo ipsa ipsam, laudantium, maiores maxime molestiae mollitia nihil officiis perferendis quasi sapiente sed sint veniam vitae voluptates.</p>
                    <a href="" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($trainnigs as $trainnig) { ?>
                <div class="col-md-3 col-sm-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $trainnig['image']; ?>" height="250" alt=""/>
                        <div class="card-body">
                            <h4><?php echo $trainnig['name']; ?></h4>
                            <p><?php echo $trainnig['schedule']; ?></p>
                            <p>Total Hours: <?php echo $trainnig['time']; ?></p>
                            <p>Tk. <?php echo $trainnig['price']; ?></p>
                            <hr/>
                            <a href="" class="btn btn-success">Apply Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
