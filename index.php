<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "./body/before_page.php";
    ?>
    <style>
        .red-hr {
            border: none;
            border-top: 3px solid red;
            /* Adjust the thickness by changing the '4px' value */
        }

        .vertical-line {
            border-left: 1px solid #ccc;
            /* Vertical line style */
            height: 100%;
            margin: 0 15px;
            /* Adjust spacing as needed */
        }

        .text-red {
            color: red;
            /* Red text color */
        }

        .image-container {
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 0, 0, 0.5);
            /* Red color with 50% opacity */
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .video-cover {
            position: relative;
            width: 100%;
            height: 80vh;
            /* Set height as a percentage of the viewport height */
            overflow: hidden;
        }

        .video-cover video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
            /* Ensures the video covers the container */
        }

        .header-container {
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            position: relative;
        }

        .header-container h3 {
            margin-top: 0;
        }

        .content-white {
            width: 500px;
        }

        .contain {
            position: relative;
        }

        .header-container.content-white {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 10;
            background-color: white;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <style>
        .navbar-nav .nav-item:hover>.nav-link {
            background-color: red !important;
            /* Red background */
            color: white !important;
            /* White text color */
            padding: 8px 15px;
            /* Padding for the box effect */
            border-radius: 0.5px;
            /* Rounded corners */
            margin-top: 0;
            /* Remove top margin */
        }

        /* Apply active-link styles on hover for dropdown items */
        .navbar-nav .nav-item:hover .dropdown-item:hover {
            background-color: red !important;
            /* Red background */
            color: white !important;
            /* White text color */
            padding: 8px 15px;
            /* Padding for the box effect */
            border-radius: 0.5px;
            /* Rounded corners */
            margin-top: 0;
            /* Remove top margin */
        }

        /* Custom styles to show dropdown on hover */
        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            /* Ensure proper alignment */
        }

        /* Prevent dropdown menu from closing when hovering over dropdown items */
        .dropdown-menu:hover {
            display: block;
        }

        .active-brand {
            background-color: red !important;
            /* Red background */
            color: white !important;
            /* White text color */
            padding: 8px 15px;
            /*Padding for the box effect */
            border-radius: 0.5px;
            margin-top: 0;
            /* Optional: Rounded corners */
        }
    </style>
</head>

