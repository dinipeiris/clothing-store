<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Bloom &amp; Blossom</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="Resources\logo.jpg" />

</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <?php include "header.php"?>

            <div class="col-12 justify-content-center">

                <div class="row my-3">
                    <div class="col-10 d-none d-md-block mx-auto">
                
                    <!-- carousel -->

                        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Resources\Slider\pexels-ksenia-chernaya-3965545.jpg" class="d-block w-75 mx-auto" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="poster-title ptitle my-4 text-white">Bloom &amp; Blossom</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="Resources\Slider\minimalist-retail-clothing-display.jpg" class="d-block w-75 mx-auto" alt="...">
                                </div>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    <!-- carousel -->

                    </div>    
                </div>

                <!-- products -->

                <div class="row mt-5 mx-1">
                    <div class="col-12">

                        <!-- category1 -->

                        <div class="col-12">
                            <h3 class="text-secondary">Hot Picks of the Week <i class="bi bi-fire"></i></h3>
                        </div> <hr>
                        <div class="col-12 mb-5">
                            <div class="col-2 card">
                                <div class="card">
                                    <img class="card-img-top" src="Resources/Clothes/Dresses/Black Party Dress.jpg" alt="Card image cap">
                                    <div class="card-body">
                                    <h6 class="card-title categoryName"><a>Black Party Dress</a></h6>
                                    <h5 class="card-text">5450.00 LKR</h5>
                                    <button class="btn btn-light">Button</button>

                                </div>

                                </div>
                            </div>
                        </div>
                    
                        <!-- category1 -->

                        <!-- category2 -->

                        <div class="col-12">
                            <h3 class="text-secondary">New In <i class="bi bi-plus"></i></h3>
                        </div> <hr>
                    
                        <!-- category2 -->

                    </div>
                </div>

                <!-- products -->

            </div>

        </div>

    </div>
    






    <script src="script.js"></script>
    <script src="bootstrap.js"></script>

</body>