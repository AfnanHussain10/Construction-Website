<?php

require "functions.php";
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = forgotPassword($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <?php include 'header.html'; ?>
</head>
<style>
    * {
        box-sizing: border-box;
    }


    .subscribe {
        position: relative;
        margin: auto;
        padding: 20px;
        max-width: 450px;
        height: 470px;
        background-color: #FFF;
        border-radius: 4px;
        color: #333;
        box-shadow: 0px 0px 60px 5px rgba(0, 0, 0, 0.4);
        text-align: center;
    }

    .subscribe h2 {
        margin-top: 0;
        font-weight: bold;
        font-family: 'Bebas Neue', cursive !important;
        letter-spacing: 4px;

    }

    .subscribe img {
        height: 50%;
        /* Set the height of the image to be equal to the height of the parent div */
        max-width: 100%;
        /* Set the maximum width of the image to be equal to the width of the parent div */
        object-fit: fill;
        /* Set the image to be contained within the parent div */
        margin-bottom: 30px;
        /* Add some margin below the image */
    }


    .subscribe:after {
        position: absolute;
        content: "";
        right: -10px;
        bottom: 18px;
        width: 0;
        height: 0;
        border-left: 0px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #1a044e;
    }

    .subscribe form p {
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 2px;
        line-height: 20px;
        padding-bottom: 1em;

    }

    .subscribe input {
        position: relative;
        bottom: 30px;
        border: none;
        border-bottom: 1px solid #d4d4d4;
        padding: 20px;
        font-weight: 600;
        width: 90%;
        background: transparent;
        transition: all .25s ease;

    }

    .subscribe ::-webkit-input-placeholder {
        font-weight: 900;
    }

    .subscribe input:focus {
        outline: none;
        border-bottom: 1px solid #0d095e;

    }

    .subscribe .submit-btn {
        position: absolute;
        border-radius: 30px;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        background-color: #0f0092;
        color: #FFF;
        padding: 12px 25px;
        display: inline-block;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 5px;
        right: -10px;
        bottom: -20px;
        cursor: pointer;
        transition: all .25s ease;
        box-shadow: -5px 6px 20px 0px rgba(26, 26, 26, 0.4);
    }

    .subscribe h2 {
        font-size: 40px !important;
        letter-spacing: 1px !important;
    }

    .subscribe .submit-btn:hover {
        background-color: #07013d;
        box-shadow: -5px 6px 20px 0px rgba(88, 88, 88, 0.569);
    }

    @media only screen and (max-width: 767px) {
        .input-group {
            position: static;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    }

    .front-forgot {
        background: #bdc3c7;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2c3e50, #bdc3c7);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    @media only screen and (max-width: 767px) {
        .front-forgot {
            padding: 50px 10px;
        }

        .subscribe {
            height: auto;
            padding: 10px;
        }

        .subscribe img {
            height: 180px;
            margin-bottom: 15px;
        }

        .subscribe h2 {
            font-size: 32px !important;
            letter-spacing: 1px !important;
        }

        .subscribe form p {
            font-size: 14px !important;
            padding-bottom: 0.3em;
            padding-top: 0.3em;
        }

        .subscribe input {
            bottom: 0;
            width: 100%;
            margin-bottom: 30px;
        }


    }


    .front-forgot.section-padding {
        padding: 120px 0;
    }
</style>

<body>
    <nav>
        <?php include('navrbar-user.php') ?>
    </nav>

    <section id="front-forgot" class="front-forgot section-padding">
        <div class="alert">
            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-<?php if ($errors[0] === 'A password reset link has been sent to your email address.') echo 'success';
                                        else echo 'danger'  ?> alert-dismissible fade show" role="alert">
                    <?php foreach ($errors as $error) : ?>
                        <?= $error ?> <br>
                    <?php endforeach; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="container-front">
            <div class="subscribe">
                <img src="images/password_reset.png">
                <form method="post">
                    <h2>Forgot Password?</h2>
                    <p>Enter your email below to get a link to reset your password.</p>
                    <input placeholder="Enter e-mail" class="subscribe-input" name="email" type="email">
                    <br>
                    <button class="submit-btn">SUBMIT</button>
                </form>
            </div>
        </div>

    </section>



    <?php include('footer.php') ?>
    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>
</body>

<?php include('chatbotScript.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</html>