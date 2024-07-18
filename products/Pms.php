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

    <!-- <div class="container">
        <p class="fs-5">A project management system is a set of tools and methodologies designed to help organizations plan, execute, and track the progress of their projects efficiently.</p>

        <p class="fs-5"> Purpose and Benefits
            Purpose:
            Streamline project planning and execution.
            Enhance team collaboration and communication.
            Monitor project progress and performance.
            Ensure timely completion of projects within budget.
            Benefits:
            Increased Efficiency: Automates routine tasks and reduces manual workload.
            Improved Collaboration: Centralizes communication and file sharing.
            Better Resource Management: Tracks resource allocation and availability.
            Enhanced Visibility: Provides real-time insights into project status.
            Risk Management: Identifies and mitigates potential risks early.
            Higher Accountability: Assigns tasks and deadlines to specific team members.</p><br>

        <p class="fs-5">
            Key Features
            Project Planning:
            Task creation and assignment.
            Milestones and deadlines.
            Gantt charts and timelines.
            Task Management:
            To-do lists and checklists.
            Task prioritization and status tracking.
            Dependencies and critical path analysis.
            Collaboration Tools:
            Team messaging and chat.
            File sharing and document management.
            Discussion forums and comment sections.
            Time Tracking:
            Timesheets and time logs.
            Work hours tracking.
            Time estimation and reporting.
            Resource Management:
            Resource allocation and scheduling.
            Workload balancing.
            Skills and availability tracking.
            Reporting and Analytics:
            Project dashboards and KPIs.
            Customizable reports.
            Budget and expense tracking.
            Integration Capabilities:
            Integration with third-party tools (e.g., CRM, ERP, communication platforms).
            API access for custom integrations.
            Security and Permissions:
            User roles and access controls.
            Data encryption and backup.
            Compliance with industry standards (e.g., GDPR, ISO).</p>

        <p class="fs-5"><br>
            Use Cases
            For Small Businesses:
            Manage client projects and internal tasks.
            Track team performance and client deliverables.
            For Large Enterprises:
            Coordinate cross-departmental projects.
            Optimize resource allocation across multiple projects.
            For Remote Teams:
            Facilitate virtual collaboration and communication.
            Maintain productivity and accountability.</p>
        <p class="fs-5"><br>
            How It Works
            Step-by-Step Guide:
            Project Setup: Create a new project, define its scope, and set goals.
            Task Assignment: Break down the project into tasks and assign them to team members.
            Execution: Team members work on tasks, update their progress, and communicate via the system.
            Monitoring: Use dashboards and reports to track project progress and make adjustments as needed.
            Completion: Review the project outcomes, close the project, and gather feedback for future improvements.</p>
        <p class="fs-5"><br>
            Why Choose Our System?
            User-Friendly Interface: Intuitive design that’s easy to navigate.
            Customizability: Tailor the system to fit your specific needs.
            Scalability: Suitable for projects of all sizes and complexities.
            Reliable Support: Access to 24/7 customer support and training resources.</p>
        <p class="fs-5"><br>
            Testimonials and Case Studies
            Customer Stories: Share success stories from satisfied clients.
            Case Studies: Provide detailed examples of how your system has helped organizations achieve their project goals.</p>
    </div> -->

    <div class="container-fluid">
        <div class="container banner-container">
            <img src="https://adortraffic.com/wp-content/uploads/2023/10/CC-1.jpeg" height="300px" alt="Banner Image" class="banner-image">
            <div class="banner-overlay">
                <h1 class="mx-5">Project Management System</h1>
                <!-- <p>Additional text or description</p> -->
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <img src="https://adortraffic.com/wp-content/uploads/2023/10/CC-1.jpeg" height="500px" width="350px" alt="Banner Image" style=" border-radius: 20px;">
                </div>

                <div class="col-md-8">
                    <img src="https://adortraffic.com/wp-content/uploads/2023/10/CC-1.jpeg" alt="Banner Image" height="250px" class="banner-image">
                    <h1 class="text-dark mt-3">Project Management System</h1>
                    <!-- <div class="row"> -->
                    <div class=" text-left text-muted">
                        A project management system is a set of tools and methodologies designed to help organizations plan, execute, and track the progress of their projects efficiently.
                        <br><br>
                        <p> Purpose:
                            Streamline project planning and execution.
                            Enhance team collaboration and communication.
                            Monitor project progress and performance.
                            Ensure timely completion of projects within budget.</p>
                        
                        <p> Benefits:
                            Increased Efficiency: Automates routine tasks and reduces manual workload.
                            Improved Collaboration: Centralizes communication and file sharing.
                            Better Resource Management: Tracks resource allocation and availability.
                            Enhanced Visibility: Provides real-time insights into project status.</p>
                    </div>
                    <!-- <div class="col-md-6 text-muted">
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>

        </div>
        <div class="container mt-5">
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
    </div>

    <div class="container p-5 mt-3">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Benefits of Project Management System
                </h2>
                <div class="row">
                    <div class="col-md-12 fs-5 mt-2">
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Improved Planning and Scheduling</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Better Collaboration and Communication</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Efficient Task Management</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Improved Organization and Planning</span><br>
                    </div>
                    <!-- <div class="col-md-6">
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Improved Planning and Scheduling</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Better Collaboration and Communication</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Efficient Task Management</span><br>
                        <i class="fa fa-check-circle text-danger"></i>&nbsp;&nbsp;<span class="">Improved Organization and Planning</span><br>
                    </div> -->
                </div>

            </div>

            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&w=600" class="rounded-3" alt="">
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
                        <h6>
                            What are the key features of a project management system? </h6>
                        <i class="fa fa-sort-desc"></i>
                    </div>

                    <div class="card bg-white border-0 p-3 mt-3">
                        <h6>
                            How does task management work in a project management system?</h6>
                        <i class="fa fa-sort-desc"></i>
                    </div>

                    <div class="card bg-white border-0 p-3 mt-3">
                        <h6>
                            Can a project management system integrate with other tools we use?
                        </h6>
                        <i class="fa fa-sort-desc"></i>
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