
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="landing.html"><span class="text-warning">Real</span>Enterprises</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
                    <a class="nav-link" href="AdminAccount.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminMaterials.php">Materials CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminLocations.php">Locations CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminDesigns.php">Designs CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminAreaRanges.php">Area Ranges CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminReviews.php">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Graph.php">Graph</a>
                </li>
            </ul>
            <div class="d-flex flex-column flex-md-row order-md-last ms-auto btn-warning">
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