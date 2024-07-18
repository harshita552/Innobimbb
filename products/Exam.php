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
    </style>

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

        .row-cards{
            height: 340px;
        }
    </style>
</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php"
    ?>

    <div class="container-fluid">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 p-5">
                    <h1 class="fw-bold mt-4">Take the Guesswork Out of Hiring</h1>

                    <p class="mt-3">Innobimb equips you with the essential tools to effectively screen candidates, enabling you to make more informed, quicker, and simplified hiring decisions.</p>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-6">
                    <img src="https://images.ctfassets.net/vztl6s0hp3ro/3WkxdvISnrycKhN7DGYJSR/004889f2050143544536bbc3cabe1aaa/pt_1_happy_man_wearing_a_turban_and_glasses_reviewing_top_testgorilla_candidates.webp?w=1080&h=960" width="80%" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid p-4 mt-5">
            <h1 class="text-center mb-4">Read more about skills-based hiring</h1>
            <div class="container p-4 mt-4">
                <div class="row">
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
                </div>

                <div class="row">
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
                </div>
            </div>
        </div>


        <div class="container-fluid bg-light p-4 mt-5">
            <h1 class="text-center mb-4">Read about the science behind skills-based hiring</h1>

            <div class="container p-4 mt-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="card border-0 bg-white p-3">
                                    <!-- <h5>What is skills-based hiring?</h5> -->
                                    <p>Competency Models: Understanding how organizations define and assess the skills and behaviors required for success in a particular role.</p>
                                    <!-- <a href="#">Read More</a> -->
                                </div>
                            </div>
                            <div class="col-md-4 ">

                                <div class="card border-0 bg-white p-3">
                                    <!-- <h5>Skills-based hiring is on the rise. What does this mean for recruitment?</h5> -->
                                    <p>Behavioral Interviewing: Techniques for probing candidates about past experiences to gauge their competencies and predict future job performance.</p>
                                    <!-- <a href="#">Read More</a> -->

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="card border-0 bg-white p-4">
                                    <!-- <h5>10 inspiring skills-based recruitment stories</h5> -->
                                    <p>Job Analysis: Methods for identifying the essential skills and qualifications needed for a job through systematic analysis.</p>
                                    <!-- <a href="#">Read More</a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center p-5">
            <h1 class="">HIRING DOWN TO A SCIENCE</h1>
            <p>Across 400+ tests, developed by 15 specialists with 12 PhDs between them, you can screen talent on exactly what matters. Making smarter, faster, more accurate decisions, the first time of asking.</p>
        </div>

        <div class="container-fluid p-5 text-center">
            <div class="scrollable-row p-4">
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <i class="fa fa-desktop" style="font-size: 80px;"></i>
                        <i class="fa fa-code" style="font-size: 30px;"></i>
                        <h5>Programming</h5>
                        <p class="text-muted">Level up your tech team recruitment with coding tests in 20+ languages, helping you identify top developer talent with ease.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/4dtg3idrVRSl0ljb3oVRfs/e12b311c82e9367201c496573bf5d000/Illustration_Cognitive_Ability_square_-_black.svg" height="100px" alt="">
                        <h5>Cognitive ability</h5>
                        <p class="text-muted">Uncover problem solving and critical thinking skills with tests to assess verbal and numerical understanding.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/6E1mir6qYGr17cZy3jI3J1/9a08942613631fa70d360c2aa1eb6fb7/Illustration_Personality_and_Culture_square_-_black.svg" height="100px" alt="">
                        <h5>Personality and culture</h5>
                        <p class="text-muted">Gauge personality traits to match individuals to cultures where they'll thrive, ensuring team compatibility and job satisfaction.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/6HgVxAkYebMpxBxGIIgFkc/8a8f769fa4b4a70c5c3dc1cfe0790732/Illustration_Language_square_-_black.svg" height="100px" alt="">
                        <h5>Languages</h5>
                        <p class="text-muted">Evaluate language proficiency for roles requiring linguistics skills and to ensure effective communication across global teams.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/3t7mfl3Vuo9iv1vPfan0AJ/21edd5e3e18516b6467108f7c751eb64/Illustration_Role_Specific_square_-_black.svg" height="100px" alt="">
                        <h5>Role specific</h5>
                        <p class="text-muted">Tailor assessments to specific job roles, helping you spot candidates with the necessary skills and knowledge to excel in their positions.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/6o97cETLMe7eWvmTE6aUNq/597d3e9a2d8d1fb261675ffcfb852a11/Illustration_Situational_Judgment_square_-_black.svg" height="100px" alt="">
                        <h5>Situational judgment</h5>
                        <p class="text-muted">Test decision making and problem solving in real-world scenarios, predicting how candidates handle workplace challenges.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/1rvFyu0C2VEz3v12IudMyG/b3bfcfdaa9d61ec1d35e351b339517b2/Illustration_Software_Skills_square_-_black.svg" height="100px" alt="">
                        <h5>Software skills</h5>
                        <p class="text-muted">Measure proficiency in essential software, from productivity tools to specialized applications, so you can pick job-ready candidates.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card row-cards p-4 border-0 shadow">
                        <img src="https://images.ctfassets.net/vztl6s0hp3ro/5ugH7HIadqc80eZA8fc8hX/372a0db3d5be4e646b0f449df954026c/Illustration_Typing_Speed_square_-_black.svg" height="100px" alt="">
                        <h5>Typing speed</h5>
                        <p class="text-muted">Assess typing accuracy and speed, crucial for roles requiring fast and efficient data entry or content creation.</p>
                        <button class="btn btn-white border border-dark rounded-pill">See More</button>
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
                            <h6>What are the three components for conducting a talent assessment? <i class="fa fa-sort-desc"></i></h6>
                            <div id="answer1" class="answer mt-3 text-muted">
                                <h6> Skills and Competencies Evaluation: </h6>

                                <p> 1. Skills Assessment: Evaluating the specific skills required for the role or task, which can include technical skills, soft skills, and industry-specific knowledge.
                                    Competency Assessment: Assessing broader competencies such as leadership, problem-solving abilities, communication, teamwork, and adaptability. This can involve behavioral interviews, simulations, or competency-based assessments.
                                    Performance Review:
                                </p>
                                <p>
                                    2. Past Performance Analysis: Reviewing an individual's past performance records, achievements, and feedback from previous roles. This can include performance appraisals, project outcomes, and supervisor evaluations.
                                    Goal Setting and Achievement: Evaluating how well the individual has met past goals and objectives, and their ability to set and achieve future goals.
                                    Potential Assessment:
                                </p>
                                <p>
                                    3. Growth Potential: Assessing the individual’s potential for future growth and development within the organization. This can include their ability to take on more complex tasks, leadership potential, and readiness for promotion.
                                    Learning Agility: Evaluating how quickly and effectively the individual can learn new skills and adapt to changing circumstances. This may involve tests for cognitive ability, adaptability, and openness to new experiences.
                                </p>
                                These components together provide a comprehensive view of an individual's current abilities, past performance, and future potential, helping organizations make informed decisions about hiring, promotions, and development plans.

                            </div>
                        </div>
                        <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer2',this)">
                            <h6>
                                How can I ensure that my talent assessments are fair and unbiased?
                                <i class="fa fa-sort-desc"></i>
                            </h6>
                            <div id="answer2" class="answer mt-3 text-muted">
                                To ensure that talent assessments are fair and unbiased, all of our tests are backed by science and designed to minimize adverse impact. TestGorilla’s assessments are developed by subject matter experts and are rigorously tested for reliability and validity, ensuring they accurately measure the skills they are intended to.

                                Use a combination of different types of tests to get a well-rounded view of the candidate’s abilities and potential. This may include a mix of cognitive ability tests, skill-based and role-related tests, personality tests, and situational judgment tests.

                                Additionally, implement blind hiring practices using the feature that hides candidates’ personal information, reducing the likelihood of unconscious biases affecting the assessment process.

                                Regularly review your assessment data for any potential biases or adverse outcomes across different candidate groups. TestGorilla provides detailed analytics to help you monitor and improve your hiring process to maintain fairness and objectivity. </div>
                        </div>


                        <div class="card bg-white border-0 p-3 mt-3" onclick="toggleAnswer('answer3',this)">
                            <h6>
                                What are the best practices for using talent assessments in HR?
                                <i class="fa fa-sort-desc"></i>
                            </h6>
                            <div id="answer3" class="answer mt-3 text-muted">
                                Define Clear Objectives:

                                <p> Determine what specific skills, competencies, and attributes you want to measure with your assessments. Align these objectives with your organization's goals and job requirements.
                                    Use Validated and Reliable Assessments:</p>

                                <p> Select assessments that are scientifically validated and reliable. Ensure they have been tested for accuracy and consistency in measuring the skills they are intended to evaluate.
                                    Combine Multiple Assessment Types: </p>

                                <p> Use a combination of different assessments to get a well-rounded view of a candidate's abilities and potential. This can include cognitive ability tests, skills tests, personality tests, and situational judgment tests.
                                    Standardize the Process:</p>

                                <p> Implement a standardized assessment process for all candidates. Use the same tests, scoring systems, and evaluation criteria to ensure fairness and consistency.
                                    Train Assessors:</p>

                                <p> Provide training for all individuals involved in the assessment process. Educate them on how to administer and interpret assessments, and how to avoid biases.
                                    Implement Blind Hiring Practices:</p>

                                <p> Use features that anonymize candidate information to reduce the impact of unconscious biases. This can include hiding names, photos, and other personal details during the initial assessment stages.
                                    Regularly Review and Update Assessments:</p>
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
    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>