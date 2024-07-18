<?php
require "./db_config/config.php"
?>

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