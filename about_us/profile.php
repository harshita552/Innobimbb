<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php";
    ?>
    <link href="../css/style.css" rel="stylesheet">
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

        /* .row-cards {
            height: 450px;
        } */

        .card-rows {
            height: 250px;
        }

        .hidden-content,
        #hidden-content-2 {
            display: none;
        }
    </style>

</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php"
    ?>

    <div class="container-fluid">
        <div class="container-fluid m-2">
            <div class="container banner-container">
                <img src="https://images.pexels.com/photos/6803551/pexels-photo-6803551.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="300px" alt="Banner Image" class="banner-image">
                <div class="banner-overlay">
                    <h1 class="mx-5  text-center">About Us</h1>
                </div>
            </div>
        </div>

        <!-- <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="mt-3">Company Profile</h4>
                </div>
                <div class="col-md-8">
                    <div class="card shadow border-0 p-3">
                        <p class="">
                            Innobimb Infotech Pvt Ltd is the leading information technology consulting,
                            services, and business process outsourcing organization that envisioned and
                            instigated the adoption of the flexible business practices that today enable our client
                            companies to operate more efficiently and produce more value
                            Innobimb Infotech Pvt Ltd strength lies in perceiving the client’s business
                            processes, culture, vision and goals across the industry segments and offering clientoriented solutions, which are highly reliable. We commenced operations in 2021, to
                            provide consulting and IT services to clients-globally as partners to conceptualize and
                            realize technology driven business transformation initiatives.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container mt-5">
            <h4 class="mt-3">Company Profile</h4>
            <div class="card shadow border- m-4 p-3">
                <p class="">
                    Innobimb Infotech Pvt Ltd is the leading information technology consulting,
                    services, and business process outsourcing organization that envisioned and
                    instigated the adoption of the flexible business practices that today enable our client
                    companies to operate more efficiently and produce more value
                    Innobimb Infotech Pvt Ltd strength lies in perceiving the client’s business
                    processes, culture, vision and goals across the industry segments and offering clientoriented solutions, which are highly reliable. We commenced operations in 2021, to
                    provide consulting and IT services to clients-globally as partners to conceptualize and
                    realize technology driven business transformation initiatives.
                </p>
            </div>
            <hr class="bg-dark">
        </div>


        <div class="container-fluid p-5 ">
            <div class="container">
                <div class="row p-4 text-center">
                    <div class="col-md-6">
                        <div class="card row-cards p-5 border-0 shadow ">
                            <h5 class="text-center">Commitment</h5>
                            <p class="text-muted pt-5">Our approach focuses on new way of business, thereby combining IT innovations
                                and adoption while leveraging an organization’s current assets.
                                Our team is committed to provide IT Services with:</p>
                            <div class="hidden-content text-left">
                                <h6 class=" mt-2">
                                    • Quality <br>
                                </h6>
                                <div class="">
                                    <p class="text-muted">
                                        Our main emphasis is to deliver best quality in every project we undertake. With
                                        our time-tested business methodology, and structured solution building approach, we
                                        ensure to maintain our global business standards.
                                    </p>
                                </div>

                                <h6> • Technology, Innovation, Support<br></h6>
                                <p class="text-muted">
                                    Technology leadership is the most successful strategy to challenge
                                    competitors and consolidate our position since business and technology work hand
                                    in hand. Our firm’s belief in this synthesis has motivated and enabled us to deliver
                                    solutions with a decisive competitive advantage. Innobimb Infotech today, is a new
                                    generation framework of technology innovators to accelerate growth.
                                </p>
                                <p class="text-muted">In each project, we emphasize on innovation. Our structured team works with a
                                    methodology and knowledge to innovate and deliver excellent services.</p>
                                <p class="text-muted">
                                    We are committed to provide development and tech-support teams to
                                    software and high–tech companies with the required infrastructure at a competitive
                                    rate from our State of the art development centre’s based in Bhopal India. We provide
                                    a wide range of profiles including project managers, project leads, technical leads and
                                    Software Engineers. On the support side, we provide Team leads, Senior, and Junior
                                    Technical support personnel on a 24x7 basis.
                                </p>
                            </div>
                            <button class="btn btn-white border border-dark rounded-pill" id="toggle-content">See More</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card row-cards p-5 border-0 shadow ">
                            <h5 class="text-center">Vision</h5>
                            <p class="text-muted mt-4">To build upon a reputation of being one of the most innovative IT Solution and
                                Service provider. We believe in doing our work in the most efficient way with robust
                                and structured methodology, with gradual evolution from hard-work to smart- work
                                culture, at client’s end also
                            </p>

                            <div class="hidden-content" id="hidden-content-2">
                                <p class="text-muted">
                                    Innobimb Infotech Pvt Ltd, an Indian company, is the leading software
                                    development, information technology consulting, services, and business process
                                    outsourcing organization. It envisioned and instigated the adoption of the flexible
                                    business practices, to operate efficiently and produce more value.
                                </p>
                                <p class="text-muted">
                                    Innobimb Infotech Solution’s strength lies in perceiving the client’s business
                                    processes, culture, vision and goals across the industry segments and offering clientoriented solutions which are highly reliable
                                </p>

                            </div>
                            <button class="btn btn-white border border-dark rounded-pill" id="toggle-content-2">See More</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- 
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
        </div> -->

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
        <script>
            document.getElementById('toggle-content').addEventListener('click', function() {
                var content = document.querySelector('.hidden-content');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'block';
                    this.textContent = 'See Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'See More';
                }
            });

            document.getElementById('toggle-content-2').addEventListener('click', function() {
                var content = document.getElementById('hidden-content-2');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'block';
                    this.textContent = 'See Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'See More';
                }
            });
        </script>
    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>