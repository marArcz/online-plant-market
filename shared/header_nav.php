<nav class="navbar navbar-dark bg-white top-navbar">
    <div class="container-fluid justify-content-center">
        <a href="index.php" class="navbar-brand text-center">
            <img src="./assets/homepage/logo.PNG" class="img-fluid" alt="">
        </a>
    </div>
</nav>
<nav class="navbar navbar-dark bg-success main-navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main-nav">
            <ul class=" navbar-nav">
                <?php
                $nav_links = [
                    ['Home', 'index.php', 'home'],
                    ['Products', 'products.php', 'products'],
                    ['Contact', 'contact.php', 'contact'],
                    ["FAQ's", 'faqs.php', 'faqs'],
                ];
                if (!isset($active_page)) {
                    $active_page = "";
                }
                foreach ($nav_links as $key => $nav_link) {
                ?>
                    <li class="nav-item" <?php echo $active_page == $nav_link[2] ? 'active' : '' ?>>
                        <a href="<?php echo $nav_link[1] ?>" class="nav-link link-light">
                            <?php echo $nav_link[0] ?>
                        </a>
                    </li>
                <?php
                }
                ?>


            </ul>
        </div>
        <ul class="nav ms-auto">
            <?php
            if (isset($_SESSION['user_id'])) {
            ?>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link link-light fs-5">
                        <i class="bi bi-cart"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" role="button" class="nav-link link-light fs-5">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="">
                                <a href="logout.php" class="dropdown-item">Log out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link link-light">Login</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link link-light">Sign up</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>