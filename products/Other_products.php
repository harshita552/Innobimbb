<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "../body/before_page.php"
    ?>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        .card {
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card-title {
            margin-bottom: 15px;
        }

        .faq-card {
            cursor: pointer;
            transition: box-shadow 0.3s ease;
        }

        .faq-card:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <?php
    require "../component/header.php";
    require "../component/navbar.php";
    ?>

    <div class="container-fluid p-4">
        <h2 class="text-center">Some of Our Products</h2>
    </div>

    <div class="container-fluid bg-light p-5">
        <div class="p-4">
            <h2 class="text-">Lead Management System</h2>

            <div class="row">
                <div class="col-md-6">
                    <p class="mt-4 text- text-muted">This system helps businesses manage and track potential customers or leads throughout the sales process.</p>
                    <p class="text-muted">
                        A lead management system (LMS) is a crucial tool for businesses to efficiently manage and track potential customers or leads throughout the sales process. Here are some key aspects:

                        Lead Capture: LMS helps capture leads from various sources such as websites, social media, email campaigns, and events. It often includes forms and integrations with other platforms to gather lead information.

                        Lead Tracking and Scoring: Leads are tracked through the system, allowing sales teams to prioritize high-quality leads based on predefined criteria or lead scoring models. This helps in focusing efforts on leads most likely to convert.

                        Lead Distribution: Leads can be automatically distributed among sales representatives or teams based on rules set within the system. This ensures timely follow-up and prevents leads from falling through the cracks.

                        <!-- Lead Nurturing: LMS enables automated nurturing workflows, where leads receive targeted content and communications based on their interests and behaviors. This helps move leads through the sales funnel towards a purchasing decision.

                Analytics and Reporting: Provides insights into lead conversion rates, sales performance, and ROI of marketing campaigns. This data helps optimize strategies and improve overall sales effectiveness.

                Integration: Integrates with CRM (Customer Relationship Management) systems, marketing automation tools, and other business software to streamline operations and provide a unified view of customer interactions. -->

                        Security and Compliance: Ensures data security and compliance with regulations like GDPR or CCPA, especially important when handling personal information of leads.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Improved Coordination</h3>
                        <img src="https://www.hubspot.com/hubfs/assets/hubspot.com/web-team/WBZ/Feature%20Pages/lead-management/lead-context-en.png" alt="Improved Coordination">
                        <p class="text-muted">
                            Centralizing leads allows for better coordination between teams.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Enhanced Visibility</h3>
                        <img src="https://www.hubspot.com/hubfs/assets/hubspot.com/web-team/WBZ/Feature%20Pages/lead-management/lead-context-en.png" alt="Enhanced Visibility">
                        <p class="text-muted">
                            Provides a comprehensive view of leads and interactions.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Streamlined Processes</h3>
                        <img src="https://www.hubspot.com/hubfs/assets/hubspot.com/web-team/WBZ/Feature%20Pages/lead-management/lead-context-en.png" alt="Streamlined Processes">
                        <p class="text-muted">
                            Standardizing workflows leads to more efficient processing.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="p-4">

            <div class="row">
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/3153201/pexels-photo-3153201.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="text-">Project Management System</h2>
                    <p class="mt-4 text-muted text-">Essential for organizing, planning, executing, and monitoring projects effectively.</p>
                    <p class="text-muted"> It is designed to facilitate planning, organizing, and managing resources to achieve specific project goals. Here are some key features and benefits of a Project Management System:

                        Key Features:
                        Task Management:

                        Create, assign, and track tasks.
                        Set deadlines and priorities.
                        Monitor task progress and completion.
                        Project Planning:

                        <!-- Define project scope and objectives.
                Create project schedules and timelines.
                Allocate resources and set budgets.
                Collaboration Tools:

                Enable team communication through chat, forums, or comments.
                Share documents and files.
                Facilitate collaboration with stakeholders and team members.
                Resource Management: -->

                        <!-- Allocate and manage resources effectively.
                Track resource availability and utilization.
                Manage team workloads.
                Time Tracking:

                Track time spent on tasks and projects.
                Generate timesheets and reports.
                Monitor project timelines and deadlines.
                Budget and Expense Management: -->

                        Set and manage project budgets.
                        Track expenses and financial performance.
                        Generate financial reports.
                        Reporting and Analytics:

                        Generate project status reports and dashboards.
                        Analyze project performance and metrics.
                        Identify bottlenecks and areas for improvement.
                        Risk Management:

                        Identify and assess project risks.
                        Develop risk mitigation strategies.
                        Monitor and manage risks throughout the project lifecycle.
                        Integration:

                        Integrate with other tools like CRM, ERP, and accounting software.
                        Synchronize data across multiple platforms.
                        Streamline workflows and improve efficiency.
                        Benefits:
                        Improved Efficiency:

                        Automate routine tasks and processes.
                        Reduce manual data entry and errors.
                        Enhance productivity and efficiency.
                        Better Collaboration:

                        Facilitate communication and collaboration among team members.
                        Centralize project information and documents.
                        Improve team coordination and alignment.
                        Enhanced Visibility:

                        Provide real-time insights into project status and performance.
                        Enable better decision-making with accurate data.
                        Track progress and identify issues early.
                    </p>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Task Management</h3>
                        <p class="text-muted">
                            Centralizing tasks improves coordination between teams.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Collaboration Tools</h3>
                        <p class="text-muted">
                            Provides a comprehensive view of project status and interactions.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Scheduling and Calendar</h3>
                        <p class="text-muted">
                            Standardizing workflows leads to more efficient project execution.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="container-fluid bg-light p-5">
        <div class="p-4">
            <h2 class="text-">College Management System</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="mt-4 text-muted text-">Oversees various aspects of college operations to ensure smooth functioning and academic excellence.</p>
                    <p class="text-muted">
                        A College Management System (CMS) is an integrated platform designed to streamline and automate various administrative and academic processes within a college or university. It aims to enhance efficiency, improve communication, and provide better control over the institution's operations. Here are some key features and benefits of a College Management System:

                        Key Features:
                        Student Management:

                        Enroll and manage student records.
                        Track attendance, grades, and performance.
                        Handle admissions and registration processes.
                        Academic Management:

                        Schedule and manage classes, exams, and events.
                        Develop and distribute course materials and syllabi.
                        Track faculty and student academic progress.
                        Faculty Management:

                        Manage faculty profiles and records.
                        Schedule and track faculty workload and assignments.
                        Facilitate communication between faculty and students.
                        Administration Management:

                        Automate administrative tasks such as fee collection, payroll, and HR.
                        Manage infrastructure and facilities.
                        Handle transportation, hostel, and cafeteria management.
                        Library Management:

                        <!-- Maintain an inventory of books, journals, and digital resources.
                        Manage book lending, returns, and fines.
                        Track library usage and member activity. -->
                        Finance Management:

                        <!-- Handle budgeting, accounting, and financial reporting.
                        Manage tuition fees, scholarships, and financial aid.
                        Track expenses and financial performance. -->
                        Communication Tools:

                        Facilitate communication between students, faculty, and administration.
                        Send notifications, announcements, and alerts.
                        Provide a platform for forums, discussions, and messaging.
                        Reporting and Analytics:

                        Generate reports on student performance, attendance, and enrollment.
                        Analyze financial data and institutional performance.
                        Identify trends and areas for improvement.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/1205651/pexels-photo-1205651.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Academic Affairs</h3>
                        <p class="text-muted">
                            Manages academic processes and student performance.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Administrative Operations</h3>
                        <p class="text-muted">
                            Provides a comprehensive view of administrative operations.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center card-title">Student Affairs</h3>
                        <p class="text-muted">
                            Manages student services and support.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="container-fluid bg-light text-dark mt-5">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="pt-5">Frequently Asked Questions (FAQs)</h2>
                </div>

                <div class="col-md-7">
                    <div class="card bg-white border-0 p-3 mt-5 faq-card" onclick="toggleAnswer('answer1',this)">
                        <h6>What is a Learning Management System (LMS)? <i class="fas fa-angle-down"></i></h6>
                        <div id="answer1" class="answer mt-3 text-muted">
                            <p>
                            An LMS is a software application for administering, documenting, tracking, reporting, and delivering educational courses or training programs.
                            </p>
                        </div>
                    </div>
                    <div class="card bg-white border-0 p-3 mt-3 faq-card" onclick="toggleAnswer('answer2',this)">
                        <h6>What is a Project Management System (PMS)? <i class="fas fa-angle-down"></i></h6>
                        <div id="answer2" class="answer mt-3 text-muted">
                            <p>
                            A PMS is a software tool that helps manage projects by planning, organizing, and managing resources to achieve specific project goals.
                            </p>
                        </div>
                    </div>
                    <div class="card bg-white border-0 p-3 mt-3 faq-card" onclick="toggleAnswer('answer3',this)">
                        <h6>What is a College Management System (CMS)? <i class="fas fa-angle-down"></i></h6>
                        <div id="answer3" class="answer mt-3 text-muted">
                            <p>
                            A CMS is an integrated platform designed to streamline and automate various administrative and academic processes within a college or university.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "../component/footer.php";
    ?>
    <!-- Bootstrap JavaScript (optional) -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->

    <script>
        function toggleAnswer(id, element) {
            var answer = document.getElementById(id);
            var cards = document.querySelectorAll('.faq-card');

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
</body>

</html>