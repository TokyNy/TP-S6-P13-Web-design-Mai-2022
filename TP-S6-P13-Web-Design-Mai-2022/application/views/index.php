<?php
  /* echo var_dump($actus);*/
    include("Slug.php");
   /* echo var_dump($titre);*/
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $titre ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo css_url("style.css"); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img width="500" height="500" class="mx-auto d-block w-80 bg-primary img-fluid rounded-circle mb-4 p-3" src="<?php echo images_url("t.jpg "); ?>" alt="Image">
                    <h1 class="font-weight-bold">Environnement</h1>
                    <p class="mb-4">
                        Site d'information sur les dernières actualités environnementales universelles.
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
            <div class="content">
                <!-- Navbar Start -->
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav m-auto">
                                <a href="" class="nav-item nav-link active">Accueil</a>
                               
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Navbar End -->
                
                <!-- Carousel Start -->
                <!-- Mila manao code mi générer carousel : https://forum.phpfrance.com/php-debutant/topic281819.html -->
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php for($i=7;$i<=7;$i++) { ?>
                            <div class="carousel-item active">
                                <img class="w-100" src="<?php echo images_url($actus[$i]['nom_photo']);?>" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-3 text-white font-weight-bold"><?php echo $actus[$i]['titre']?></h2>
                                    <div class="d-flex text-white">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> <?php echo $actus[$i]['daty']?></small>
                                        <small class="mr-2"><i class="fa fa-folder"></i><?php echo $actus[$i]['nom_theme']?></small>
                                       
                                    </div>
                                    <a href="<?php echo site_url("Controller/".($i+1)); ?>" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                            
                        <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- Carousel End -->
                
                
                <!-- Blog List Start -->
                <?php for($i=0;$i<5;$i++) { ?>
                <div class="container bg-white pt-5">
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="<?php echo images_url($actus[$i]['nom_photo']);?>" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h4 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"><?php echo $actus[$i]['titre']?></h4>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i><?php echo $actus[$i]['daty']?></small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i><?php echo $actus[$i]['nom_theme']?></small>
                                
                            </div>
                            <p>
                                <?php echo $actus[$i]['descript']?>
                            </p>
                            <a class="btn btn-link p-0" href="<?php echo site_url("Controller/".($i+1)); ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
            
                <!-- Blog List End -->
                
                
                <!-- Subscribe Start -->
                <div class="container py-5 px-4 bg-secondary text-center">
                    <h3 class="text-white font-weight-bold">Sauvons la PLanète</h3>
                    <p class="text-white">Venez vous aussi participer à notre mouvement</p>
                    <form class="form-inline justify-content-center">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Votre Email">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">S'inscrire</button>
                            </div>
                          </div>
                    </form>
                </div>
                <!-- Subscribe End -->
                
                
                
                
                <!-- Footer Start -->
                <div class="container py-4 bg-secondary text-center">
                    <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">P13-A 1188 . S6 Web Design Mai 2022</a>                    </p>
                </div>
                <!-- Footer End -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo js_url("main.js"); ?>"></script>
    </body>
</html>
