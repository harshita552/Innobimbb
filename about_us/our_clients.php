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

        .img-content{
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
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="300px" alt="Banner Image" class="banner-image">
                <div class="banner-overlay">
                    <h1 class="mx-5  text-center">Our Clients</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-3">
        <div class="card p-4 bg-light">

       
        <div class="row p-4">
            <div class="col-md-3">
                <div class="card border-0 p-3 shadow">
                    <img src="https://assets.akasaair.com/f/159922/179x46/5114cb7302/akasa-home-logo.svg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRUhG51bhJItTxRlWSbKPPB3nEjhUBefOd1yZ7SlQvMXDhd1NHj" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img src="https://symphonylimited.com/static/media/logo.79a9c99154e53db17057.png" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSnIrS2uIy3qRam5U2OKbbZ6LzLNx9XbD7Q6V51prZ3aNcUSnDi" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-3 p-4">
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRA5cUacbEFM4TVhEbsRNeLlQmypdNmY98MCRkMX3skphTS_C0W" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRyHczRk64A6DnQCvXCq7xl5B9Up-bSEMdLvf-SkGUqScbC2uJg" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSnOabpqTuN8oxzBKGmggihLtwOnH7mUZuZZmeq1lnGRVLigHK0" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVS4UpeVVXtGMB74zCtuDLb29vOqz6ezQ-YWyG2Z_alNyNstVD" alt="">
                </div>
            </div>
        </div>
        
        <div class="row mt-3 p-3">
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQldFp3kycGPNMRMe2k055wygJ_UR8vws8jWOXUPRyfpW6rSEnP" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzG_y7YMf8MSjArEpO27Nf__Xs06vlyFfiwVu5zyf2ItAz_2Am" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSyWnEqM_LxM0K1uk8DLKs4LYWvp9MD68TXSKzSwEAXInNhPN4_" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0aISXXV7hWZMDQfD7lVOPZKQ798C-KNZiGo139l3_e_89ccXd" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-3 p-4">
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSra5LpDV_qdDX_S9k8sUf3IFGwxISfGpGdWWrb3qOrUpSJI8YE" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcThg0CjplcXMmtUKXt-4Aw0oeMGEbh2BuUJ4n7T0fDMwi3B35ME" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ7ckL9VCzT6VFpghCV_IHslAM5q91N3Ea1HUP-vfKjc1nDnwX_" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVNFRQjP0Z2giCgihmcRAWKYJfunlpI394afapvrmSrVyRT4mK" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-3 p-4">
            <div class="col-md-3">
                <div class="card border-0 p- shadow">
                    <img class="img-content" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSMXwdZP1BaFc44td4U4i2lVfV0LqpCUhtwqNbwAaXrU9a51r54" alt="">
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