<body>
    <?php
    require "./component/header.php";
    // require "./component/navbar.php"
    ?>

    <div class="container-fluid bg-white border border-muted fixed" style="margin: 0;">
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand active-brand" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            About Us
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./about_us/profile.php">Company Profile</a>
                            <a class="dropdown-item" href="">Our Services</a>
                            <a class="dropdown-item" href="">Our Clients</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Products
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./products/Nms.php">Network Management System-(NMS)</a>
                            <a class="dropdown-item" href="./products/Pms.php">Project Management System-(PMS)</a>
                            <a class="dropdown-item" href="./products/Vmd.php">Video Merchandising Display-(VMD)</a>
                            <a class="dropdown-item" href="./products/Vms.php">Video Management Systems-(VMS)</a>
                            <a class="dropdown-item" href="./products/Atcs.php">Advance Traffic Control System-(ATCS)</a>
                            <a class="dropdown-item" href="./products/Iot.php"> Internet of Things (IoT) Solutions</a>
                            <a class="dropdown-item" href="./products/Other_products.php">Other Products</a>
                            <a class="dropdown-item" href="./products/Exam.php">Assessment</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Business
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./business/e_commerce.php">E-Commerce</a>
                            <a class="dropdown-item" href="./business/advertisement.php">Advertisement</a>
                            <!-- <a class="dropdown-item" href="#">Hydrogen Power Source</a>
                            <a class="dropdown-item" href="#">Power &amp; Surveillance</a>
                            <a class="dropdown-item" href="#">Ador Defence</a>
                            <a class="dropdown-item" href="#">Software Innovation</a> -->
                        </div>
                    </li>

                    <!-- <li class="nav-item mx-2">
                        <a class="nav-link" href="#">E-Commerce</a>
                    </li> -->

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">News &#038; Updates</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <li class="nav-item mt-2 mx-1">
                        <a href="">
                            <i aria-hidden="true" class="fa fa-youtube-play text-danger mx-2"></i>
                        </a>
                    </li>
                    <li class="nav-item mt-2 mx-1">
                        <a href="">
                            <i aria-hidden="true" class="fa fa-linkedin-square text-danger mx-2"></i>
                        </a>
                    </li>

                    <li class="nav-item mt-2 mx-1">
                        <a href="">
                            <i aria-hidden="true" class="fa fa-th text-danger mx-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.navbar-nav .nav-link').click(function() {
                $('.navbar-nav .nav-link').removeClass('active-link'); // Remove class from all links
                $(this).addClass('active-link'); // Add class to the clicked link
            });
        });
    </script>
    <!-- <div class="container-fluid"> -->
    <div class="container-fluid">
        <div class="video-cover">
            <video autoplay muted loop height="600px">
                <source src="img/ador.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="container-fluid bg-light py-4 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-muted mt-3">KEEPING OUR SKIES CLEAN</h2>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="vertical-line"></div>
                    <p class="text-red">Innobimb Infotech Pvt Ltd., an ISO 9001 certified company, is one of the largest manufacturers and suppliers of Transformer-Rectifier (T/R) sets and controls in the world.</p>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4 m-0">
                        <div class="image-container">
                            <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                            <div class="overlay">
                                <h3 class="m-0">Image 1 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-0 ">
                        <div class="image-container">
                            <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                            <div class="overlay">
                                <h3 class="m-0">Image 2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-0">
                        <div class="image-container">
                            <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                            <div class="overlay">
                                <h3 class="m-0">Image 3</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 py-2 px-2 image-container">
                    <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" width="95%" alt="">
                    <div class="overlay">
                        <h3 class="m-0">Image 1</h3>
                    </div>
                </div>
                <div class="col-md-6 py-2 px-2 image-container">
                    <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" width="95%" alt="">
                    <div class="overlay">
                        <h3 class="m-0">Image 2</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row mt-2">
            <div class="col-md-6 py-2 px-2 ">
                <img src="https://adorpowertron.com/wp-content/uploads/2021/05/232-1024x528.jpg" width="95%" alt="">
                <div class="overlay">
                    <h3 class="m-0">Image 1</h3>
                </div>
            </div>
            <div class="col-md-6 py-2 px-2">
                <h3>Innobimb is Committed for Better Air</h3>
                <p class="text-muted text-justified">The function of Electrostatic Precipitator (ESP) is to capture suspended particulate matter like dust, fly-ash, aerosols etc. from exhaust gases, typically from that of an industrial Boiler.</p>
                <button class="btn btn-danger p-2"> Know More</button>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="container contain p-4">
            <div class="row position-relative">
                <div class="col-md-4">
                    <div class="header-container content-white">
                        <h3>Innobimb Powertron: Helping Make India Smarter, Cleaner and More Secure</h3>
                    </div>
                    <div class="para border-left text-justified">
                        <p class="mx-4" style="margin-top: 150px;">At Innobimb Powertron, we are driven by a commitment to help make the world a better place. Our focus on innovation and continuous improvement has helped place us at the forefront of some of the industry sectors which we serve. We have successfully created products that have fostered a technological change in the operations of pollution control and road safety management. Our mission is to transform industry challenges into opportunities, whilst helping facilities a sustainable future.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://adorpowertron.com/wp-content/uploads/2024/03/New-Project-11-768x1182.jpg" height="100%" width="100%" alt="">
                </div>
                <div class="col-md-4 mt-5">
                    <h1 class="text-danger mt-5"> 6</h1>
                    <h4 class="mt-1 fw-bold">BUSINESS VERTICALS</h4>
                    <h1 class="text-danger mt-1">250 +</h1>
                    <h4 class="mt-1 fw-bold">HIGHLY SKILLED EMPLOYEES</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h3>Our Businesses</h3>
        <hr width="70%" style="border: 1px solid #120e0e;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 m-0">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 1 </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-0 ">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 2</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-0">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 3</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-4 m-0">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 1 </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-0 ">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 2</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-0">
                    <div class="image-container">
                        <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
                        <div class="overlay">
                            <h3 class="m-0">Image 3</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3>OUR EXPORT</h3>
        <hr width="70%" style="border: 1px solid #120e0e;">
        <img src="https://adorpowertron.com/wp-content/uploads/2024/03/corp.png" width="90%" alt="">
    </div>

    <div class="container mt-3 p-3">
        <h3>News & Update</h3>
        <hr width="70%" style="border: 1px solid #120e0e;">
        <div class="row">
            <div class="col-md-4">
                <img src="https://adorpowertron.com/wp-content/uploads/2024/03/New-Project-12-1024x472.jpg" width="100%" height="auto" alt="news1">
                <p class="fs-5 mt-2">Innobimb makes a 51% equity investment in pioneering Australian Traffic Safety company</p>
                <p class="mt-0" style="color:#bababa;">March 26, 2024///No Comments</p>
                <a href="" class="text-danger text-decoration-none" style="font-size: 15px;">Read More&nbsp;<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            <div class="col-md-4">
                <img src="https://adorpowertron.com/wp-content/uploads/2024/03/pexels-tim-samuel-5835017-1024x512.jpg" width="90%" height="auto" alt="news2">
                <p class="fs-5 mt-2">Motorists’ mobile phone use is today’s ‘drink-driving’, authorities say</p>
                <p class="mt-0" style="color:#bababa;">March 26, 2024///No Comments</p>
                <a href="" class="text-danger text-decoration-none" style="font-size: 15px;">Read More&nbsp;<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            <div class="col-md-4">
                <img src="https://adorpowertron.com/wp-content/uploads/2024/03/pexels-pixabay-210182-1024x512.jpg" width="90%" height="auto" alt="news3">
                <p class="fs-5 mt-2">Acusensus featured in cover story of the latest issue of Traffic Technology International</p>
                <p class="mt-0" style="color:#bababa;">March 26, 2024///No Comments</p>
                <a href="" class="text-danger text-decoration-none" style="font-size: 15px;">Read More&nbsp;<i class="fa fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <i class="fa fa-question text-danger" style="font-size:50px;"></i>
                        <h5>HAVE A QUESTION?</h5>
                        <a class="text-dark text-decoration-none" href="tel:+9107942683672">
                          <p>+91 7942683672</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body ">
                        <i class="fa fa-user text-danger" style="font-size:50px;"></i>
                        <h5>SUPPORT NEEDED?</h5>
                        <p>
                        <span class="mx-1"><a class="text-dark text-decoration-none" href="https://mail.google.com/mail/?view=cm&fs=1&to=innobimbinfotech@gmail.com" target="_blank"> innobimbinfotech@gmail.com</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <i class="fa fa-clock-o text-danger" style="font-size:50px;"></i>
                        <h5>WE ARE ALWAYS OPEN</h5>
                        <p>From Mon to Sun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    require "./component/footer.php";
    ?>
</body>

</html>