<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico'>
    <title><?php echo (!empty($title) ? $title : 'Rainbow System'); ?></title>

    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/css/layout.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs6">
            <a href="<?php echo base_url(); ?>"><img class="logo-right" src="/resources/img/logo-right.jpg"></a>
        </div>
        <div class="col-xs6">
            <a href="<?php echo base_url(); ?>"><img class="logo-left" src="/resources/img/logo-left.jpg"></a>
        </div>
    </div>

    <ul class="main-menu">
        <li <?php echo ($menu == 'home' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url($lang); ?>"><img src="/resources/img/icon-home.png"></a>
        </li>
        <li class="visible-md visible-lg <?php echo (($menu == 'rainbow-system' || $menu == 'rainbow-cambodia') ? 'active' : ''); ?>">
            <a href="<?php echo base_url('rainbow-system'); ?>"><?php echo lang('rainbow_system'); ?></a>
            <ul>
                <li>
                    <a href="http://www.rainbowsystem.com/" target="_blank"><?php echo lang('rainbow_worldwide'); ?></a>
                </li>
                <li <?php echo ($menu == 'rainbow-cambodia' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('rainbow-cambodia'); ?>"><?php echo lang('rainbow_cambodia'); ?></a>
                </li>
            </ul>
        </li>
        <li class="visible-md visible-lg <?php echo (($menu == 'full-time-opportunity' || $menu == 'part_time_opportunity' || $menu == 'colleague-university-student') ? 'active' : ''); ?>">
            <span><?php echo lang('careers'); ?></span>
            <ul>
                <li <?php echo ($menu == 'full-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('full-time-opportunity'); ?>"><?php echo lang('full_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'part-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('part-time-opportunity'); ?>"><?php echo lang('part_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'colleague-university-student' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('colleague-university-student'); ?>"><?php echo lang('colleague_university_student'); ?></a>
                </li>
            </ul>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'our-product' ? 'active' : ''); ?>">
            <a href="<?php echo base_url('our-product'); ?>"><?php echo lang('our_product'); ?></a>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'contact' ? 'active' : ''); ?>">
            <a href="<?php echo base_url('contact'); ?>"><?php echo lang('contact'); ?></a>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'request-demonstration' ? 'active' : ''); ?>">
            <a href="<?php echo base_url('request-demonstration'); ?>"><?php echo lang('request_a_demonstration'); ?></a>
        </li>
        <li>
            <button class="btn btn-default visible-sm visible-xs" id="btnToggleMenu">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a href="<?php echo base_url('ca/'.$menu); ?>" <?php echo ($lang == 'ca' ? 'class="current"' : ''); ?>>
                <img src="/resources/ca.png" class="lang-flag">
            </a>
            <a href="<?php echo base_url('en/'.$menu); ?>" <?php echo ($lang == 'en' ? 'class="current"' : ''); ?>>
                <img src="/resources/en.png" class="lang-flag">
            </a>
        </li>
    </ul>
    <ul class="right-menu" id="rightMenu">
        <li>
            <a href="<?php echo base_url($lang); ?>"><img src="/resources/img/logo-left.jpg"></a>
        </li>
        <li <?php echo ($menu == 'rainbow-system' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url('rainbow-system'); ?>"><?php echo lang('rainbow_system'); ?></a>
            <ul>
                <li>
                    <a href="http://www.rainbowsystem.com/" target="_blank"><?php echo lang('rainbow_worldwide'); ?></a>
                </li>
                <li <?php echo ($menu == 'rainbow-cambodia' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('rainbow-cambodia'); ?>"><?php echo lang('rainbow_cambodia'); ?></a>
                </li>
            </ul>
        </li>
        <li>
            <span><?php echo lang('careers'); ?></span>
            <ul>
                <li <?php echo ($menu == 'full-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('full-time-opportunity'); ?>"><?php echo lang('full_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'part-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('part-time-opportunity'); ?>"><?php echo lang('part_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'colleague-university-student' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url('colleague-university-student'); ?>"><?php echo lang('colleague_university_student'); ?></a>
                </li>
            </ul>
        </li>
        <li <?php echo ($menu == 'our-product' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url('our-product'); ?>"><?php echo lang('our_product'); ?></a>
        </li>
        <li <?php echo ($menu == 'contact' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url('contact'); ?>"><?php echo lang('contact'); ?></a>
        </li>
        <li <?php echo ($menu == 'request-demonstration' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url('request-demonstration'); ?>"><?php echo lang('request_a_demonstration'); ?></a>
        </li>
    </ul>
</div>
<div id="panMenuBg" class="hide"></div>
