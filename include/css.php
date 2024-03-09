<?php $fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
"https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  ?>
<?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
"https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/yoga-project/"; ?>

<base href="<?php echo $link;?>">


<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="canonical" href="<?php echo $fullurl; ?>" />
<link rel="alternate" href="<?php echo $fullurl; ?>" hreflang="en-IN" />
<link rel="alternate" href="<?php echo $fullurl; ?>" hreflang="x-default" />

<!-- meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="geo.region" content="IN-UT" />
<meta name="geo.placename" content="Rishikesh" />
<meta name="geo.position" content="30.13136;78.325617" />
<meta name="ICBM" content="30.13136, 78.325617" />
<!-- cdn links -->

<!-- CSS -->
<link rel="stylesheet" href="<?php echo $link;?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $link;?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $link;?>assets/css/owl.carousel.min.css">