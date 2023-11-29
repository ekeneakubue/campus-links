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
            <div class="container-fluid"><br>
                <div id="pro">
                    <p>
                       Contact Us
                    </p>
                </div>
            </div>   
            <div class="container">
                <div class="row">
                    <div class="col-md-9"><br><br>
                        <div class="contact-card">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputname">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Write Your Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Send</button>
                            </form>
                        </div><br><br>
                    </div>
                    <div class="col-md-3"><br><br>
                        <div class="cont-right text-left">
                            <div class="title">Our Contacts</div><br>
                            <div><i class="bi bi-geo-alt text-success"></i> University Of Nigeria, Nsukka</div><hr>
                            <div><i class="bi bi-telephone text-success"></i> 08000000000</div><hr>
                            <div><i class="bi bi-envelope text-success"></i> info@campuslinks.com</div><br><br>

                            <div class="title">Follow Us</div><br>
                            <div><i class="bi bi-linkedin text-dark"></i> Linked In</div><hr>
                            <div><i class="bi bi-facebook text-primary"></i> Facebook</div><hr>
                            <div><i class="bi bi-twitter-x text-dark"></i> Twitter</div><br>
                        </div>
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