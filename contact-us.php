<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yoga</title>
    <!-- css -->
    <?php include('include/css.php') ?>
</head>

<body>
    <!-- header -->
    <?php include('include/header.php') ?>
    <!-- end -->

    <!-- Breadcrumb -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <h2 class="breadcrumb-title">Contact us</h2>
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="<?php echo $link;?>">home</a></li>
                <li class="breadcrumb-item">Contact us</li>
            </ul>
        </div>
    </section>
    <!-- end -->

    <!-- contact us -->
    <section class="space contact-us bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form action="">
                        <span class="sub-title">Join Us To Get Yoga TTC Course</span>
                        <h1 class="main-heading">CONTACT WITH US</h1>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    <label for="name">Name<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="phone_number" id="phone_number"
                                        placeholder="Phone Number">
                                    <label for="phone_number">contact number<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                    <label for="email">Email<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                    <label for="email">Message<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="primary-btn">submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <img src="assets/images/14-days-yoga-retreats-rishikesh-niya-yoga-studio.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- footer -->
    <?php include('include/footer.php') ?>
    <!-- end -->

    <!-- js -->
    <?php include('include/javascript.php') ?>
    <!-- end -->
</body>

</html>