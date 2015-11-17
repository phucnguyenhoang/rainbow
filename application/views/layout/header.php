<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
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
            <a href="<?php echo base_url($lang); ?>"><img class="logo-right" src="/resources/img/logo-right.png"></a>
        </div>
        <div class="col-xs6">
            <a href="<?php echo base_url($lang); ?>"><img class="logo-left" src="/resources/img/logo-left.jpg"></a>
        </div>
    </div>

    <ul class="main-menu">
        <li <?php echo ($menu == 'home' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url($lang); ?>"><img src="/resources/img/icon-home.png"></a>
        </li>
        <li class="visible-md visible-lg <?php echo (($menu == 'rainbow-system' || $menu == 'rainbow-cambodia') ? 'active' : ''); ?>" <?php echo ($lang == 'kh' ? 'style="width: 20%;"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'rainbow-system'); ?>"><?php echo lang('rainbow_system'); ?></a>
            <ul>
                <li>
                    <a href="http://www.rainbowsystem.com/" target="_blank"><?php echo lang('rainbow_worldwide'); ?></a>
                </li>
                <li <?php echo ($menu == 'rainbow-cambodia' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'rainbow-cambodia'); ?>"><?php echo lang('rainbow_cambodia'); ?></a>
                </li>
            </ul>
        </li>
        <li class="visible-md visible-lg <?php echo (($menu == 'full-time-opportunity' || $menu == 'part-time-opportunity' || $menu == 'college-university-student') ? 'active' : ''); ?>">
            <span><?php echo lang('careers'); ?></span>
            <ul>
                <li <?php echo ($menu == 'full-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'full-time-opportunity'); ?>"><?php echo lang('full_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'part-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'part-time-opportunity'); ?>"><?php echo lang('part_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'college-university-student' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'college-university-student'); ?>"><?php echo lang('college_university_student'); ?></a>
                </li>
            </ul>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'our-product' ? 'active' : ''); ?>" <?php echo ($lang == 'kh' ? 'style="width: 22%;"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'our-product'); ?>"><?php echo lang('our_product'); ?></a>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'contact' ? 'active' : ''); ?>">
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'contact'); ?>"><?php echo lang('contact'); ?></a>
        </li>
        <li class="visible-md visible-lg <?php echo ($menu == 'request-demonstration' ? 'active' : ''); ?> highlight" <?php echo ($lang == 'kh' ? 'style="width: 20%;"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'request-demonstration'); ?>"><?php echo lang('request_a_demonstration'); ?></a>
        </li>
        <li>
            <button class="btn btn-primary visible-sm visible-xs" id="btnToggleMenu">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a href="<?php echo base_url('kh/'.$menu); ?>" <?php echo ($lang == 'kh' ? 'class="current"' : ''); ?>>
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
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'rainbow-system'); ?>"><?php echo lang('rainbow_system'); ?></a>
            <ul>
                <li>
                    <a href="http://www.rainbowsystem.com/" target="_blank"><?php echo lang('rainbow_worldwide'); ?></a>
                </li>
                <li <?php echo ($menu == 'rainbow-cambodia' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'rainbow-cambodia'); ?>"><?php echo lang('rainbow_cambodia'); ?></a>
                </li>
            </ul>
        </li>
        <li>
            <span><?php echo lang('careers'); ?></span>
            <ul>
                <li <?php echo ($menu == 'full-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'full-time-opportunity'); ?>"><?php echo lang('full_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'part-time-opportunity' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'part-time-opportunity'); ?>"><?php echo lang('part_time_opportunity'); ?></a>
                </li>
                <li <?php echo ($menu == 'college-university-student' ? 'class="active"' : ''); ?>>
                    <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'college-university-student'); ?>"><?php echo lang('college_university_student'); ?></a>
                </li>
            </ul>
        </li>
        <li <?php echo ($menu == 'our-product' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'our-product'); ?>"><?php echo lang('our_product'); ?></a>
        </li>
        <li <?php echo ($menu == 'contact' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'contact'); ?>"><?php echo lang('contact'); ?></a>
        </li>
        <li <?php echo ($menu == 'request-demonstration' ? 'class="active"' : ''); ?>>
            <a href="<?php echo base_url(($lang == 'en' ? 'en/' : 'kh/').'request-demonstration'); ?>"><?php echo lang('request_a_demonstration'); ?></a>
        </li>
    </ul>
</div>

<div class="sub-header">
    <?php if (!empty($subHeader)) : ?>
        <div class="container">
            <img src="/resources/img/<?php echo $subHeader; ?>">
            <div class="sub-header-text"><?php echo $headerText; ?></div>
        </div>
    <?php endif; ?>
</div>
<?php if (!empty($subHeader)) : ?>
    <div class="container sub-header-shadow"></div>
<?php endif; ?>

<div id="panMenuBg" class="hide"></div>
<input type="hidden" id="hidLang" value="<?php echo $lang; ?>">