<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php";
    ?>
    <style>
        .red-hr {
            border: none;
            border-top: 3px solid red;
        }

        .vertical-line {
            border-left: 1px solid #ccc;
            height: 100%;
            margin: 0 15px;
        }

        .text-red {
            color: red;
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

        .navbar-nav .nav-item:hover>.nav-link {
            background-color: red !important;
            color: white !important;
            padding: 8px 15px;
            border-radius: 0.5px;
            margin-top: 0;
        }

        .navbar-nav .nav-item:hover .dropdown-item:hover {
            background-color: red !important;
            color: white !important;
            padding: 8px 15px;
            border-radius: 0.5px;
            margin-top: 0;
        }

        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .dropdown-menu:hover {
            display: block;
        }

        .active-brand {
            background-color: red !important;
            color: white !important;
            padding: 8px 15px;
            border-radius: 0.5px;
            margin-top: 0;
        }
    </style>
</head>

<body>
<?php
    require "../component/header.php";
    require "../component/navbar.php";
    ?>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container-fluid bg-light py-4 pt-5">
        <div class="container mt-5 p-4">
            <div class="row">
                <div class="col-md-6">
                    <h3>Welcome Back!</h3>
                    <form action="../php/login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <img class="rounded" height="auto" width="100%" src="https://images.pexels.com/photos/9211396/pexels-photo-9211396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->

    <div class="container-fluid" style="background-color: #d9d9d9;">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4  mt-5">
                    <img src="https://innobimbinfotech.com/images/logo-2.png" alt="ador_png">
                    <hr width="80%" style="border: 1px solid #080808;">
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item mt-2 mx-2">
                            <a href="">
                                <i aria-hidden="true" class="fa fa-youtube-play text-primary"></i>
                            </a>
                        </li>
                        <li class="nav-item mt-2 mx-2">
                            <a href="">
                                <i aria-hidden="true" class="fa fa-linkedin-square text-danger"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-unstyled mt-2">

                        <li class="elementor-icon-list-item mb-2">
                            <i class="fa fa-map-marker text-danger"></i>
                            <span class="">Saraswati nagar, HIG-8, Jawahar Chowk, Shastri Nagar, Bhopal, Madhya Pradesh 462003</span>
                        </li>
                        <li class="elementor-icon-list-item mb-2">
                            <i class="fa fa-envelope-o text-danger"></i>
                            <span class="mx-1"><a class="text-dark text-decoration-none" href="https://mail.google.com/mail/?view=cm&fs=1&to=innobimbinfotech@gmail.com" target="_blank"> innobimbinfotech@gmail.com</a></span>
                        </li>
                        <li class="elementor-icon-list-item mb-2">
                            <i class="fa fa-volume-control-phone text-danger"></i>
                            <a class="text-dark text-decoration-none" href="tel:+9107942683672"><span class="">+91 7942683672</span></a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4">
                    <ul class="list-unstyled mt-5 fs-5">
                        <li class="elementor-icon-list-item mb-2 text-danger">Businesses</li>
                        <li class="elementor-icon-list-item mb-2">Clean Air</li>
                        <li class="elementor-icon-list-item mb-2">Traffic & Enforcement</li>
                        <li class="elementor-icon-list-item mb-2">Hydrogen Power Source</li>
                        <li class="elementor-icon-list-item mb-2">Power & Surveillance Solutions</li>
                        <li class="elementor-icon-list-item mb-2">Defence</li>
                        <li class="elementor-icon-list-item mb-2">Software Innovation</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="container mt-5 fs-5">
                        <h6 class="text-danger mb-3">ENQUIRY FORM</h6>
                        <!-- <p>Get the latest news and updates</p> -->
                        <form action="./php/enquiry.php" method="post">
                            <ul class="list-unstyled">
                                <li class="form-group">
                                    <input type="text" class="form-control border border-dark" id="name" name="name" placeholder="Enter your name">
                                </li>
                                <li class="form-group">
                                    <input type="email" class="form-control border border-dark" id="email" name="email" placeholder="Enter your email">
                                </li>
                                <li class="form-group">
                                    <input type="number" class="form-control border border-dark" id="mobile" name="mobile" placeholder="Enter your mobile">
                                </li>
                                <li class="form-group">
                                    <textarea rows="1" name="address" placeholder="Enter Your address" class="form-control input-sm border-dark"></textarea>
                                </li>
                                <li class="form-group">
                                    <textarea rows="2" name="message" placeholder="Enter Your Message" class="form-control input-sm border-dark"></textarea>
                                </li>
                                <li>
                                    <button type="submit" name="submit" class="btn btn-danger btn-block">Send Message</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid text-center mt-3">
        <p>© COPYRIGHT 2024 BY INNOBIMB INFOTECH</p>
    </div>
</body>

</html>