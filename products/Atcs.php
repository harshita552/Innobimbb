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

        .answer {
            display: none;
        }

        .red-text {
            color: red;
        }

        .row-cards {
            height: 450px;
        }
        .card-rows{
            height: 250px;
        }
    </style>

</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php"
    ?>

    <div class="container-fluid">
        <!-- <div class="container banner-container">
            <img src="https://images.pexels.com/photos/1600757/pexels-photo-1600757.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="300px" alt="Banner Image" class="banner-image">
            <div class="banner-overlay">
                <h1 class="mx-5">Advance Traffic Control System</h1>
            </div>
        </div> -->

        <!-- <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <img src="https://images.pexels.com/photos/20765596/pexels-photo-20765596/free-photo-of-traffic-in-a-city-at-sunset.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="420px" width="350px" alt="Banner Image" style=" border-radius: 20px;">
                </div>

                <div class="col-md-8">
                    <div class="card rounded-3 mt-2 ">
                        <video autoplay muted loop class="rounded-3">
                            <source src="https://videos.pexels.com/video-files/3052884/3052884-uhd_2560_1440_30fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 p-5">
                    <h1 class="fw-bold ">Advance Traffic Control System</h1>

                    <p class="mt-3">Advanced Traffic Management System (ATMS) is a high-tech solution for managing traffic. It combines data from sensors, cameras, and GPS to monitor traffic in real-time, giving a complete picture of the traffic situation. ATMS controls traffic lights and signs to keep traffic moving smoothly and helps manage accidents and other incidents quickly. It analyzes traffic patterns, improves safety, reduces delays, and supports environmental sustainability by adjusting controls and sharing information with the public. This makes ATMS essential for better transportation efficiency and safety.</p>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/1600757/pexels-photo-1600757.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="300px" alt="Banner Image" class="banner-image mt-5">
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid mb-5">
            <h1 class="text-dark mt-3">Advance Traffic Control System</h1>
            <div class="card border-0 bg-light shadow">
                <div class="card-body ">
                    <p class="p-4">Advanced Traffic Management System (ATMS) is a high-tech solution for managing traffic. It combines data from sensors, cameras, and GPS to monitor traffic in real-time, giving a complete picture of the traffic situation. ATMS controls traffic lights and signs to keep traffic moving smoothly and helps manage accidents and other incidents quickly. It analyzes traffic patterns, improves safety, reduces delays, and supports environmental sustainability by adjusting controls and sharing information with the public. This makes ATMS essential for better transportation efficiency and safety.</p>
                </div>
            </div>
        </div> -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="text-dark mb-5">System that helps manage traffic better.</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12 fs-5 mt-1">
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Traffic Monitoring</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Data Collection</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Incident Management</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Integration</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Traffic Analysis</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Communication</span><br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 fs-5 mt-1">
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Safety</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Scalability</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Decision Support</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Environmental Benefits</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Public Information</span><br>
                                <i class="fa fa-check-circle" style="color: red;"></i>&nbsp;&nbsp;<span class="">Adaptive Control</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img height="450px" width="280px" src="https://images.pexels.com/photos/3066867/pexels-photo-3066867.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" style=" border-radius: 20px;" alt="">
                        </div>
                        <div class="col-md-6 px-4">
                            <img src="https://adortraffic.com/wp-content/uploads/2023/10/4acabf3c7230472680d15df1766b07c6.jpg" height="250px" width="250px" style=" border-radius: 20px;" alt="">

                            <img src="https://images.pexels.com/photos/20848551/pexels-photo-20848551/free-photo-of-time-lapse-of-highway-traffic-at-night.jpeg?auto=compress&cs=tinysrgb&w=600" class="mt-3" height="180px" width="250px" style=" border-radius: 20px;" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="container-fluid p-4 mt-5">
            <h1 class="text-center mb-4">Read more about Advance Traffic Control System</h1>

            <div class="container p-4 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <!-- <img src="https://images.ctfassets.net/vztl6s0hp3ro/4G4N2QlFxgJwL0x1GtGWtv/c679106e3f9cbe70968b7d995e4654dd/what-is-skills-based-hiring.webp" alt=""> -->
                                </div>
                                <div class="card card-rows border-0 bg-light p-4">
                                    <h5>Function</h5>
                                    <p>VIDS uses cameras and image processing software to monitor traffic conditions. It captures real-time video footage and processes it to detect vehicles, analyze traffic flow, and identify incidents.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <!-- <img src="https://images.ctfassets.net/vztl6s0hp3ro/4Upg17DJcQgSWTF8ZX1ltH/31c5b92d63af2759c00b7366051a7af9/Skills-based_hiring_is_on_the_rise_-_What_does_this_mean_for_recruitment.webp" alt=""> -->
                                </div>
                                <div class="card card-rows border-0 bg-light p-4">
                                    <h5>Application</h5>
                                    <p>VIDS is used for traffic surveillance, monitoring congestion, incident detection, and traffic data collection.</p>
                                    <a href="#">Read More</a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <!-- <img src="https://images.ctfassets.net/vztl6s0hp3ro/2sYlP3rq5oVF7yUXWoWQp3/2defb937fc1faac78683c3ec9c6c7728/10-inspiring-skills-based-recruitment-stories.webp" alt=""> -->
                                </div>
                                <div class="card card-rows border-0 bg-light p-4">
                                    <h5>Public Transportation Integration</h5>
                                    <p> To support sustainable transportation goals, ATCS can integrate with public transportation systems, providing priority lanes or signal preemption for buses and other transit vehicles.</p>
                                    <a href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="https://images.ctfassets.net/vztl6s0hp3ro/4G4N2QlFxgJwL0x1GtGWtv/c679106e3f9cbe70968b7d995e4654dd/what-is-skills-based-hiring.webp" alt="">
                                </div>
                                <div class="card border-0 bg-light p-4">
                                    <h5>What is skills-based hiring?</h5>
                                    <p>Skills-based hiring is a hiring process where evidence of candidates’ skills, rather than other information such as their prior experience or where they were educated, is used to make hiring decisions.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="https://images.ctfassets.net/vztl6s0hp3ro/4Upg17DJcQgSWTF8ZX1ltH/31c5b92d63af2759c00b7366051a7af9/Skills-based_hiring_is_on_the_rise_-_What_does_this_mean_for_recruitment.webp" alt="">
                                </div>
                                <div class="card border-0 bg-light p-3">
                                    <h5>Skills-based hiring is on the rise. What does this mean for recruitment?</h5>
                                    <p>In case you didn't know yet, skills-based hiring is on the rise. In this article, we’ll use data we collected from 3,000 employers and employees to discuss the rise of skills-based hiring, describe what it means for recruitment,</p>
                                    <a href="#">Read More</a>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="https://images.ctfassets.net/vztl6s0hp3ro/2sYlP3rq5oVF7yUXWoWQp3/2defb937fc1faac78683c3ec9c6c7728/10-inspiring-skills-based-recruitment-stories.webp" alt="">
                                </div>
                                <div class="card border-0 bg-light p-4">
                                    <h5>10 inspiring skills-based recruitment stories</h5>
                                    <p>We’ve been carefully building a team since TestGorilla launched over two years ago, and today we hired our 100th team member.</p>
                                    <a href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>

        <div class="container-fluid p-5 ">
            <div class="container">
                <div class="row p-4 text-center">
                    <div class="col-md-4">
                        <div class="card row-cards p-5 border-0 shadow ">
                            <!-- <i class="fa fa-desktop" style="font-size: 80px;"></i>
                        <i class="fa fa-code" style="font-size: 30px;"></i> -->
                            <h5 class="text-center">Traffic Signal Optimization</h5>
                            <p class="text-muted mt-4">ATCS uses advanced algorithms and real-time data to optimize traffic signal timings based on current traffic conditions. This helps in reducing congestion, minimizing delays, and improving overall traffic flow.</p>
                            <button class="btn btn-white border border-dark rounded-pill">See More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card row-cards p-5 border-0 shadow">
                            <!-- <img src="https://images.ctfassets.net/vztl6s0hp3ro/4dtg3idrVRSl0ljb3oVRfs/e12b311c82e9367201c496573bf5d000/Illustration_Cognitive_Ability_square_-_black.svg" height="100px" alt=""> -->
                            <h5 class="text-center">Real-time Monitoring and Data Analytics</h5>
                            <p class="text-muted mt-4">ATCS systems often incorporate sensors, cameras, and other monitoring devices to collect real-time data on traffic patterns, vehicle volumes, and environmental conditions. This data is analyzed to make informed decisions and adjustments to traffic management strategies.</p>
                            <button class="btn btn-white border border-dark rounded-pill">See More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card row-cards p-5  border-0 shadow">
                            <!-- <img src="https://images.ctfassets.net/vztl6s0hp3ro/6E1mir6qYGr17cZy3jI3J1/9a08942613631fa70d360c2aa1eb6fb7/Illustration_Personality_and_Culture_square_-_black.svg" height="100px" alt=""> -->
                            <h5 class="text-center">Adaptive Traffic Control</h5>
                            <p class="text-muted mt-4"> Unlike traditional fixed-time traffic signals, ATCS can adaptively adjust signal timings based on actual traffic demand and conditions. This adaptive approach allows for more responsive and efficient traffic management.</p>
                            <button class="btn btn-white border border-dark rounded-pill">See More</button>
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
                        <div class="card bg-white border-0 p-3 mt-5" onclick="toggleAnswer('answer1',this)">
                            <h6>What is an ATMS system, and how does it enhance traffic management? <i class="fa fa-sort-desc"></i></h6>

                        </div>
                        <div id="answer1" class="answer mt-3 text-muted">
                            ATMS stands for Advanced Traffic Management System. It enhances traffic management by integrating data from sensors, cameras, and GPS to monitor traffic in real-time, controlling traffic signals and signs, and managing incidents to improve safety and reduce delays.
                        </div>
                        <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer2',this)">
                            <h6>
                                What is an Advanced Traffic Management System (ATMS), and how does it benefit transportation and traffic management?
                                <i class="fa fa-sort-desc"></i>
                            </h6>
                        </div>
                        <div id="answer2" class="answer mt-3 text-muted">
                            An Advanced Traffic Management System (ATMS) benefits transportation and traffic management by providing a comprehensive overview of traffic conditions, optimizing traffic flow through adaptive control, enhancing safety, reducing delays, and contributing to environmental sustainability.
                        </div>

                        <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer3',this)">
                            <h6>
                                Can ATMS assist in incident management, and if so, how?
                                <i class="fa fa-sort-desc"></i>
                            </h6>
                        </div>
                        <div id="answer3" class="answer mt-3 text-muted">
                            Yes, ATMS can assist in incident management by quickly identifying accidents and adverse conditions, allowing for timely response and mitigation, thus improving overall traffic safety and efficiency.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleAnswer(id, element) {
                var answer = document.getElementById(id);
                var cards = document.querySelectorAll('.card');

                cards.forEach(function(card) {
                    card.classList.remove('red-text');
                });

                if (answer.style.display === "none") {
                    answer.style.display = "block";
                    element.classList.add('red-text');
                } else {
                    answer.style.display = "none";
                }
            }
        </script>
    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>