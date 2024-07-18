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
                    <h1 class="p-4 text-">E-commerce
                        Shopping Web</h1>
                    <!-- <hr class="bg-dark" width="45%" style=" height: 1.5px;"> -->
                    <p class="p-4 text-muted">We understand the dynamic and ever-evolving nature of the IT industry.
                        That's why we offer a comprehensive range of services designed to meet
                        your unique needs and empower your business to thrive in today's digital
                        landscape. Whether you're a small startup or a large enterprise, we have
                        the expertise and resources to deliver tailored solutions that drive growth,
                        efficiency, and success.</p>
                </div>
            </div>
            <!-- <div class="conatainer"> -->
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <img height="450px" width="280px" src="https://images.pexels.com/photos/3888151/pexels-photo-3888151.jpeg?auto=compress&cs=tinysrgb&w=600" style=" border-radius: 20px;" alt="">
                    </div>
                    <div class="col-md-6 px-4">
                        <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=600" height="250px" width="250px" style=" border-radius: 20px;" alt="">

                        <img src="https://images.pexels.com/photos/4158/apple-iphone-smartphone-desk.jpg?auto=compress&cs=tinysrgb&w=600" class="mt-3" height="180px" width="250px" style=" border-radius: 20px;" alt="">
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <div class="container-fluid bg-light p-4">
        <h2 class="text-center fw-bold"><img class="mx-2" height="60px" width="auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA9gIXjRxY5u9Uld9UanshkCzQXZA-K_hcMDLaD2kxJOAgALo2" alt=""> Project Overview</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-5 p-5 border-0 shadow">
                    <h3 class="text- fw-bold">
                        E-commerce Website with EMI Feature
                    </h3>
                    <p class="fs-5 text-muted mt-3">The E-commerce Website project aims to develop an all-inclusive online
                        shopping platform with an added EMI (equivalent Monthly Installment)
                        feature, enabling customers to shop for their desired products and pay in
                        installments over time. This dynamic and user-friendly website will cater to a
                        diverse customer base, offering a wide range of products across various
                        categories and providing a seamless shopping experience.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white py-5">
            <div class="container">
                <h2 class="section-title">Project Goals</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Intuitive Interface</h5>
                            <p class="text-muted">Develop an easy-to-navigate and visually appealing user interface to enhance user engagement and facilitate product discovery.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Comprehensive Product Catalogue</h5>
                            <p class="text-muted">Build a robust product catalogue with detailed descriptions, high-quality images, and accurate pricing for a wide range of products.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Smooth Shopping Process</h5>
                            <p class="text-muted">Implement a user-friendly shopping cart and checkout system, including EMI options, to enable quick and secure transactions.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Personalization and Convenience</h5>
                            <p class="text-muted">Offer features such as wishlists, order tracking, and user accounts to provide personalised shopping experiences.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Secure EMI Integration</h5>
                            <p class="text-muted">Integrate reliable and secure EMI options to enable customers to make purchases with convenient installment plans.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card shadow-sm">
                            <h5>Admin Control Panel</h5>
                            <p class="text-muted">Create a comprehensive admin panel with robust functionalities to manage products, orders, and customer data efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <h2 class="section-title"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQmX0yS0cyUjd-WXKfqlmPqPtczlXUp7Zrm0qD4gEwofhz1yo_L" alt="Features Icon" height="50px"> Features List of <span class="text-danger">&nbsp;Admin</span> & <span class="text-primary">Customer</span></h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="text-center fw-bold">Admin Panel</h3>
                            <ul class="list-unstyled text-muted mt-4">
                                <li class="mb-3"><strong>Login:</strong> Secure authentication and access to privileged features and data.</li>
                                <li class="mb-3"><strong>Product Management:</strong> Add, edit, and delete products from the catalogue.</li>
                                <li class="mb-3"><strong>Inventory Management:</strong> Monitor and manage inventory levels.</li>
                                <li class="mb-3"><strong>Order Management:</strong> Manage customer orders, order processing, and shipment tracking.</li>
                                <li class="mb-3"><strong>Customer Management:</strong> Manage customer accounts, inquiries, and reviews.</li>
                                <li class="mb-3"><strong>Category Management:</strong> Manage product categories such as Home Comfort, Home Essentials, etc.</li>
                                <li class="mb-3"><strong>Discount Engine:</strong> Set up automated discounts or sale prices.</li>
                                <li class="mb-3"><strong>Payment Gateway Integration:</strong> Manage payment processing, refunds, and secure transactions.</li>
                                <li class="mb-3"><strong>Return and Refund Management:</strong> Manage return requests and process refunds.</li>
                                <li class="mb-3"><strong>Manage Static Pages:</strong> Create, modify, or delete content on static pages like About Us and FAQs.</li>
                                <li class="mb-3"><strong>Logout:</strong> Secure termination of admin sessions.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <h3 class="text-center fw-bold">Customer Panel</h3>
                            <ul class="list-unstyled text-muted mt-4">
                                <li class="mb-3"><strong>User Registration/Sign in:</strong> Create an account and access personalised profiles.</li>
                                <li class="mb-3"><strong>User-friendly Product Category:</strong> Easily find products by selecting specific categories.</li>
                                <li class="mb-3"><strong>Product Description:</strong> View detailed information about products.</li>
                                <li class="mb-3"><strong>Product Filters:</strong> Filter products by colours, sizes, types, and brands.</li>
                                <li class="mb-3"><strong>Product Gallery:</strong> View products from different angles.</li>
                                <li class="mb-3"><strong>Shopping Cart:</strong> Add products for purchase and modify quantities.</li>
                                <li class="mb-3"><strong>Buy Now:</strong> Purchase products directly with a single click.</li>
                                <li class="mb-3"><strong>EMI:</strong> Buy products on EMI for convenient installment payments.</li>
                                <li class="mb-3"><strong>Secure Payment Gateways:</strong> Complete payments using secure options.</li>
                                <li class="mb-3"><strong>Order Tracking:</strong> Track the status of orders in real-time.</li>
                                <li class="mb-3"><strong>Wishlist/Favourites:</strong> Save products for future reference.</li>
                                <li class="mb-3"><strong>Reviews and Ratings:</strong> Provide feedback and ratings for products.</li>
                                <li class="mb-3"><strong>Customer Support:</strong> Access support through live chat, email, or phone.</li>
                                <li class="mb-3"><strong>FAQs:</strong> Find answers to common questions.</li>
                                <li class="mb-3"><strong>Return and Exchange:</strong> Initiate return or exchange requests.</li>
                                <li class="mb-3"><strong>Logout:</strong> Securely end the session.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-5">
            <h2 class="text-center fw-bold">
                <img height="50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLq23y0GiR0xtleLDNyMylbmwKtLrA9NgfzEAit2Kx6BsLQKUO" alt="">
                USP List
            </h2>
            <div class="card shadow-sm border-0 bg-light p-5 text-muted">
                <ul class="fs-5" style="list-style: decimal;">
                    <li> Payment Gateway Integration (According to the African Market)</li>
                    <li>Third Party Logistic Integration (That will complete the process of delivery from
                        the warehouse directly to the customer).
                    </li>
                    <li>Language - English</li>
                    <li>Currencies will be in four different categories: Africa, Nigeria, Uganda, and
                        Ghana.</li>
                </ul>
            </div>
        </div>

        <div class="container-fluid p-5">
            <h2 class="text-center fw-bold">
                <img height="50px" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSDsDK8fV20Vr1hoDTTrsQOYFBIdp-hsO1gZhB8PSm_ZV0k7iF5" alt="">
                Conclusion
            </h2>
            <div class="card shadow-sm border-0 bg-light p-5 text-muted">
                <p class="fs-5">The E-commerce Website project aims to deliver a feature-rich and user-friendly
                    platform that ensures an enjoyable and secure online shopping experience for
                    customers. By incorporating the EMI feature, we strive to provide customers with
                    the flexibility to purchase desired products using convenient installment plans. By
                    adhering to industry best practices and leveraging cutting-edge technologies, we are
                    committed to building a successful E-commerce website that meets the needs and
                    expectations of both users and the business.</p>
            </div>
        </div>
    </div>
    <?php
    require "../component/footer.php";
    ?>
</body>

</html>