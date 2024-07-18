<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php";
    ?>
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .img-fluid {
            height: 300px;
            width: 280px;
            border-radius: 10px;
        }

        .answer {
            display: none;
        }

        .red-text {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php";
    ?>

    <div class="container-fluid">
        <h1 class="text-center mt-4 mb-4">IoT Solutions in Retail Environments</h1>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <section class="card p-4 border-0 mt-">
                        <p class="text-muted">IoT solutions in retail involve integrating smart devices and sensors to optimize operations and enhance customer experiences. These solutions utilize data analytics and automation to improve efficiency and personalize interactions.</p>
                    </section>
                </div>

                <div class="col-md-6">
                    <img class="rounded" src="https://images.pexels.com/photos/21939553/pexels-photo-21939553/free-photo-of-a-laptop-standing-on-a-wooden-table.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" height="400px" width="380px">
                </div>
            </div>


        </div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Key Objectives of IoT in Retail</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fa fa-bullseye card-icon"></i>&nbsp; Operational Efficiency: Automating inventory management and optimizing supply chain logistics.</li><br>
                                <div id="morePoints" style="display: none;">
                                    <li><i class="fa fa-building card-icon"></i>&nbsp; Enhanced Customer Insights: Using data analytics to understand customer behavior and preferences for personalized marketing.</li><br>
                                    <li><i class="fa fa-star card-icon"></i>&nbsp; Real-Time Monitoring: Monitoring store conditions and product availability to improve decision-making.</li><br>
                                    <li><i class="fa fa-users card-icon"></i>&nbsp; Interactive Experiences: Creating interactive displays and digital signage for engaging customer experiences.</li>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore()" id="seeMoreBtn">See More</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Components of IoT Solutions</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fa fa-paint-brush card-icon"></i>&nbsp; Sensor Integration: Deploying sensors for real-time data collection on inventory and customer traffic.</li><br>


                                <div id="morePoints2" style="display: none;">
                                    <li><i class="fa fa-cube card-icon"></i>&nbsp; Connectivity and Networks: Establishing robust networks for seamless device communication and data transmission.</li><br>
                                    <li><i class="fa fa-lightbulb card-icon"></i>&nbsp; Smart Displays: Implementing smart displays and IoT-enabled signage for targeted promotions and customer engagement.</li><br>
                                    <li><i class="fa fa-desktop card-icon"></i>&nbsp; Cloud Computing: Leveraging cloud platforms for scalable data storage and analysis.</li><br>
                                    <li><i class="fa fa-calendar-alt card-icon"></i>&nbsp; Predictive Analytics: Using machine learning algorithms to forecast trends and optimize business strategies.</li><br>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore2()" id="seeMoreBtn2">See More</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Benefits of IoT in Retail</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fas fa-chart-line card-icon"></i>&nbsp; Improved Customer Experience: Personalizing interactions based on real-time data insights.</li><br>
                                <li><i class="fa fa-shield-alt card-icon"></i>&nbsp; Operational Efficiency: Streamlining operations and reducing costs through automation.</li><br>

                                <div id="morePoints3" style="display: none;">

                                    <li><i class="fa fa-tasks card-icon"></i>&nbsp; Competitive Advantage: Gaining insights into market trends and adapting strategies more swiftly.</li>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore3()" id="seeMoreBtn3">See More</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="p-5">
            <h2 class="text-center">IoT Solutions for Retail</h2>
            <div class="card p-4 border-0 text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>Smart Shelves</h3>
                            <div class="card p-4 border-0">
                                Smart Shelves: Equipped with sensors to track inventory levels and alert staff for restocking. </div>
                            <img src="https://images.pexels.com/photos/7034449/pexels-photo-7034449.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Smart Shelves" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>Interactive Displays</h3>
                            <div class="card p-4 border-0">
                                Interactive Displays: Touchscreen interfaces offering product information and personalized recommendations.
                            </div>
                            <img src="https://images.pexels.com/photos/7567426/pexels-photo-7567426.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Interactive Displays" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>IoT Analytics</h3>
                            <div class="card p-4 border-0">
                                IoT Analytics: Utilizing data analytics to optimize store layouts and product placements based on customer traffic patterns.
                            </div>
                            <img src="https://images.pexels.com/photos/139387/pexels-photo-139387.jpeg?auto=compress&cs=tinysrgb&w=600" alt="IoT Analytics" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="container-fluid bg-light text-dark mt-5">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="pt-5">Frequently Asked Questions (FAQs) about IoT in Retail</h1>
                </div>

                <div class="col-md-7">
                    <div class="card bg-white border-0 p-3 mt-5" onclick="toggleAnswer('answer1',this)">
                        <h6> What are IoT Solutions in Retail?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer1" class="answer mt-3 text-muted">

                            <p> IoT solutions in retail involve using connected devices and data analytics to optimize operations, enhance customer experiences, and drive business insights.</p>
                        </div>
                    </div>
                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer2',this)">
                        <h6>
                            How do IoT Solutions benefit retail businesses?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer2" class="answer mt-3 text-muted">
                            IoT solutions benefit retail businesses by improving inventory management, personalizing customer interactions, and providing actionable insights for strategic decision-making.
                        </div>
                    </div>


                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer3',this)">
                        <h6>
                            What are examples of IoT applications in retail?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer3" class="answer mt-3 text-muted">
                            <p> Examples include smart shelves that monitor product levels, interactive displays offering personalized recommendations, and analytics platforms optimizing store layouts.</p>
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

            function showMore() {
                var morePointsDiv = document.getElementById('morePoints');
                var seeMoreBtn = document.getElementById('seeMoreBtn');

                if (morePointsDiv.style.display === 'none') {
                    morePointsDiv.style.display = 'block';
                    seeMoreBtn.textContent = 'See Less';
                } else {
                    morePointsDiv.style.display = 'none';
                    seeMoreBtn.textContent = 'See More';
                }
            }

            function showMore2() {
                var morePointsDiv2 = document.getElementById('morePoints2');
                var seeMoreBtn2 = document.getElementById('seeMoreBtn2');

                if (morePointsDiv2.style.display === 'none') {
                    morePointsDiv2.style.display = 'block';
                    seeMoreBtn2.textContent = 'See Less';
                } else {
                    morePointsDiv2.style.display = 'none';
                    seeMoreBtn2.textContent = 'See More';
                }
            }

            function showMore3() {
                var morePointsDiv3 = document.getElementById('morePoints3');
                var seeMoreBtn3 = document.getElementById('seeMoreBtn3');

                if (morePointsDiv3.style.display === 'none') {
                    morePointsDiv3.style.display = 'block';
                    seeMoreBtn3.textContent = 'See Less';
                } else {
                    morePointsDiv3.style.display = 'none';
                    seeMoreBtn3.textContent = 'See More';
                }
            }
        </script>
    </div>

    <?php
    require "../component/footer.php";
    ?>
    <!-- Bootstrap JavaScript (optional) -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>
