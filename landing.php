<?php
require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'header.html' ?>
    <title>Real Enterprises</title>
    <link rel="stylesheet" href="stylelanding.css">


</head>

<body>
    <!-- Add a spinner -->

    <div class="loader-overlay">

        <div class="spinner"></div>
    </div>
    <!-- rest of the website content goes here -->


    <nav>
        <?php include('navrbar-user.php') ?>
    </nav>

    <section id="front" class="front section-padding">
        <div class="container-front">
            <h1 style="font-size: 48px;">Welcome to <span class="text-warning">Real</span> Enterprises</h1>
            <p style="font-size: 24px;">We build structures that stand the test of time.</p>
        </div>
    </section>

    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="images/pexels-ave-calvar-martinez-4705093.jpg" alt="About us image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="about-text text-center text-lg-start">
                        <h2 class="section-title mb-4">About Us</h2>
                        <p class="section-description mb-4">Our team of experts is dedicated to delivering the highest quality services to our clients. From planning and design to construction and maintenance, we ensure that every aspect of your project is executed with precision and care. Trust us to bring your vision to life.</p>
                        <a href="AboutUs.php" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="services" class="services section-padding">
  <div class="services-container">
    <div class="row">
      <div class="col-12">
        <div class="section-header text-center pb-3">
          <h2>Our Services</h2>
          <p class="p_of_services">We provide high-quality, sustainable, and reliable services to our clients.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service">
          <div class="service-image"></div>
          <div class="service-description">
            <p class="text-title">Builders</p>
            <p class="text-body">Our experienced builders bring your vision to life with their expertise in constructing new buildings, renovating existing structures, and handling all aspects of construction, from design to completion.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service">
          <div class="service-image"></div>
          <div class="service-description">
            <p class="text-title">Marketing Analysts</p>
            <p class="text-body">Our marketing analysts specialize in researching market trends, analyzing consumer behavior, and creating effective marketing strategies for our clients. With their expertise, they help us deliver construction projects that meet and exceed our clients' expectations.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="service">
          <div class="service-image"></div>
          <div class="service-description">
            <p class="text-title">Developers</p>
            <p class="text-body">Our developers use their technical skills to design and develop innovative solutions for our clients' projects. They work on a range of construction-related software and project management software to help us deliver efficient and effective solutions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <section id="team" class="team section-padding">
        <div class="site-section">
            <div class="container-team">
                <div class="row mb-5">
                    <div class="col-md-8">
                        <h2 class="line-bottom" style="font-size: 5.2em!important;">Construction Industry Leaders</h2>
                    </div>
                    <div class="col-md-4 text-right">
                        <nav class="custom-tab nav" role="tablist" id="nav-tab">
                            <a href="#nav-one" class="nav-item nav-link-team active" data-toggle="tab" role="tab" aria-controls="nav-one" aria-selected="false">Technology</a>
                            <a href="#nav-two" class="nav-item nav-link-team" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Quality</a>
                            <a href="#nav-three" class="nav-item nav-link-team" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="true">Staff</a>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/pexels-ivan-samkov-4491918.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h3 class="line-bottom">Technology</h3>
                                        <p>We leverage technology to deliver exceptional results. From advanced materials and tools to innovative software and equipment, we embrace innovation to offer fast, safe, and efficient construction services. By using BIM, drones, and augmented/virtual reality, we create accurate digital models, survey sites, monitor progress, and enhance design. Our technology enables us to deliver sustainable structures that exceed expectations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/pexels-anastasia-shuraeva-6232443.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h3 class="line-bottom">Quality</h3>
                                        <p>We at Real Enterprises, are committed to delivering the highest quality construction services. Our experienced professionals use only the best materials and tools and implement rigorous quality control processes to ensure precision and care in every aspect of the project. We regularly inspect and test all materials and equipment to meet our strict quality standards. At our construction company, quality is not just a goal, but a responsibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="images/pexels-john-macdonald-7976911.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h3 class="line-bottom">Staff</h3>
                                        <p>Our experienced professionals are our greatest asset. They undergo extensive training and collaborate to deliver exceptional service to our clients. We promote from within and provide career advancement opportunities. At our construction company, our team's dedication and expertise is reflected in the exceptional quality of our work.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-testimonial section-padding">
        <div class="container-testimonial">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Testimonials</h2>
                    <hr style="color: #f9f9f9 !important;">
                    <h3 style="text-align:center;">Explore customers experience</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>"I had an amazing experience working with this construction company. From start to finish, the team was professional, knowledgeable, and efficient. They went above and beyond to ensure that our project was completed on time and within budget. I highly recommend them to anyone in need of quality construction services."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Numair</h4>
                            <p class="text-muted">Employee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>"We recently hired this construction company to build our new office space and they did an incredible job. The attention to detail and craftsmanship that went into every aspect of the project was impressive. The team was easy to work with and communication was excellent throughout the entire process. We are thrilled with the final result."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Dilawaiz</h4>
                            <p class="text-muted">Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-item">
                        <div class="testimonial-text">
                            <p>"I couldn't be happier with the work that Real Enterprises did on my home renovation. The team was professional, reliable, and skilled, and they transformed my outdated space into a modern and functional living area. I highly recommend them for anyone looking for a top-quality construction company."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Moiz</h4>
                            <p class="text-muted">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr style="color: #f9f9f9 !important;">
                    <h3 style="text-align:center;">Write a Review</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form class="form2" method="POST" action="insert_review.php">
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control required" name="review-name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control required" name="review-email" required>
                        </div>
                        <div class="form-group msg">
                            <textarea class="form-control required" placeholder="Message" name="review-message" rows="2" required></textarea>
                        </div>
                        <button type="submit" class="submit2">Submit Review</button>
                    </form>
                    <div id="alert2" class="alert2" role="alert"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header pb-5">
                        <h2>Contact Us</h2>
                        <p class="lead">We'd love to hear from you! Please fill out the form to get a quotation from us. Or contact through:</p>
                        <ul class="list-unstyled" style="font-weight:600; font-size: large;">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> +92-300-9446971</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg> rajashakeel321@yahoo.com</li>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-wrapper-contact">
                        <div class="popup">
                            <form class="form" method="POST" action="send-email.php">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 34" height="34" width="34">
                                        <path stroke-linejoin="round" stroke-width="2.5" stroke="#115DFC" d="M7.08385 9.91666L5.3572 11.0677C4.11945 11.8929 3.50056 12.3055 3.16517 12.9347C2.82977 13.564 2.83226 14.3035 2.83722 15.7825C2.84322 17.5631 2.85976 19.3774 2.90559 21.2133C3.01431 25.569 3.06868 27.7468 4.67008 29.3482C6.27148 30.9498 8.47873 31.0049 12.8932 31.1152C15.6396 31.1838 18.3616 31.1838 21.1078 31.1152C25.5224 31.0049 27.7296 30.9498 29.331 29.3482C30.9324 27.7468 30.9868 25.569 31.0954 21.2133C31.1413 19.3774 31.1578 17.5631 31.1639 15.7825C31.1688 14.3035 31.1712 13.564 30.8359 12.9347C30.5004 12.3055 29.8816 11.8929 28.6437 11.0677L26.9171 9.91666"></path>
                                        <path stroke-linejoin="round" stroke-width="2.5" stroke="#115DFC" d="M2.83331 14.1667L12.6268 20.0427C14.7574 21.3211 15.8227 21.9603 17 21.9603C18.1772 21.9603 19.2426 21.3211 21.3732 20.0427L31.1666 14.1667"></path>
                                        <path stroke-width="2.5" stroke="#115DFC" d="M7.08331 17V8.50001C7.08331 5.82872 7.08331 4.49307 7.91318 3.66321C8.74304 2.83334 10.0787 2.83334 12.75 2.83334H21.25C23.9212 2.83334 25.2569 2.83334 26.0868 3.66321C26.9166 4.49307 26.9166 5.82872 26.9166 8.50001V17"></path>
                                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#115DFC" d="M14.1667 14.1667H19.8334M14.1667 8.5H19.8334"></path>
                                    </svg>
                                </div>
                                <div class="note">
                                    <label class="title">GET QUOTATION</label>
                                </div>
                                <input placeholder="Name" title="Enter your name" name="name" type="text" class="input_field" id="name">
                                <input placeholder="Email" title="Enter your e-mail" name="email" type="email" class="input_field" id="email">
                                <textarea placeholder="Message" title="Enter your message" name="message" type="text" class="input_field" rows="3" id="message"></textarea>
                                <button type="submit" class="submit">Submit</button>
                            </form>
                            <div id="alert" class="alert" role="alert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>
    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:9999;"></iframe>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    window.addEventListener('scroll', () => {
        const aboutSection = document.querySelector('#about');
        const aboutSectionPosition = aboutSection.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.05;
        if (aboutSectionPosition < screenPosition) {
            aboutSection.classList.add('show');
        } else {
            aboutSection.classList.remove('show');
        }
    });

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

    function handleFormSubmit(form, alert) {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]'); // select the submit button
            submitButton.disabled = true; // disable the submit button
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });
            if (response.ok) {
                alert.classList.add('alert-success');
                alert.innerText = 'Message sent successfully!';
                alert.classList.add('show');
            } else {
                alert.classList.add('alert-danger');
                alert.innerText = 'Message could not be sent. Please try again later.';
                alert.classList.add('show');
            }
            setTimeout(() => {
                alert.classList.remove('show');
                submitButton.disabled = false; // re-enable the submit button
            }, 10000);
            form.reset();
        });
    }


    const form1 = document.querySelector('.form');
    const alert1 = document.querySelector('#alert');
    handleFormSubmit(form1, alert1);

    const form2 = document.querySelector('.form2');
    const alert2 = document.querySelector('#alert2');
    handleFormSubmit(form2, alert2);

    window.addEventListener('load', function() {
        // Hide the spinner and loading overlay
        document.getElementById('spinner').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    });

    function loadPage(url) {
        // Show the spinner and loading overlay
        document.getElementById('spinner').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';

        // use AJAX to load the content of the page
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Hide the spinner and loading overlay
                document.getElementById('spinner').style.display = 'none';
                document.getElementById('overlay').style.display = 'none';

                // Replace the content of the page
                document.body.innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.querySelector(".loader-overlay");
        const body = document.querySelector("body");

        loader.classList.add("show");


        window.addEventListener("load", function() {
            loader.classList.remove("show");

        });
    });
</script>
<?php include('chatbotScript.php') ?>

</html>