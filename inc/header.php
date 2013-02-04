<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="booztrap.css" media="all">

    <script src="js/mootools-core-uncompressed.js"></script>
    <script src="js/mootools-more-uncompressed.js"></script>
    <script src="booZii/js/booZii.mootools.js"></script>
    <title></title>
</head>
<body>
<header class="stretch" id="header">
    <div class="grid centerize">
        <figure class="u_4">
            <a href="#"><img src="img/logo_booZii.png" alt="BooZii"></a>
        </figure>
        <nav class="nav-h flyout-v">
            <ul id="nav-main">
                <li class="item"><a href="?page=home" class="link">Home</a></li>
                <li class="item"><a href="?page=about-us" class="link">About Us</a></li>
                <li class="item submenu"><a href="?page=example" class="link">Example</a>
                    <ul>
                        <li class="item"><a href="?page=googlemap" class="link">Maps</a></li>
                        <li class="item"><a href="?page=slider" class="link">Slider</a></li>
                        <li class="item"><a href="?page=tooltip" class="link">Tooltip</a></li>
                        <li class="item"><a href="?page=modal" class="link">Modal windows</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div id="content">
    <?php
        $page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
        $file = 'pages/'.$page.'.php';
        if(file_exists($file)) {
            require_once($file);
        } else {
            echo 'Page not found';
        }

    ?>
