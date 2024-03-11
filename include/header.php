<header>
    <div class="container">
        <div class="top-header">
            <ul class="contact-list">
                <li><a href="tel:353873550405"><i class="fa-solid fa-phone"></i>+353-873550405</a></li>
                <li><a href="mailto:info@niyayogastudios.com"><i class="fa-solid fa-envelope"></i>info@niyayogastudios.com</a></li>
            </ul>
            <ul class="social-contact">
                <li>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <nav>
        <div class="container">
            <div class="navbar-holder">
                <button class="hamburger" type="button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <a href="<?php echo $link;?>" class="logo">
                    <img src="<?php echo $link;?>assets/images/logo/logo.png" class="img-fluid" alt="">
                </a>
                <div class="navbarnav">
                    <ul class="navbar-list">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $link;?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" data-drop-target="about-dropdown" class="nav-link dropdown-link">About Us</a>
                            <ul class="dropdownmenu" id="about-dropdown">
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>about-us.php" title="About Our Ashram">About Niya Yoga Studio</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>niya-yoga-studio-in-ireland.php" title="Niya Yoga Studio in ireland">Niya Yoga Studio in ireland</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>our-teachers.php" title="">our teacher's</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>food-accomodaiton.php" title="">food and accommodation</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>faq.php" title="">FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" data-drop-target="course-dropdown" class="nav-link dropdown-link">Yoga courses</a>
                            <ul class="dropdownmenu" id="course-dropdown">
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>100-hour-yoga-teacher-training.php" title="">100 Hour Yoga Teacher Training</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>200-hour-yoga-teacher-training.php" title="">200 Hour Yoga Teacher Training</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="<?php echo $link;?>300-hour-yoga-teacher-training.php" title="">300 Hour Yoga Teacher Training</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" data-drop-target="retreat-dropdown" class="nav-link dropdown-link">Yoga retreats</a>
                            <ul class="dropdownmenu" id="retreat-dropdown">
                                <li class="dropdown-item"><a href="<?php echo $link;?>7-days-yoga-retreat.php" class="nav-link">7 days yoga Retreat</a></li>
                                <li class="dropdown-item"><a href="<?php echo $link;?>10-days-yoga-retreat.php" class="nav-link">10 days yoga Retreat</a></li>
                                <li class="dropdown-item"><a href="<?php echo $link;?>14-days-yoga-retreat.php" class="nav-link">14 days yoga Retreat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">contact us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="primary-btn" data-bs-toggle="modal" data-bs-target="#bookNow-modal">boook now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>