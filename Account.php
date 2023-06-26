<?php

require('functions.php');

// Check if the user is logged in
if (!check_login(false)) {
    header("location: login.php");
    exit;
}

require_once('db_connect.php');

// Get the user's details from the database
$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$errors = array();
// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update the user's email
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if ($_POST["email"] !== $row["email"]) {

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Please enter a valid email";
            }

            $check = database_run("select * from users where email = :email limit 1", ['email' => $_POST['email']]);
            if (is_array($check)) {
                $errors[] = "That email already exists";
            }
            if (count($errors) == 0) {
                $email = $_POST["email"];
                $sql = "UPDATE users SET email='$email' WHERE username='$username'";
                if (mysqli_query($mysqli, $sql)) {
                    $row["email"] = $email;
                    $errors[] = "Email updated successfully.";
                } else {
                    $errors[] = "Error updating email: " . mysqli_error($mysqli);
                }
            }
        }
    }

    // Change the user's password
    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $errors = resetPassword($_POST);
    }
}

// Close the database connection
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Account</title>
    <?php include 'header.html'; ?>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 30px;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        .form-control:focus {
            border-color: #3d68ff;
            box-shadow: 0 0 0 0.25rem rgba(61, 104, 255, 0.25);
        }

        ::placeholder {
            color: #333 !important;
            font-weight: 900 !important;
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        body {
            background: #bdc3c7;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2c3e50, #bdc3c7);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        p {
            font-weight: 600 !important
        }

        .card h4 {
            font-weight: 700;
            font-family: "Bebas Neue", cursive !important;
            font-size: 200%;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>

    <?php include('navrbar-user.php') ?>

    <div class="container-fluid mt-5 pt-5 pb-5 account">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Welcome, <?php echo $row["username"]; ?></h4>
                        <p class="card-text">Your email: <?php echo $row["email"]; ?></p>
                        <p class="card-text">Date of creation of account: <?php echo $row["date"]; ?></p>
                        <p class="card-text">To view your favorites:</p>
                        <a href="fetch-favorite.php"><button class="btn btn-primary">Click Here</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Your Account Information</h4>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">New Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password:</label>
                                <input type="password" class="form-control" id="repassword" name="repassword">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="margin-top:1%;">Save Changes</button>
                            </div>
                        </form>
                        <div class="alert">
                            <?php if (count($errors) > 0) : ?>
                                <div class="alert alert-<?php if ($errors[0] === 'Your password has been reset.' || $errors[0] === "Email updated successfully.") echo 'success';
                                                        else echo 'danger'  ?> alert-dismissible fade show" role="alert">
                                    <?php foreach ($errors as $error) : ?>
                                        <?= $error ?> <br>
                                    <?php endforeach; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <iframe id="chatbot-iframe" src="chatbot.html" style="position: fixed; bottom: 20px; right: 20px; height:90px; width:90px; z-index:99;"></iframe>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php include('chatbotScript.php') ?>

</html>