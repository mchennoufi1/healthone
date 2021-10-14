<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="img/Logo-Health-One.png" width="100px" height="80px"></img>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'home'){echo "color: black";}?>" href="index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == "categories"){echo "color: black";}?>" href="categories.php">sportapparaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'inloggen'){echo "color: black";}?>" href="#">registreren</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'contact'){echo "color: black";}?>" href="contact.php">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">inloggen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>