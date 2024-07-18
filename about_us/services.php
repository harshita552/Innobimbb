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

        .hidden-content {
            display: none;
        }

        .img-content {
            height: 140px;
            width: auto;
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
                <img src="https://images.pexels.com/photos/3803517/pexels-photo-3803517.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="300px" alt="Banner Image" class="banner-image">
                <div class="banner-overlay">
                    <h1 class="mx-5  text-center">Our Services</h1>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h4 class="mt-3">Our Services</h4>
            <!-- <div class="card shadow border- m-4 p-3"> -->
            <p class="m-3">
                Innobimb Infotech’s delivers quality and timely solutions and services at a price
                that make our clients smile. We focus on offshore development at our excellence
                centre in Bhopal, India. This allows us to scale up rapidly (leveraging on the plentiful
                supply of talent and thus cutting down on execution time) at costs that are on an
                average 50% cheaper.
            </p>
            <p class="mx-3">
                An in-depth knowledge of various technology areas enables us to provide endto-end solutions and services. With our 'Web of Participation', we maximize the
                benefits of our depth, diversity and delivery capability, ensuring adaptability to client
                needs, and thus bringing out the most innovative solutions in every business and
                technology domain.
            </p>
            <p class="mx-3">
                Innobimb Infotech’s is your one stop partner where you can outsource all your
                support services with complete peace of mind about quality and reliability. Innobimb
                Infotech’s Solution’s strength lies in understanding the client’s business processes,
                culture, vision and goals across the industry segments and offering client-oriented
                solutions which are highly reliable, creating customer comfort.

            </p>

            <p class="text-danger fw-bold">
                Our Services Include:
            <ul>
                <li>
                    IT Services
                </li>
                <li>
                    Home Automation
                </li>
                <li>
                    Security Services
                </li>
                <li>
                    Project Management
                </li>
                <li>
                    Consultancy
                </li>
                <li>
                    Outsourcing
                </li>
                <li>
                    Education / Training
                </li>
            </ul>
            </p>
            <!-- </div> -->
            <hr class="bg-dark mt-3">
            <div class="container-fluid p-4 mt-5">
                <h1 class="text-center mb-4"> Our Services Includes</h1>
                <div class="container p-4 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">IT Services</h5>
                                        <p>
                                            IT has high potential in terms of employment and revenue generation. The IT
                                            manufacturing sector is growing at an average rate of 28-30% annually over the past
                                            decade.
                                            <span class="hidden-content" id="hidden-content-1">
                                                <br><br> Software industry continues to contribute a major portion of Indian IT
                                                industry's revenues. According to the IT vision of Govt. of India, the expected level of
                                                this by the end of year 2018-19 is expected to reach 6.23 lakh crore.
                                                <br><br>
                                                With the dedicated and adroit employees at Innobimb Infotech’s, it has been adept in
                                                assisting the growth of the nation in the field of Information Technology. Innobimb
                                                Infotech’s with its vision of quality and innovation has been successful in catering the
                                                needs of those who seek our assistance in following areas of IT enabled services: <br>
                                                • Software Solutions <br>
                                                • IPTV Solution<br>
                                                • Web Solution<br>
                                                • Graphics & Multimedia Solutions<br>
                                                • Networking Solutions<br>
                                                • Quality Assurance & Testing<br>
                                                • Application Maintenance & Support<br>
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-1">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Web Solutions</h5>
                                        <p>
                                            Innobimb Infotech’s provides web solutions & services to help customer reach to
                                            a wider customer base. The web is a new and different medium for communication
                                            and requires a
                                            <span class="hidden-content" id="hidden-content-2">
                                                different viewpoint and skill set to use it in the most effective way. You
                                                need web consulting to get more return on your investment in your web site. We can
                                                help you get the most effective solution through: <br><br>
                                                • Website Development <br>
                                                • Web Multimedia <br>
                                                • Intranet Development <br>
                                                • Web Promotion <br>
                                                • Web hosting <br>
                                                • E-commerce <br>
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-2">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Website Development</h5>
                                        <p>
                                            Websites can enhance awareness of your brand, leading to more sales. Build
                                            relationships with customers, vendors, and shareholders through your online identity
                                            <span class="hidden-content" id="hidden-content-3">
                                                get more traffic from the search engines
                                                Get more traffic from the search engines, fast loading web pages with excellent
                                                navigation and designing, communicate more effectively.
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Networking Solutions</h5>
                                        <p class="">Innobimb Infotech Pvt Ltd can network your computers together by peer-to- peer
                                            or using a server-based network and connect you to the Internet. We will help you
                                            secure a domain name,
                                            <span class="hidden-content" id="hidden-content-4">
                                                locate an Internet service provider, and configure your network
                                                for T1-T3, Dialup, DSL, Cable or connection sharing. We can establish remote access
                                                setups, which will help an employee, stay in touch with the workplace, irrespective of
                                                the geographical location. <br>
                                                We offer following networking services: <br>
                                                • Preparation of Network Architecture (Network protocol, Backbone at twisted
                                                wire, cable or optical fiber, Net topology, Hub/Switches, Conceptual Diagram
                                                etc).<br>
                                                • LAN/ WAN set-up<br>
                                                • Corporate Intranets<br>
                                                • Network Administration<br>
                                                • Windows NT/ Novell Netware/ UNIX/ Linux Server support. <br>
                                                • IIS Support<br>
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-4">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Consultancy</h5>
                                        <p class="">Consulting is the integrated part of our services with expertise in custom
                                            programming, client-server database design and implementation, and web
                                            development. We specialize in designing and
                                            <span class="hidden-content" id="hidden-content-5">
                                                implementing cost-effective, creative
                                                information solutions to complex business problems. We have provided are services
                                                to finance institutions, health care sector, government sector and manufacturing
                                                environment.
                                                <br> <br>
                                                We pay full attention to customers, doesn’t matter theirs is Five-page web site
                                                or fully fledged ERP to be designed. And we take proud in the fact that customers right
                                                from the inception have continuously added to our friends list. Most of our customers
                                                are brought to us through our satisfied users. <br> <br>
                                                Our vast pool of technically qualified and managerial manpower is well
                                                supported by excellent infrastructure and knowledge management facilities to deliver
                                                the client time bound, qualitative and cost-effective solution meeting the global
                                                standards.<br>
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-5">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Outsourcing</h5>
                                        <p>When your business is running twenty-four seven to come up with innovative
                                            means to maximize its potential, outsourcing isn't just an option it is a necessity. Today,
                                            efficient business process outsourcing has
                                            <span class="hidden-content" id="hidden-content-6">
                                                become the lever to unload your
                                                organization of resource-consuming procedures and controllable costs. Everyone
                                                works towards allowing your organization a stronger focus on core business areas. <br>
                                                Innobimb Infotech’s not only provides industry-specific solutions but also
                                                deputes personnel to organizations with technical skills to manage back-office
                                                transaction processing. Viewing it from clients’ perspective this cuts off cost on
                                                acquiring and maintaining technical staff and enables them focus on their core
                                                competencies. The key element of services delivery is an integrated approach
                                                towards providing increasing value over the entire course of our client relationships.
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-6">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-0 bg-light p-4">
                                        <h5 class="text-center">Education / Training</h5>
                                        <p class="">The educational division of Innobimb Infotech’s, provides quality education in
                                            various fields of IT. In an age of cutthroat competition, college education is not enough.
                                            To have an edge over your counterparts,
                                            <span class="hidden-content" id="hidden-content-7">
                                                you need to have something EXTRA. That
                                                additional bit is provided by Innobimb Infotech’s. We have highly qualified, capable &
                                                experienced team of faculty comprising of professionals & technical experts. Individual
                                                attention is provided to students and equal emphasis is given to both theory and
                                                practical. Innobimb Infotech’s also provide training to M.C.A’s, B.Tech’s and M.Tech’s.
                                                The mission of Innobimb Infotech Pvt Ltd is to provide quality education in the various
                                                fields of information technology for people of all walks of life.
                                            </span>
                                        </p>
                                        <a href="#" id="toggle-content-7">Read More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-dark">
            </div>
        </div>

        <div class="container p-3">
            <h4 class="mb-4">Corporate Training consultation</h4>
            <div class="card border-0 shadow p-1 ">
                <p class="m-4">In our corporate training programs, we emphasis on a course schedule
                    that achieves following objective for the corporate.</p>
                <ul class="mx-4">
                    <li>Training should align with the business plan and address the core
                        competencies of your business.</li>
                    <li>Knowledge management and self-directed learning should be integral part
                        of the training/learning processes.</li>
                    <li>We ensure that Training process is effective, efficient and is properly
                        staffed, organized, and managed.</li>
                    <li>We have feedback systems to monitor business plans, performance
                        problems and training results.</li>
                </ul>
            </div>
        </div>

        <div class="container p-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="card  shadow p-5">
                        <h5>Our Core Team:</h5>
                        <ul class="">
                            <li>Mr. Gaurav Nema, (Founder,COO)</li>
                            <li>Mr. Suyash Srivastava, (Networking, DevOps Head)</li>
                            <li>Mr. Neetesh Kuchya, (Chief Technical Officer)</li>
                            <li>Mr. Aman Kumar Verma, (Developer)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card shadow p-5">
                        <h5>Our Business and Professional Services</h5>
                        <ul>
                            <li>Proctoring based online Examination solution which is used by various
                                Government and private universities / colleges. It is only software
                                available in market with the capacity to conduct exams for 40,000 users
                                simultaneously with Auto proctoring.</li>
                            <li>Learning Management System for more than 40 Colleges to take digital
                                control on education, what they are delivering to their students.
                            </li>
                            <li>Lead Management System to enhance your control on leads collected
                                from various online & offline means and ways. Incoming and outgoing
                                Telephonic calls are easily controlled by his software.</li>
                            <li>Subscriber Management System to manage Cable TV Network.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-3">

        <hr class="bg-dark">

        <h3 class="m-4 text-center">Our Technologies</h3>

            <div class="card p-4 bg-white border-0 shadow mt-5">
                <div class="row p-4">
                    <div class="col-md-3">
                        <div class="card border-0 p-3 ">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoBFWNE-FBeqKE2lb9nagqtXkEm2gqKyWw07pnDd-dT2WA4Ze5" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRXXba0EE1URdH1a8ORYbISkXQlWkcBBz-AMuvYehgucz9NHVNU" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsB41oDwAQAFWEI0kdRA0YiyiR8yzJqEPP_5jGiRNdwVKtDGEj" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScT6ezaSXnF0kOtzkfoFLvzsFTSIoc5AKPwJYD60sYOmjlQBPp" alt="">
                        </div>
                    </div>
                </div>

                <div class="row mt-3 p-4">
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRp716U511xXLfu7W8pdP8T0lvEQhP9L5vsmOXzgYldwwNYKtqK" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSo5UXw9v8IFk2ahveQ_nrqNnTWPXAf9enrASnRiZIFliiCurke" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSEIW83k5OiHngGUYF7si2p1PsHKc3GSRFoVAi988ayMwkJByxp" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCCgQX9YzE71vmXbfNiiOngpDllKusXNWUGZovll-_Narr42lg" alt="">
                        </div>
                    </div>
                </div>

                <div class="row mt-3 p-3">
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-G2oLSRplX1arrn_Ezk-QwvHGgTJJylPNBswbUSpwQLryXs_7" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyYRXNcMRmsuG8VwTNcO3Xyi8xM2HYJyWCqPV1kVYA7LpjFOpK" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8o0ljUPPFjSWBao7M0QQGkYOBrvucOn6sxRt7dufn8pMeoGJu" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 p- shadow">
                            <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcThjgGS2txsRSV0PqYwDmkKlrcyWyR1UXJbtQVNnrkck5UEvMBK" alt="">
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
            document.getElementById('toggle-content-1').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-1');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-2').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-2');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-3').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-3');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-4').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-4');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-5').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-5');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-6').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-6');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });

            document.getElementById('toggle-content-7').addEventListener('click', function(event) {
                event.preventDefault();
                var content = document.getElementById('hidden-content-7');
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    content.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });
        </script>

    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>