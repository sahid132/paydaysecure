<?php 

include_once('config.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- amitha-->
<meta http_equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1">
<title><?php echo $meta_tags['title']; ?></title>
<meta name="keywords" content="<?php echo $meta_tags['keywords']; ?>">
<meta name="description" content="<?php echo $meta_tags['description']; ?>">
<meta property="og:title" content="Payday Secure"/>
<meta property="og:type" content="company"/>
<meta property="og:url" content="https://www.paydaysecure.com"/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content="usasecureloans"/>
<meta property="fb:admins" content="1301551246"/>
<?php if ($meta_tags['no-index'] ): ?> 
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <meta name="robots" content="noarchive">
<?php endif; ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/responsive.css" type="text/css" />
</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header page-section dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="<?php echo $path; ?>" class="standard-logo" data-dark-logo="<?php echo $path; ?>images/logo-dark.png"><img src="<?php echo $path; ?>images/logo.png" alt="Canvas Logo"></a>
                        <a href="<?php echo $path; ?>" class="retina-logo" data-dark-logo="<?php echo $path; ?>images/logo-dark@2x.png"><img src="<?php echo $path; ?>images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu">
                            <li <?php echo (preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>">HOME</a></li>
                            <li <?php echo (preg_match("/faq.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>faq">FAQ'S</a></li>
                            <li <?php echo (preg_match("/rates.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>rates">RATES</a></li>
                            <li <?php echo (preg_match("/terms.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>terms">TERMS</a></li>
                            <li <?php echo (preg_match("/privacy.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>privacy">PRIVACY</a></li>
                            <li <?php echo (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>contact">CONTACT</a></li>
                            <li <?php echo (preg_match("/blog/",$_SERVER['SCRIPT_FILENAME']) ? 'class="active"': '');?>><a href="<?php echo $path; ?>blog">BLOG</a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->