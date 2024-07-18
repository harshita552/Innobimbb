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
        <h1 class="text-center mt-4 mb-4">Visual Merchandising Displays: Retail Display Solutions</h1>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <section class="card p-4 border-0 mt-">
                        <p class="text-muted">Retail Display Solutions involve the creation and implementation of innovative and engaging displays within retail spaces, such as malls, stores, and exhibition areas. These displays are designed not only to showcase products effectively but also to enhance the overall visual appeal of the environment and encourage customer interaction.</p>
                    </section>
                </div>

                <div class="col-md-6">
                    <img class="rounded" src="https://images.pexels.com/photos/11713549/pexels-photo-11713549.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" width="100%">
                </div>
            </div>


        </div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Key Objectives</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fa fa-bullseye card-icon"></i>&nbsp; Enhanced Visual Appeal: Displays are crafted to catch the attention of shoppers, using creative layouts, lighting, and signage.</li><br>
                                <li><i class="fa fa-building card-icon"></i>&nbsp; Brand Representation: They serve as a platform to reinforce brand identity and values through cohesive design elements.</li><br>
                                <div id="morePoints" style="display: none;">
                                    <li><i class="fa fa-star card-icon"></i>&nbsp; Product Highlighting: Strategically placing products in ways that highlight their features and benefits, thereby influencing purchasing decisions.</li><br>
                                    <li><i class="fa fa-users card-icon"></i>&nbsp; Customer Engagement: Encouraging customer interaction through interactive displays or experiential elements that increase dwell time and interest.</li>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore()" id="seeMoreBtn">See More</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Components of Retail Display Solutions</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fa fa-paint-brush card-icon"></i>&nbsp; Design and Conceptualization: Involves conceptualizing display themes and layouts that align with the brand image and customer demographics.</li><br>


                                <div id="morePoints2" style="display: none;">
                                    <li><i class="fa fa-cube card-icon"></i>&nbsp; Materials and Technology: Utilization of various materials such as acrylics, metals, and digital screens to create visually appealing and durable displays.</li><br>
                                    <li><i class="fa fa-lightbulb card-icon"></i>&nbsp; Lighting and Visual Effects: Integration of lighting techniques to draw attention to key products and create ambiance within the retail space.</li><br>
                                    <li><i class="fa fa-desktop card-icon"></i>&nbsp; Interactive and Digital Elements: Incorporating interactive features like touch screens or digital displays to provide additional product information or entertainment value.</li><br>
                                    <li><i class="fa fa-calendar-alt card-icon"></i>&nbsp; Seasonal and Promotional Displays: Adapting displays to seasonal themes or promotional campaigns to keep the environment fresh and relevant.</li><br>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore2()" id="seeMoreBtn2">See More</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg p-4">
                        <div class="card-body">
                            <h2 class="card-title">Benefits</h2>
                            <ul class="card-text list-unstyled text-muted">
                                <li><i class="fas fa-chart-line card-icon"></i>&nbsp; Increased Sales: Well-executed displays can lead to higher conversion rates and increased impulse purchases.</li><br>
                                <li><i class="fa fa-shield-alt card-icon"></i>&nbsp; Brand Differentiation: Creates a distinctive brand experience that sets retailers apart from competitors.</li><br>

                                <div id="morePoints3" style="display: none;">

                                    <li><i class="fa fa-tasks card-icon"></i>&nbsp; Operational Efficiency: Optimizes store layout and product placement for better traffic flow and inventory management.</li>
                                </div>
                            </ul>
                            <button class="btn btn-white border border-dark rounded-pill" onclick="showMore3()" id="seeMoreBtn3">See More</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="p-5">
            <h2 class="text-center">Some Retail Display Solutions are:</h2>
            <div class="card p-4 border-0 text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>Window Displays</h3>
                            <div class="card p-4 border-0">
                                Window Displays: Eye-catching displays placed in store windows to attract passersby and entice them to enter. </div>
                            <img src="https://images.pexels.com/photos/1466609/pexels-photo-1466609.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Window Display" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>POP Displays</h3>
                            <div class="card p-4 border-0">
                                POP (Point of Purchase) Displays: Located near checkout areas to promote last-minute purchases.
                            </div>
                            <img src="https://images.pexels.com/photos/5833760/pexels-photo-5833760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="POP Display" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4">
                            <h3>Interactive Kiosks</h3>
                            <div class="card p-4 border-0">
                                Interactive Kiosks: Touchscreen displays where customers can browse products or access additional information.
                            </div>
                            <img src="https://images.pexels.com/photos/6140676/pexels-photo-6140676.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Interactive Kiosk" class="img-fluid">
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
                    <h1 class="pt-5">Frequently Asked Questions (FAQs)</h1>
                </div>

                <div class="col-md-7">
                    <div class="card bg-white border-0 p-3 mt-5" onclick="toggleAnswer('answer1',this)">
                        <h6> What are Video Merchandising Displays?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer1" class="answer mt-3 text-muted">

                            <p> Video Merchandising Displays are digital screens or panels used in retail environments to
                                showcase products, promotions, or brand messages using dynamic video content.
                            </p>
                        </div>
                    </div>
                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer2',this)">
                        <h6>
                            What are the benefits of using Video Merchandising Displays?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer2" class="answer mt-3 text-muted">
                            Video Merchandising Displays can enhance product visibility, engage customers with interactive
                            content, and adapt quickly to promotional changes, ultimately boosting sales and brand
                            awareness. </div>
                    </div>


                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer3',this)">
                        <h6>
                            How can Video Merchandising Displays be integrated into retail spaces effectively?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer3" class="answer mt-3 text-muted">
                            <p> Effective integration involves strategic placement, content planning, and ensuring the displays
                                align with the overall store layout and customer journey to maximize impact and engagement.
                            </p>
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
    <!-- Bootstrap JavaScript (optional) -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
</body>

<script>
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

</html>