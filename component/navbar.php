<style>
  .navbar-nav .nav-item:hover>.nav-link {
    background-color: red !important;
    /* Red background */
    color: white !important;
    /* White text color */
    padding: 8px 15px;
    /* Padding for the box effect */
    border-radius: 0.5px;
    /* Rounded corners */
    margin-top: 0;
    /* Remove top margin */
  }

  /* Apply active-link styles on hover for dropdown items */
  .navbar-nav .nav-item:hover .dropdown-item:hover {
    background-color: red !important;
    /* Red background */
    color: white !important;
    /* White text color */
    padding: 8px 15px;
    /* Padding for the box effect */
    border-radius: 0.5px;
    /* Rounded corners */
    margin-top: 0;
    /* Remove top margin */
  }

  /* Custom styles to show dropdown on hover */
  .navbar-nav .nav-item:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    /* Ensure proper alignment */
  }

  /* Prevent dropdown menu from closing when hovering over dropdown items */
  .dropdown-menu:hover {
    display: block;
  }

  .active-brand {
    background-color: red !important;
    /* Red background */
    color: white !important;
    /* White text color */
    padding: 8px 15px;
    /*Padding for the box effect */
    border-radius: 0.5px;
    margin-top: 0;
    /* Optional: Rounded corners */
  }
</style>

<div class="container-fluid bg-white border border-muted fixed" style="margin: 0;">
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link navbar-brand active-brand" href="../index.php">Home</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            About Us
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../about_us/profile.php">Company Profile</a>
            <a class="dropdown-item" href="../about_us/services.php">Our Services</a>
            <a class="dropdown-item" href="../about_us/our_clients.php">Our Clients</a>
          </div>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Products
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../products/Nms.php">Network Management System-(NMS)</a>
            <a class="dropdown-item" href="../products/Pms.php"> Project Management System-(PMS)</a>
            <a class="dropdown-item" href="../products/Vmd.php">Video Merchandising Display-(VMD)</a>
            <a class="dropdown-item" href="../products/Vms.php">Video Management Systems-(VMS)</a>
            <a class="dropdown-item" href="../products/Atcs.php">Advance Traffic Control System-(ATCS)</a>
            <a class="dropdown-item" href="../products/Iot.php"> Internet of Things (IoT) Solutions</a>
            <a class="dropdown-item" href="../products/Other_products.php">Other Products</a>
            <a class="dropdown-item" href="../products/Exam.php">Assessment</a>
          </div>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Business
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../business/e_commerce.php">E-Commerce</a>
            <a class="dropdown-item" href="../business/advertisement.php">Advertisement</a>
            <!-- <a class="dropdown-item" href="#">Hydrogen Power Source</a>
            <a class="dropdown-item" href="#">Power &amp; Surveillance</a>
            <a class="dropdown-item" href="#">Ador Defence</a>
            <a class="dropdown-item" href="#">Software Innovation</a> -->
          </div>
        </li>

        <!-- <li class="nav-item mx-2">
          <a class="nav-link" href="#">E-Commerce</a>
        </li> -->

        <li class="nav-item mx-2">
          <a class="nav-link" href="#">News &#038; Updates</a>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item mt-2 mx-1">
          <a href="">
            <i aria-hidden="true" class="fa fa-youtube-play text-danger mx-2"></i>
          </a>
        </li>
        <li class="nav-item mt-2 mx-1">
          <a href="">
            <i aria-hidden="true" class="fa fa-linkedin-square text-danger mx-2"></i>
          </a>
        </li>

        <li class="nav-item mt-2 mx-1">
          <a href="">
            <i aria-hidden="true" class="fa fa-th text-danger mx-2"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.navbar-nav .nav-link').click(function() {
      $('.navbar-nav .nav-link').removeClass('active-link'); // Remove class from all links
      $(this).addClass('active-link'); // Add class to the clicked link
    });
  });
</script>