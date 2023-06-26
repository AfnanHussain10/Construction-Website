<?php

require "functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.html'; ?>
    <title>Projects</title>
</head>

<style>
    body {
        overflow-x: hidden !important
    }

    .my-container {
        position: relative;
        z-index: 1;
        width: 100%;
        padding: 0 0 !important
    }

    .my-container h1 {
        color: #fff !important;
        text-align: center;
        margin-top: 10%;
        font-size: 6rem !important;
        z-index: 1
    }

    .my-container p {
        text-align: center;
        margin-top: 2%
    }

    @media (max-width:767px) {
        .my-container h1 {
            font-size: 3.5rem !important;
            margin-top: 30%
        }

        .second {
            height: auto;
            position: relative;
            min-height: 500px
        }

        #col-2 {
            height: auto !important;
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto
        }

        #img1,
        #img2 {
            background-size: cover;
            background-position: center;
            overflow: hidden;
            height: 80%;
            width: 100%
        }

        .my-container p {
            font-size: 1.2rem !important;
            padding-top: 5px
        }

        .vision {
            flex-direction: column-reverse !important
        }

        .row {
            flex-direction: column
        }
    }

    @media screen and (max-width:767px) {
        .section-header h2 {
            font-size: 24px
        }

        .section-header p.lead {
            font-size: 18px;
            margin-bottom: 30px
        }

        .p-3 {
            padding-top: 2px
        }

        .section-padding {
            padding: 70px 0
        }
    }

    @media screen and (max-width:767px) {
        .navbar-nav {
            text-align: center
        }

        .visionP {
            padding-top: 2px !important
        }
    }

    @media (max-width:480px) {
        .popup {
            width: 300px
        }
    }

    .third.section-padding {
        padding: 40px 0
    }

    .section-padding {
        padding: 55px 0
    }

    h2 {
        margin-top: 0;
        font-weight: 700;
        font-family: 'Bebas Neue', cursive !important;
        letter-spacing: 7px;
        font-size: 8rem !important;
        text-align: center;
        color: #333
    }

    h3 {
        font-family: 'Bebas Neue', cursive !important;
        color: #333;
        letter-spacing: 2px;
        font-size: 40px !important
    }

    .my-container {
        padding-right: 15px;
        padding-left: 15px
    }

    #col-2 {
        height: 500px;
        padding: 0 0 !important;
        width: auto
    }

    #img1,
    #img2 {
        background-size: cover;
        background-position: center;
        overflow: hidden;
        height: 500px
    }

    #img1 {
        background-image: url(images/pexels-fomstock-com-1115804.jpg)
    }

    #img2 {
        background-image: url(images/r-architecture-TRCJ-87Yoh0-unsplash.jpg)
    }

    .second {
        padding: 0 0;
        height: auto;
        position: relative
    }

    #bg {
        height: 100%;
        position: relative
    }

    #bg h2 {
        position: relative;
        text-align: center;
        top: 35%;
        color: #f9f9f9;
        z-index: 9;
        font-size: 5rem !important;
    }

    .fourth.section-padding {
        padding: 0 0 !important
    }

    .fourth {
        background-color: #e8e8e8 !important
    }

    .my-container-4 {
        height: 500px
    }

    .tab-pane h2 {
        font-size: 28px;
        margin-bottom: 20px;
        text-align: left;
        padding-top: 20px
    }

    .tab-pane p {
        line-height: 1.5;
        color: #4b4b4b
    }

    .custom-tab .nav-item {
        margin-right: 10%
    }

    .custom-tab .nav-link-team {
        font-size: 18px;
        color: #333;
        border: none;
        border-bottom: 2px solid transparent;
        padding: 10px 15px;
        transition: border-color .3s ease-in-out;
        text-decoration: #333;
        pointer-events: auto
    }

    .custom-tab .nav-link-team:focus,
    .custom-tab .nav-link-team:hover {
        border-color: #ecb204
    }

    .custom-tab .nav-link-team.active {
        color: #ecb204;
        border-color: #ecb204
    }

    p {
        font-weight: 600;
        font-family: Montserrat, sans-serif
    }

    .custom-tab a {
        font-weight: 600
    }

    .heading {
        background-image: url(images/pexels-pixabay-262367.jpg);
        height: 400px;
        background-size: cover;
        color: #f9f9f9
    }

    .heading::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 400px;
        background-color: rgba(.5, .5, .5, .5)
    }

    .heading h2 {
        justify-content: center;
        text-align: center;
        padding: 90px 0;
        padding-top: 110px;
        position: relative;
        margin-bottom: 0
    }

    .my-container ul {
        list-style-type: none;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        font-weight: 550
    }

    .my-container li {
        margin: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        transition: all .2s ease-in-out;
        border: 2px solid #ccc
    }

    .my-container li:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, .2);
        cursor: auto
    }

    @media (max-width:767px) {
        .row {
            flex-direction: column
        }

        .bg {
            height: 400px
        }

        .bg2 {
            height: 400px
        }

        h2{
            font-size:5rem !important;
        }

        #bg h2 {
            font-size: 4rem!important;
        }
    }

    .bg {
        height: 400px;
        background-image: url(images/lucas-hoang-GC80BXJf0Yw-unsplash.jpg);
        background-size: cover
    }

    .bg2 {
        height: 400px;
        background-image: url(images/grant-ritchie-FBkrQhnLQoY-unsplash.jpg);
        background-size: cover
    }

    .my-container1,
    .my-container2 {
        max-width: 100%;
        margin: 0 0;
        background: #f8f8f8
    }

    .my-container1 ul,
    .my-container2 ul {
        list-style: none;
        padding: 0;
        margin: 0
    }

    .my-container1 ul li,
    .my-container2 li {
        font-size: 20px;
        margin-bottom: 15px;
        padding-left: 40px;
        position: relative
    }

    .my-container1 ul li:before {
        content: "";
        width: 25px;
        height: 25px;
        background-image: url(images/house_FILL0_wght400_GRAD0_opsz48.svg);
        background-size: contain;
        background-repeat: no-repeat;
        display: inline-block;
        position: absolute;
        left: 0;
        top: 4px
    }

    .my-container2 ul li::before {
        content: "";
        width: 25px;
        height: 25px;
        background-image: url(images/apartment_FILL0_wght400_GRAD0_opsz48.svg);
        background-size: contain;
        background-repeat: no-repeat;
        display: inline-block;
        position: absolute;
        left: 0;
        top: 4px
    }

    .my-container1 h3,
    .my-container2 h3 {
        font-size: 28px;
        color: #f9f9f9;
        margin-bottom: 20px;
        text-align: center;
        padding: 10px;
        margin-bottom: 30px
    }

    .my-container1 .kanal1 {
        background-color: #354f52
    }

    .my-container1 .kanal2 {
        background-color: #2f3e46
    }

    .my-container1 .marla10 {
        background-color: #52796f
    }

    .my-container1 .others {
        background-color: #84a98c
    }

    .my-container2 .others2 {
        background-color: #9a8c98
    }

    .my-container2 .story5 {
        background-color: #22223b
    }

    @media only screen and (max-width:600px) {

        .my-container1 ul li,
        .my-container2 ul li {
            font-size: 16px;
            margin-bottom: 10px
        }

        .my-container1 ul li:before,
        .my-container2 ul li::before {
            width: 20px;
            height: 20px;
            top: 4px
        }

        .my-container1 h3,
        .my-container2 h3 {
            font-size: 24px
        }
    }

    .listspace {
        padding: 0 8px
    }
