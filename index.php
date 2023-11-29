<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!-- font start -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap" rel="stylesheet">
        <!-- font end -->
        <title>Campus Links | Home</title>
    </head>
    <body>
        <div class="loader" id="loader">
            Campus Link...
        </div>

        <div class="content" id="content">
            <?php include 'includes/Navbar.php'; ?>
            <div class="container-fluid">                   
                <div class="carousel">
                    <?php include 'includes/Caroucel.php' ?>
                </div>               
            </div>
            <div class="container-fluid">
                <div id="pro">
                    <p>
                        Campus Links is a Consulting African firm that 
                        helps researchers and research groups to access information, get sample 
                        data through research questions across Nigerian Universities from one spot.
                    </p>
                    <div class="btn btn-outline-light">Read More...</div>
                </div>
            </div>   
            <div class="services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-card">
                            <i class="bi bi-boxes"></i>
                            <h2>Data Mining</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, accusantium? Quae, explicabo exercitationem. Ducimus fugit provident nesciunt qui, eum porro.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <i class="bi bi-card-checklist"></i>
                            <h2>Data Analysis</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, accusantium? Quae, explicabo exercitationem. Ducimus fugit provident nesciunt qui, eum porro.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <i class="bi bi-yelp"></i>
                            <h2>Info Tech</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, accusantium? Quae, explicabo exercitationem. Ducimus fugit provident nesciunt qui, eum porro.</p>
                        </div>
                    </div>
                    <div class="service-btn">
                        <div class="index-service-btn">Read More...</div>
                    </div>
                </div>
            </div> 
            <?php include "includes/Footer.php" ?>       
        </div>

        
        
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <script>
            // Simulate content loading (you can replace this with actual loading code)
            setTimeout(function () {
                document.getElementById("loader").style.display = "none"; // Hide the loader
                document.getElementById("content","content1").style.display = "block"; // Display the content
            }, 1000); // Replace 2000 with the actual loading time in milliseconds
        </script>
    </body>
</html>