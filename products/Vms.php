<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php";
    ?>
    <link href="./css/style.css" rel="stylesheet">
    <style>
        .banner-container {
            position: relative;
            /* text-align: center; */
            color: white;
            height: 300px;
            border-radius: 20px;

        }

        .banner-image {
            width: 100%;
            /* height: 20%; */
            display: block;
            border-radius: 20px;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            /* Adjust opacity (0.5 for 50% opacity) */
            display: flex;
            justify-content: center;
            align-items: left;
            flex-direction: column;
            border-radius: 20px;

        }

        .banner-overlay h1 {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .banner-overlay p {
            font-size: 1.5em;
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php"
    ?>

    <div class="container-fluid">
        <div class="container banner-container">
            <img src="https://adortraffic.com/wp-content/uploads/2023/10/2222.jpg" height="300px" alt="Banner Image" class="banner-image">
            <div class="banner-overlay">
                <h1 class="mx-5">Variable Message Signs</h1>
                <!-- <p>Additional text or description</p> -->
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <img src="https://adortraffic.com/wp-content/uploads/2023/10/2222.jpg" height="500px" width="350px" alt="Banner Image" style=" border-radius: 20px;">
                </div>

                <div class="col-md-8">
                    <img src="https://adortraffic.com/wp-content/uploads/2023/10/2222.jpg" alt="Banner Image" height="250px" class="banner-image">
                    <h1 class="text-dark mt-3">Variable Message Signs</h1>
                    <div class="row">
                        <div class="col-md-6 text-muted">
                            Variable Messaging Signs (VMS) are LED signs strategically placed along roadways, highways, and expressways to relay dynamic information to drivers. These signs play a crucial role in modern traffic management systems, serving as dynamic communication tools between traffic authorities and motorists. VMS are capable of displaying a wide range of messages and symbols, including information about traffic conditions, upcoming lane closures, detours, weather alerts, accidents, roadwork, and other important announcements. The messages displayed on VMS are often updated in real-
                        </div>
                        <div class="col-md-6 text-muted">
                            time, allowing authorities to respond swiftly to changing road situations and communicate vital information to drivers instantly.VMS’s enhance road safety by providing real-time updates to drivers, reducing the risk of accidents. They also ease traffic congestion by informing drivers of lane closures and alternative routes, promoting smoother traffic flow. In emergencies, VMS guide drivers away from hazards, ensuring safety and facilitating emergency responses playing a vital role in modern traffic management, improving road safety and transportation efficiency.Key Features
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <h2 class="text-danger mb-5">Key Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 bg-light" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-3 mt-5 text-center">
                                <i class="fa fa-clock-o mx-4 mt-1" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h6> Available in various pitch configurations P10/ P16/P20 & P25.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  border-0 bg-light p-4" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <i class="fa fa-clock-o mt-4" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <h6>EN 12966 tested and certified</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="card"> -->
                    <div class="card border-0 bg-light" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-2 mt-5 mx-2 text-center">
                                <i class="fa fa-clock-o  mx-4" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h6> Ador proprietary VMS control software and portal</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card border-0 bg-light" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-3 mt-5 text-center">
                                <i class="fa fa-clock-o mx-4 mt-1" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h6> Available in various pitch configurations P10/ P16/P20 & P25.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  border-0 bg-light p-4" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <i class="fa fa-clock-o mt-4" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <h6>EN 12966 tested and certified</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="card"> -->
                    <div class="card border-0 bg-light" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-2 mt-5 mx-2 text-center">
                                <i class="fa fa-clock-o  mx-4" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h6> Ador proprietary VMS control software and portal</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card border-0 bg-light" style="border-radius: 20px;">
                        <div class="row">
                            <div class="col-md-3 mt-5 text-center">
                                <i class="fa fa-clock-o mx-4 mt-1" style="font-size:48px;color:red"></i>
                            </div>
                            <div class="col-md-9 mt-3">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h6> Available in various pitch configurations P10/ P16/P20 & P25.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid bg-light text-dark mt-5">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="pt-5">Frequently Asked Questions (FAQs)</h1>
                    </div>

                    <div class="col-md-7">
                        <div class="card bg-white border-0 p-3 mt-5">
                            <h6>What is the purpose of Variable Message Signs (VMS) & How do VMS contribute to modern traffic management systems?</h6>
                            <i class="fa fa-sort-desc"></i>
                        </div>

                        <div class="card bg-white border-0 p-3 mt-3">
                            <h6>
                                Why are VMS crucial for road safety?</h6>
                            <i class="fa fa-sort-desc"></i>
                        </div>
                        
                        <div class="card bg-white border-0 p-3 mt-3">
                            <h6>
                            How quickly can VMS relay information to drivers in real-time?
                            </h6>
                            <i class="fa fa-sort-desc"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>
