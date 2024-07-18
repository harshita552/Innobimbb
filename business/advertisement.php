<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php";
    ?>
    <link href="../css/style.css" rel="stylesheet">

    <style>
        .scrollable-row {
            display: flex;
            overflow-x: auto;
            flex-wrap: nowrap;
        }

        .scrollable-row .col-md-4 {
            flex: 0 0 auto;
            width: 100%;
        }

        @media (min-width: 768px) {
            .scrollable-row .col-md-4 {
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }

        .scrollable-row::-webkit-scrollbar {
            height: 8px;
        }

        .scrollable-row::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }

        .row-cards {
            height: 300px;
        }

        .row-cards1 {
            height: 340px;
            /* width: 300px; */
        }

        .answer {
            display: none;
        }

        .red-text {
            color: red;
        }
    </style>

    <style>
        .section-title {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .section-title img {
            margin-right: 10px;
        }

        .card-custom {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-custom img {
            height: 200px;
            object-fit: cover;
        }

        .card-custom .card-body {
            padding: 20px;
        }

        .feature-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>

    <style>
        .icon {
            font-size: 2rem;
            color: #007bff;
            margin-right: 10px;
        }

        .service-point {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .service-point img {
            border-radius: 20px;
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php"
    ?>

    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-6">
                <div class="container mt-5 p-3">
                    <h1 class="p-4">Transform Your Online Presence with Our Expert Web Development Services!</h1>
                    <p class="p-4 text-muted">
                        Our team of experienced developers and designers are dedicated to creating visually stunning, responsive, and user-friendly websites tailored to your brand's unique needs. By leveraging the latest technologies and industry best practices, we ensure your website not only looks great on all devices but also provides an intuitive and engaging user experience. From custom front-end designs to robust back-end solutions, we deliver a seamless and comprehensive web development service that drives results and sets your business apart in the digital landscape.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <img height="450px" width="" class="rounded mt-5" src="https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                    <!-- <div class="col-md-6 px-4">
                        <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=600" height="250px" width="250px" alt="">
                        <img src="https://images.pexels.com/photos/4158/apple-iphone-smartphone-desk.jpg?auto=compress&cs=tinysrgb&w=600" class="mt-3" height="180px" width="250px" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 p-4">
        <h2 class="text-center mb-5">Why Choose Our Services?</h2>
        <div class="row">
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">🚀</div>
                    <div>
                        <h4>Launch Your Dream Website</h4>
                        <p>Whether you're a startup, small business, or established enterprise, we bring your vision to life with stunning, responsive, and user-friendly websites.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">🔧</div>
                    <div>
                        <h4>Customized Solutions</h4>
                        <p>Tailored to meet your specific needs, our web development solutions ensure a seamless experience for your visitors and help drive conversions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">⚡</div>
                    <div>
                        <h4>Fast & Secure</h4>
                        <p>Our websites are optimized for speed and built with the latest security protocols, ensuring a fast, secure, and reliable online presence.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">🎨</div>
                    <div>
                        <h4>Beautiful Designs</h4>
                        <p>Our creative team designs visually appealing and engaging websites that captivate your audience and reflect your brand identity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">📈</div>
                    <div>
                        <h4>SEO Optimized</h4>
                        <p>Get found on Google! Our SEO-friendly websites help you rank higher in search results, driving more organic traffic to your site.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">🤝</div>
                    <div>
                        <h4>Ongoing Support</h4>
                        <p>We’re here for you even after your site goes live. Our dedicated support team ensures your website remains updated, secure, and functioning smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">💡</div>
                    <div>
                        <h4>Innovative Features</h4>
                        <p>From e-commerce solutions to interactive elements, we integrate the latest technologies to enhance user experience and functionality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">📊</div>
                    <div>
                        <h4>Analytics & Insights</h4>
                        <p>We provide comprehensive analytics and insights to help you understand your audience and make informed decisions to improve your website’s performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-point">
                <div class="card p-3 shadow text-center">
                    <div class="icon">🌟</div>
                    <div>
                        <h4>Client Satisfaction</h4>
                        <p>Your satisfaction is our priority. We work closely with you to ensure your needs are met and your expectations are exceeded.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 p-4">
        <h2 class="text-center mb-4">Why Choose Us?</h2>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush p-4">
                    <li class="list-group-item">Experienced Team: Expertise in web development.</li>
                    <li class="list-group-item">Client-Centric Approach: Your satisfaction is our top priority.</li>
                    <li class="list-group-item">Competitive Pricing: High-quality services that fit your budget.</li>
                    <li class="list-group-item">Proven Track Record: Hundreds of successful projects delivered.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <!-- <img src="https://images.pexels.com/photos/669612/pexels-photo-669612.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                <img src="" alt="">


                <!-- <div class="col-md-5"> -->
                <div class="row">
                    <div class="col-md-6">
                        <img height="450px" width="280px" src="https://images.pexels.com/photos/7438096/pexels-photo-7438096.jpeg?auto=compress&cs=tinysrgb&w=600" style=" border-radius: 20px;" alt="">
                    </div>
                    <div class="col-md-6 px-4">
                        <img src="https://images.pexels.com/photos/669612/pexels-photo-669612.jpeg?auto=compress&cs=tinysrgb&w=600" height="250px" width="250px" style=" border-radius: 20px;" alt="">

                        <img src="https://images.pexels.com/photos/3861943/pexels-photo-3861943.jpeg?auto=compress&cs=tinysrgb&w=600" class="mt-3" height="180px" width="250px" style=" border-radius: 20px;" alt="">
                    </div>
                </div>
                <!-- </div> -->
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
                        <h6> What services do you offer? <i class="fa fa-sort-desc"></i></h6>
                        <div id="answer1" class="answer mt-3 text-muted">

                            <p> We offer a full range of web development services including front-end design, back-end development, e-commerce solutions, and ongoing maintenance.
                            </p>
                        </div>
                    </div>
                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer2',this)">
                        <h6>
                            How long does it take to build a website?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer2" class="answer mt-3 text-muted">
                            The timeline for building a website varies depending on the project's complexity and requirements. Generally, it can take anywhere from a few weeks to a few months. </div>
                    </div>


                    <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer3',this)">
                        <h6>
                            Do you provide ongoing support?
                            <i class="fa fa-sort-desc"></i>
                        </h6>
                        <div id="answer3" class="answer mt-3 text-muted">
                            <p> Yes, we offer ongoing support and maintenance services to ensure your website remains updated, secure, and functioning smoothly.</p>
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

    <div class="container text-center mt-5 p-5">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to discuss your project and see how we can help you achieve your goals!</p>
        <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
    </div>

    <!-- <div class="container text-center mt-5">
        <h3>🌐 Get Started Today</h3>
        <p>Visit <a href="YourWebsite.com">YourWebsite.com</a> or call us at (123) 456-7890 to discuss your project. Let’s create something amazing together!</p>
    </div> -->
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>