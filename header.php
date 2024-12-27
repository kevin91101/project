    <header>
        <nav class="navbar navbar-expand-lg bg-black navbar-dark px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="images/直式反白.png" height="70px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <?php
            $a = explode("/", $_SERVER["SCRIPT_NAME"]);
            $tempFile = $a[count($a) - 1];
            ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if($tempFile == 'index.php') {
                    echo 'active';
                }?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tempFile == 'about.php') {
                    echo 'active';
                }?>" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Course
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">group</a></li>
                        <li><a class="dropdown-item" href="#">one to one</a></li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-ULOr" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <div class="mt-4 mt-lg-0 mx-lg-2 LogIn">
                <button type="button" class="btn btn-ULBl p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="login.php">
                    LOG IN
                </a>
                </button>
            </div>
            </div>
        </div>
        </nav>
    </header>