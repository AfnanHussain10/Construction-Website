
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container-fluid">
    <a class="navbar-brand" href="landing.php"><span class="text-warning">Real</span>Enterprises</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="landing.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Projects.php">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="landing.php#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="estimation.php">Estimation Model</a>
            </li>

            <?php if (check_login(false)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="fetch-favorite.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Account.php">My Account</a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="d-flex flex-column flex-md-row order-md-last ms-auto btn-warning">
            <?php if (!check_login(false)) : ?>
                <button class="btn btn-sm btn-outline-secondary btn-real btn-warning" type="submit" onclick="window.location.href='login.php'" id="button-login">Login/Signup</button>
            <?php endif; ?>

            <?php if (check_login(false)) : ?>
                <span class="navbar-text">
                    Hi,
                    <?= $_SESSION['USER']->name ?>
                </span>
                <ul class="navbar-nav">
                    <li class="nav-item pt-1">
                        <button class="btn btn-sm btn-outline-secondary btn-real" type="submit" onclick="window.location.href='logout.php'" id="button-login">Logout</button>
                    </li>
                </ul>

            <?php endif; ?>
        </div>
    </div>
</div>
</nav>

<script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Get all the links in the navigation bar
    var navLinks = document.querySelectorAll('.navbar-nav a');

    // Loop through all the links and add the "active" class to the current link
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].classList.remove('active');
        if (navLinks[i].href === currentUrl) {
            navLinks[i].classList.add('active');
        }
    }


</script>


