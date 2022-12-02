<?php

require $_SERVER['DOCUMENT_ROOT'] . "./src/lib/database.php";
$res = "";
if (isset($_POST['submit'])) {
  $res = (new database)->buyticket($_POST['show_id'], $_POST['show_name'], $_POST['num_tickets']);
  // echo $res;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Artisan</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/external.css">    
    <link rel="stylesheet" type="text/css" href="./css/form.css">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="main bg-p-1 position-relative">

        <!-- Navbar Starts Here -->
        <nav class="custom-nav navbar navbar-dark navbar-expand-lg bgnav-p">
            <div class="container-fluid">
                <a class="navbar-brand nav-effect nav-p-link-color" href="./index.html">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="./image/theatreLogo.png" alt="Theatre_Logo" style="height: 3rem; width:auto;">
                        <p class="m-0 p-0">Studio <span class="logo-span">Artisan</span></p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" aria-current="page" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-effect nav-p-link-color nav-link" href="./aboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-effect nav-p-link-color nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./login.html">Login</a></li>
                                <li><a class="dropdown-item" href="./signup.html">Sign Up</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Setting</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="profile-nav d-flex">
                        <a class="nav-effect nav-p-link-color nav-link" href="./login.html">Profile / Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar Ends -->

        <div class="bg-p-5 min-vh-100">
            <div class="section">
                <div class="small-section">
                    <div class="row text-white">                       
                        <div class="col-md-6 p-0">
                            <div class="d-flex flex-column align-items-center justify-content-center bg-p-2 p-3 h-100">
                                <h1 class="">Get Tickets</h1>
                                <div class="w-50 d-flex flex-column gap-3">
                                    <div class="same text-center">
                                        <p>Show Name: <span name="show_name" style="color: goldenrod;" id="ticketShowname"></span></p>
                                        <p>Show Time: </p>
                                    </div>
                                    <form action="ticket.php" method="post">
                                        <div class="same">
                                            <p>Select No. of Tickets</p>
                                            <div class="d-flex w-100 bg-dark">
                                                <button id="minus-button" class="mybutton w-100 button-p-sidebar-bg py-2">-</button>
                                                <div class="w-100 d-flex align-items-center justify-content-center">
                                                    <p id="mid-value" name="num_tickets" class="m-0">1</p>
                                                </div>
                                                <button id="plus-button" class="mybutton w-100 button-p-sidebar-bg">+</button>
                                            </div>
                                        </div>
                                        <div class="same">
                                            <p>Select Payment Option</p>
                                            <select class="w-100 p-2 bg-p-1 text-white" style="cursor: pointer;">
                                                <option>Bank</option>
                                                <option>Bkash</option>
                                                <option>Nagad</option>
                                            </select>
                                        </div>
                                        <div class="same mt-3">
                                            <!-- <button id="confirm-tickets" class="mybutton w-100 button-p-sidebar-bg p-2">Confirm Tickets</button> -->
                                            <p name="show_id">68445</p>
                                            <button id="confirm-tickets" class="mybutton w-100 button-p-sidebar-bg p-2" name="submit"
                                                value="true">Confirm Tickets</button>
                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1 image-hover position-relative">
                                <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(255, 255, 255, 0.1); z-index: 1;"></div>
                                <img class="small-image grid-image" src="https://c8.alamy.com/comp/2BG784X/retro-party-cinema-invitation-vector-tickets-set-vector-golden-tickets-isolated-on-black-background-illustration-2BG784X.jpg"  style="height: 60vh;">
                            </div>
                        </div>                                                                     
                    </div>
                </div>
    
            </div>
        </div>





        <!-- FOOTER Starts Here -->
        <footer class="bg-footer text-center text-white">
            <div class="w-100 p-0 m-0">            
                <div class="row m-0 p-0 py-2">
                    <div class="col-md-4">
                        <div class="footer-width-link mx-auto d-flex flex-column py-4">
                            <ul class="d-flex flex-column p-0">
                                <li><a class="myfooter-links" href="./index.html">Home</a></li>
                                <li> <a class="myfooter-links" href="./aboutUs.html">About Us</a></li>   
                                <li><a class="myfooter-links" href="./signup.html">Sign Up</a></li>    
                                <li> <a class="myfooter-links" href="./login.html">Login</a></li>   
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column py-4" style="color: rgb(216, 216, 216)">
                            <p>Studio Artisan. Central Group Theatre</p>
                            <p>Shows - Live Performance - Amusement Blend - Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quisquam vitae fugit cumque, a odit.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center h-100 py-4">
                            <div class="links-here">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                ><i class="fab fa-facebook-f"></i
                                ></a>
                            
                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                    ><i class="fab fa-twitter"></i
                                ></a>
                            
                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                    ><i class="fab fa-google"></i
                                ></a>
                            
                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                    ><i class="fab fa-instagram"></i
                                ></a>
                            
                                <!-- Linkedin -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                    ><i class="fab fa-linkedin-in"></i
                                ></a>
                            
                                <!-- Github -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                                    ><i class="fab fa-github"></i
                                ></a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Section: Social media -->
                </div>
                <div class="bg-footer-bottom text-center p-3">
                    © 2022 Copyright:
                    <a class="myfooter-links" href="./index.html">Studio Artisan</a>
                </div>
            </div>
        </footer> 
        <!-- FOOTER Ends -->






    </div>
</body>

<script src="./js/main.js" type="text/javascript"></script>
<script src="./js/ticket.js" type="text/javascript"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</html>