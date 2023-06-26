<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Estimation Model</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php include 'header.html'; ?>


    <style>
        body,
        html {
            position: relative;
            height: 100%
        }

        body {
            background: #eee;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            font-weight: 200
        }

        .swiper {
            width: 100%;
            height: auto
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto
        }

        * {
            box-sizing: border-box;
            font-family: Montserrat, sans-serif
        }

        h1.display-6 {
            text-align: center
        }

        body {
            background-color: #f8f8f8;
            margin: 0
        }

        input[type=number], input[type=text]{
            font-weight: 600;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-weight: 500
        }

        footer {
            font-weight: 900
        }

        hr {
            margin: auto;
            color: #000;
            font-weight: bolder;
            padding-bottom: 10px
        }

        .swiper-wrapper h2 {
            margin-top: 0;
            font-weight: 700;
            font-family: 'Bebas Neue', cursive !important;
            letter-spacing: 3px;
            font-size: 2.5rem;
            color: #333 !important
        }

        h3 {
            font-weight: 900;
            text-align: center;
            padding-top: 10px;
            font-family: 'Bebas Neue', cursive !important;
            font-size: 3.5rem;
            letter-spacing: 3px;
            color: #333 !important
        }

        form {
            background-color: #45444415;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border: 2px solid #ccc;
        }

        ::placeholder {
            color: #333 !important;
            font-weight: 600 !important;
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
            font-weight: 700
        }

        input[type=number],
        select {
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
        }

        input[type=number]:focus,
        select:focus {
            outline: 0;
            border-color: #5e9ed6;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            font-weight: 600;
        }

        #locations {
            margin-bottom: 20px;
        }

        .location {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .location label {
            margin-right: 10px;
        }

        .location select {
            flex: 1;
        }

        #materials {
            margin-bottom: 20px;
        }

        .area-range {
            margin-bottom: 20px;
        }

        .design {
            margin-bottom: 20px;
        }

        .material {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .material select {
            flex: 2;
            margin-right: 10px;
            font-weight: 600;
        }

        .material-quantity {
            flex: 1;
            margin-right: 10px
        }

        .material-unit {
            font-weight: 700;
            font-size: small;
            padding-right: 10px
        }

        .remove-material {
            position: relative;
            overflow: hidden;
            border: none;
            background-color: transparent;
            outline: 0
        }

        .remove-material svg {
            position: relative;
            z-index: 1;
            transition: all .3s ease
        }

        .remove-material {
            position: relative;
            border-radius: 0;
            color: #333
        }

        .remove-material svg {
            width: 1.3em;
            height: 1.3em
        }

        .remove-material:hover svg {
            transform: rotate(180deg);
            transition: transform .3s ease-in-out
        }

        .remove-material:before {
            content: "";
            position: absolute;
            top: -.5em;
            right: -.5em;
            bottom: -.5em;
            left: -.5em;
            border: none;
            background-color: transparent;
            outline: 0;
            transition: opacity .3s ease-in-out
        }

        .remove-material:hover:before {
            opacity: 1
        }

        #add-material {
            background-color: #5e9ed6;
            border: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            position: relative;
            overflow: hidden;
            border-radius: .4em
        }

        #add-material:hover {
            background-color: #2b6ca3
        }

        #estimate-button-advance {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 17px;
            padding: 1em 2.7em;
            font-weight: 500;
            background: #1f2937;
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            border-radius: .6em
        }

        #estimate-button-basic {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 17px;
            padding: 1em 2.7em;
            font-weight: 500;
            background: #1f2937;
            color: #fff;
            border: none;
            position: relative;
            overflow: hidden;
            border-radius: .6em
        }

        .gradient {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            border-radius: .6em;
            margin-top: -.25em;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, .3))
        }

        .label {
            position: relative;
            top: -1px
        }

        .transition {
            transition-timing-function: cubic-bezier(0, 0, .2, 1);
            transition-duration: .5s;
            background-color: rgba(16, 185, 129, .6);
            border-radius: 9999px;
            width: 0;
            height: 0;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        button:hover .transition {
            width: 14em;
            height: 14em
        }

        button:active {
            transform: scale(.97)
        }

        #success-message {
            background-color: #c3e6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px
        }

        #cost {
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 700
        }

        #message {
            margin-bottom: 20px;
            font-size: 16px;
            color: #dc3545
        }

        .w-100 {
            height: 100vh
        }

        .gdlr-item-title {
            padding-top: 70px
        }

        .add-to-favorite,
        .add-to-favorite-basic {
            border: none;
            background-color: transparent;
            outline: 0;
            color: #5d5a5a
        }

        .add-to-favorite:hover svg path,
        .add-to-favorite-basic:hover svg path {
            fill: red;
        }

        .filled-red {
            color: red;
        }

        .button-login {
            color: #b8860b;
        }

        .note {
            padding-top: 3px;
            padding-left: 5px;
            font-weight: 550;
        }

    </style>
