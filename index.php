<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nature Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googlepis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Wild Nature</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

<div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Maldives</h3>
                    <p>Maldives, where the ocean's embrace whispers tales of serenity.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img9.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Hawaii</h3>
                    <p >Hawaii, where nature's grandeur dances to the rhythm of aloha.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img8.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Bali</h3>
                    <p>Bali, where paradise meets culture, and every sunset is a masterpiece.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
</div>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/img4.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Nature Lover</h2>
                    <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Eveniet numquam, nam voluptatem quis at inventore unde.
                        Repellat accusantium, cumque, saepe officia voluptates omnis,
                        facere vitae cum suscipit a aliquid doloremque?
                    </p>
                    <a href="about.php" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>
</section>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/img5.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/img5.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/img5.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/img6.jpg" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
</section>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        </div>
            <div class="w-50 m-auto"> 
                <form action="user_info.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comments"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <a href="contact.php"></a>
            </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">Copyright &copy; <? ?> Wild Nature | All Rights Reserved</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>