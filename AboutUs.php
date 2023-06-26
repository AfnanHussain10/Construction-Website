<?php

require "functions.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd"> 

<head>
    <?php include 'header.html'; ?>
    <title>About Us</title>

</head>
<style>
    body {
        background: #f9f9f9;
        overflow-x: hidden;
    }

    .my-container {
        position: relative;
        z-index: 1
    }

    .my-container h1 {
        color: #fff !important;
        text-align: center;
        margin-top: 10%;
        font-size: 7rem !important;
        z-index: 1
    }

    .my-container p {
        text-align: center;
        margin-top: 2%
    }

    @media (max-width:767px) {
        .my-container h1 {
            font-size: 4rem !important;
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
            font-size: 1rem !important;
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

    .fifth.section-padding {
        padding: 40px 10px
    }

    .section-padding {
        padding: 70px 0
    }

    h2 {
        margin-top: 0;
        font-weight: 700;
        font-family: 'Bebas Neue', cursive !important;
        letter-spacing: 7px;
        font-size: 100px !important;
        text-align: center;
        color: #333
    }

    h3 {
        font-family: 'Bebas Neue', cursive !important;
        color: #333;
        letter-spacing: 2px;
        font-size: 40px !important;
        padding: 0 1rem;
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
        background-image: url(images/jeriden-villegas-VLPUm5wP5Z0-unsplash.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-attachment: fixed;
        overflow: hidden;
        backdrop-filter: brightness(18%);
        height: 100%;
        position: relative
    }

    #bg h2 {
        position: relative;
        text-align: center;
        top: 38%;
        color: #f9f9f9;
        z-index: 9
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

    #bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(.5, .5, .5, .5)
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
        font-family: Montserrat, sans-serif
    }

    .custom-tab a {
        font-weight: 600
    }
</style>


<body>

    <nav>
        <?php include('navrbar-user.php') ?>
    </nav>
    <section id="front" class="front section-padding" style=" background-color: rgb(var(--bs-dark-rgb));">
        <div class="my-container">
            <div class="row gx-8">
                <div class="col">
                    <div class="p-3">
                        <h2 style="color:#f8f8f8">What We<br> Do?</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3" style="color:#f8f8f8; padding-top:3.5rem !important;">
                        Real Enterprises is a premier construction firm that specializes in providing high-quality construction
                        services to clients in the commercial and residential sectors. Our team of skilled professionals has extensive experience in the design, development,
                        and construction of a wide range of projects, including commercial buildings, houses, roads, overhead tanks, sewerage works, water supply systems,
                        and restoration of historical buildings. We are committed to delivering projects on time, within budget, and to the highest quality standards</div>
                </div>
            </div>
        </div>
    </section>

    <section id="second" class="second section-padding">

        <div class="row gx-0">
            <div class="col" id="col-2">
                <div class="p-3" id="img1">
                </div>
            </div>

            <div class="col" id="col-2">
                <div class="p-3" id="img2">
                </div>
            </div>
        </div>

    </section>

    <section id="third" class="third section-padding">
        <div class="my-container">
            <div class="row gx-8 vision">
                <div class="col">
                    <div class="visionP" style="font-style:italic; text-align:center; padding-top:3.5rem;">
                        <p>"Development and deployment of world class services for economic and
                            human advancement. To emerge as the market leader in providing services related construction
                            and development."</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3" style="padding-top:3.5rem;">
                        <h2>Our Vision</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fourth" class="fourth section-padding">
        <div>
            <div class="row gx-8" style="background-color: #e8e8e8 !important;">
                <div class="col" style="padding-right:0px!important">
                    <div class="p-3" id="bg">
                        <h2 style="z-index:9; color: #f9f9f9;">Core Values</h2>
                    </div>
                </div>
                <div class="col" style="padding-left:0px!important">
                    <div class="p-3">

                        <nav class="custom-tab nav" role="tablist" id="nav-tab">
                            <a href="#nav-one" class="nav-item nav-link-team active" data-toggle="tab" role="tab" aria-controls="nav-one" aria-selected="false">Customer Focus</a>
                            <a href="#nav-two" class="nav-item nav-link-team" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Passion</a>
                            <a href="#nav-three" class="nav-item nav-link-team" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Integrity</a>
                        </nav>
                        <br><br>
                        <div class="tab-content" id="nav-tabContent" style="padding-left:5px; padding-bottom:10px;">
                            <div class="tab-pane fade active show" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">


                                <h3 class="line-bottom">Customer Focus</h3>

                                <div class="p-3">At our core, we believe that our customers are the lifeblood of our business. We strive to understand their unique needs,
                                    concerns, and aspirations so that we can provide them with the best possible service and solutions.
                                    Our commitment to customer focus extends beyond just delivering quality products and services.
                                    We prioritize building strong, lasting relationships with our customers based on trust, respect, and open communication.
                                    Our team listens carefully to our customers' feedback, suggestions, and concerns, and we continuously work to improve our products
                                    and services to better meet their needs. We view our customers as partners and are dedicated to providing them with exceptional support
                                    throughout every stage of their journey with us.
                                </div>


                            </div>
                            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                                <h3 class="line-bottom">Passion</h3>
                                <div class="p-3">The team is driven by a passion for their work, taking pride in every project they undertake. With an enthusiastic and creative approach, they
                                    tackle each challenge with a desire to learn and improve their skills. Their commitment to constant learning and seeking new challenges allows them
                                    to stay on top of the latest industry trends and technology, ensuring they deliver exceptional results to their clients.</div>

                            </div>
                            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                                <h3 class="line-bottom">Integrity</h3>
                                <div class="p-3">We at Real Enterprises believe in conducting ourselves with the utmost integrity and professionalism. Our team of experts are committed to upholding the
                                    highest ethical standards in all of our interactions. We value honesty, transparency, and accountability, and strive to ensure that these core values are reflected in everything we do.
                                    Our commitment to professionalism is evident in our approach to every project we undertake. We take pride in our work and approach each task with enthusiasm and creativity. We are constantly learning
                                    and seeking new challenges to improve our skills and knowledge, ensuring that we are always able to provide the best possible service to our clients.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="fifth" class="fifth section-padding">
        <div class="my-container">

            <h2>Our Mission</h2>
            <div style="padding-top: 5px!important; font-style: italic;" class="p-3 text-center fw-bold fst-italic">"Our mission at The Real Enterprises is to bring the benefits of our development efforts to society by transforming them into an exciting business
                opportunity. We aim to establish a self-sustaining and wealth-creating operation that not only benefits our stakeholders but also contributes to the economic and social development of the communities we serve.
                Through innovation, collaboration, and responsible business practices, we strive to create long-term value for our customers, employees, shareholders, and society as a whole."
</div>


        </div>
    </section>

    <?php include('footer.php') ?>
    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>

</body>

<script>
    const tabLinks = document.querySelectorAll('.nav-link-team');
    const tabContents = document.querySelectorAll('.tab-pane');

    tabLinks.forEach((tabLink) => {
        tabLink.addEventListener('click', (event) => {
            event.preventDefault();

            // Remove active class from all tab links and contents
            tabLinks.forEach((link) => link.classList.remove('active'));
            tabContents.forEach((content) => content.classList.remove('active', 'show'));

            // Add active class to clicked tab link and its corresponding content
            const targetId = event.target.getAttribute('href');
            const targetContent = document.querySelector(targetId);
            event.target.classList.add('active');
            targetContent.classList.add('active', 'show');
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php include('chatbotScript.php') ?>

</html>