</head>

<body>
    <nav>
        <?php include('navrbar-user.php') ?>
    </nav>

    <div class="gdlr-item-tite">
        <div class="show">
            <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Estimation Model</h3>
        </div>
        <hr width="400">
    </div>
    <div class="note">
        <ul class="list-unstyled">

            <li style="padding-left: 7px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Disclaimer:
                <ul>
                    <li>This model is not 100% accurate. This is used to give an idea to customers what the estimate
                        cost might
                        be.</li>
                    <li>The prices may vary time to time.</li>
                    <li>The actual cost can vary.</li>
                    <li>To save your estimations login or signup right now.</li>
                </ul>
            </li>

        </ul>
    </div>

    <!-- Swiper -->
    <div class="swiper mySwiper">

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="text">
                    <h2>Basic Search</h2>
                    <form onsubmit="estimateBasicCost();return false;">
                        <div id="area-ranges">
                            <div class="area-range">
                                <label for="area-range">Area Range: </label>
                                <select id="area-range-dropdown" required>
                                    <option value="" disabled selected>Select Area-Range</option>
                                </select>
                            </div>
                        </div>
                        <div id="designs">
                            <div class="design">
                                <label for="design">Design: </label>
                                <select id="design-dropdown" required>
                                    <option value="" disabled selected>Select Design</option>
                                </select>
                            </div>
                        </div>
                        <label for="floor">Number of Floors: </label>
                        <input type="number" id="floor" name="floor" min="1" value="1" max="10" required><br><br>
                        <button id='estimate-button-basic' type="submit">
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label">Estimate Cost</span>
                        </button>
                        <?php if (check_login(false)) : ?>

                            <button class="add-to-favorite-basic"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg></button>
                            <i class="bi bi-heart fill"></i>
                            <br><br>

                        <?php endif; ?>

                    </form>
                    <div id="message"></div>
                    <div id="estimated-cost-container-basic" style="display:none; font-weight:600!important;" prev-estimated-cost="">

                        <p id="costBasic" style="font-weight:600!important;  padding: 10px 0;"></p>
                    </div>


                </div>

            </div>
            <div class="swiper-slide">
                <div class="text">
                    <h2>Advance Search</h2>

                    <form onsubmit="estimateCost();return false;">

                        <label for="area">Area (sq. ft.): </label>
                        <input type="number" id="area" name="area" min="0" step="10" max="10890" required><br><br>


                        <label for="flooradv">Number of Floors: </label>
                        <input type="number" id="flooradv" name="floor" min="1" value="1" max="10" required><br><br>

                        <div id="locations">
                            <div class="location">
                                <label for="location">Locations: </label>
                                <select id="location-dropdown" required>
                                    <option value="" disabled selected>Select Location</option>
                                </select>
                            </div>
                        </div>


                        <label for="category">Category: </label>
                        <select id="category" name="category">
                            <option value="0">All Categories</option>
                            <option value="Building Materials">Building Materials</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Plumbing">Plumbing</option>
                            <option value="Wood Material">Wood Material</option>
                            <option value="Metal Material">Metal Material</option>
                            <!-- Add more categories as needed -->
                        </select><br><br>

                        <div id="materials">
                            <div class="material">
                                <select class="material-dropdown">
                                    <option value="" disabled selected>Select Material</option>
                                </select>
                                <input type="number" class="material-quantity" placeholder="Quantity" min="1">
                                <span class="material-unit"></span>
                                <button class="remove-material"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg></button>
                                <i class="bi bi-trash-fill"></i>

                            </div>
                        </div>

                        <button id="add-material">Add Material</button><br><br>

                        <button id='estimate-button-advance' type="submit">
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label">Estimate Cost</span>
                        </button>
                        <?php if (check_login(false)) : ?>

                            <button class="add-to-favorite"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg></button>
                            <i class="bi bi-heart fill"></i>
                            <br><br>

                        <?php endif; ?>

                    </form>
                    <div id="costAdvance" prev-estimated-cost="" style="font-weight:600; padding: 10px 0;"></div>

                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


    <?php include('footer.php') ?>

    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

</body>
<?php include('chatbotScript.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/estimationModel.js"></script>
</html>