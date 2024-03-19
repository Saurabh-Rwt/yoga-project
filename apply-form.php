<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apply Form</title>
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
            <h2 class="breadcrumb-title">Apply Now - Registration Form</h2>
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="<?php echo $link;?>">home</a></li>
                <li class="breadcrumb-item">Apply Now</li>
            </ul>
        </div>
    </section>
    <!-- end -->

    <!-- contact us -->
    <section class="space bg">
        <div class="container">
        <div class="heading-wrap">
                <h1 class="main-heading">Apply Now Form</h1>
                <span class="sub-title">Niya Yoga Studio Enrolment Form</span>
            </div>
            <p class="text-center">
            Namaste! We are so delighted to welcome you to Niya Yoga Studio Family! We hope you are as excited as we are for you to embark on this life-changing and transformative journey. Please fill out this form to complete your enrolment at Niya Yoga Studio.
            </p>
            <div class="row contact-us">
                <div class="col-lg-12">
                    
                    <form action="">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    <label for="name">Name<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="phone_number" id="phone_number"
                                        placeholder="Phone Number">
                                    <label for="phone_number">contact number<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                    <label for="email">Email<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <select name="" id="" class="form-control">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Notsay">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <select name="" id="" class="form-control">
                                        <option value="">Course Package with</option>
                                        <option value="male">Private Room</option>
                                        <option value="Female">Double Sharing Room</option>
                                        <option value="Notsay">No Accommodation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    <label for="name">Course/Program Date ( Ex: 2 to 30 April 2024 ) <sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <select name="" id="" class="form-control">
                                        <option value="">How did you reach to us ?</option>
                                        <option value="male">Internet/Online/Social Media</option>
                                        <option value="Female">Niya Ex-student</option>
                                        <option value="Notsay">Recommended by friends</option>
                                        <option value="Notsay">Others</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Course</option>
                                        <option value="100 Yoga TTC">100 Yoga TTC</option>
                                        <option value="200 Yoga TTC">200 Yoga TTC</option>
                                        <option value="300 Yoga TTC">300 Yoga TTC</option>
                                        <option value="7 Days Yoga Retreat">7 Days Yoga Retreat</option>
                                        <option value="10 Days Yoga Retreat">10 Days Yoga Retreat</option>
                                        <option value="14 Days Yoga Retreat">14 Days Yoga Retreat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                                    <label for="email">Message<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="primary-btn">submit now</button>
                            </div>
                        </div>
                    </form>
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