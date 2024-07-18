<?php
require '../db_config/config.php'; 

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `enquiry`(`name`,`email`,`address`, `mobile`, `message`) VALUES ('$name','$email','$address','$mobile', '$message')";

    // echo $sql;
    // return;
    $result = mysqli_query($conn, $sql);


    if ($result) {
?>
        <script type="text/javascript">
            alert(" Enquiry Form submitted successfully ");
            window.location = "../index.php";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please check your details");
            window.location = "../index.php";
        </script>
<?php
    }
}
?>