</style>



<body>
    <nav>
        <?php include('navrbar-user.php') ?>
    </nav>

    <section id="first" class="first section-padding">
        <div class="my-container">

            <div class="heading">
                <h2 style="color:#f9f9f9;">Completed Projects</h2>
            </div>
            <ul style=" font-size:20px; padding-top:2%;">
                <li>Roads</li>
                <li>Infrastucture</li>
                <li>Residential Houses</li>
                <li>Commercial Buildings</li>
                <li>Electrical Projects</li>
                <li>Restoration Projects</li>
                <li>Interior Projects</li>
                <li>Alternate Energy Solution</li>
            </ul>


        </div>
    </section>


    <section id="fourth" class="fourth section-padding">
        <div>
            <div class="row gx-8" style="background-color: #e8e8e8 !important; width:100%!important; margin:0">
                <div class="col" style="padding:0 0 !important">
                    <div class="p-3" id="bg">
                        <h2 style="z-index:9; color: #333;">Residential Houses</h2>
                    </div>
                </div>
                <div class="col" style="padding:0 0!important;">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </section>



    <div class="my-container1">

        <ul class="project-list">
            <h3 class="project-size kanal2">2 Kanal Houses</h3>
            <div class="listspace">
                <li>Ghosa-e-Ahbab 2 Kanal, Lahore</li>
                <li>25 D Model Town 2 Kanal, Lahore</li>
                <li>Mr.Tausif House 2 Kanal, Lahore</li>
            </div>
            <h3 class="project-size kanal1">1 Kanal Houses</h3>
            <div class="listspace">
                <li>Mr.Rehan Model Town 1 Kanal, Lahore</li>
                <li>Mr.Shahid 142-A Model Town 1 Kanal, Lahore</li>
                <li>Mr.Rehman 44-D Model Town 1 Kanal, Lahore</li>
                <li>Mr.Sulman 27-D Town 1 Kanal, Lahore</li>
                <li>Mr.Ijaz A block EME Society 1 Kanal, Lahore</li>
                <li>Mr.Mustaq Khan EME Society 1 Kanal, Lahore</li>
                <li>Mr.Maqbool Ahmad Dhawala EME Society 1 Kanal, Lahore</li>
                <li>Breg.Javed Baloch Phase 5 DHA 1 Kanal, Lahore</li>
            </div>
            <h3 class="project-size marla10">10 Marla Houses</h3>
            <div class="listspace">
                <li>Alfa Society 10 Marla, Lahore</li>
                <li>Mr.Farhan J block 10 Marla, Lahore</li>
            </div>
            <h3 class="project-size others">Other Residential Projects</h3>
            <div class="listspace">
                <li>14-C, Model Town Lahore</li>
                <li>148 Ahmad block, Garden Town, Lahore</li>
                <li>Mr.Farman PIA Society 12 Marla, Lahore</li>
                <li>Usman Haider Raiwand Road 38 Kanal Farm House</li>
            </div>
        </ul>
    </div>

    <section id="fourth" class="fourth section-padding">
        <div>
            <div class="row gx-8" style="background-color: #e8e8e8 !important; width:100%!important; margin:0">

                <div class="col" style="padding:0 0!important;">
                    <div class="bg2"></div>
                </div>

                <div class="col" style="padding:0 0 !important">
                    <div class="p-3" id="bg">
                        <h2 style="z-index:9; color: #333;">Commercial Buildings</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-container2">

        <ul class="project-list">
            <h3 class="project-size story5">5 Story Building</h3>
            <div class="listspace">
                <li>Mr.Azam Khan commercial building 12 Marla, 5 story, Main Ferozpur road, Lahore</li>
                <li>Mr.Rehman Khan commercial building 2 Kanal, 5 story, Lahore</li>
                <li>Mrs.Lubna commercial building 2 Kanal, 5 story, Main Ferozpur road, Lahore</li>
            </div>
            <h3 class="project-size others2">Other Commercial Projects</h3>
            <div class="listspace">
                <li>Opus apartment building 4 Kanal, 7 story, Lahore</li>
                <li>Mr.Amin commercial building, 4 story, Y block DHA, Lahore</li>
                <li>Xinhua Inn commercial building, 3 story, Gulberg, Lahore</li>
                <li>04 Nos commercial building, DHA Phase I, Lahore</li>
            </div>
        </ul>
    </div>




    <?php include('footer.php') ?>

    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php include('chatbotScript.php') ?>

</html>