<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="static template">
    <meta name="keywords" content="keywords_01,keywords_02">
    <meta name="format-detection" content="telephone=no">
    <title><?= isset($pageTitle) ? $pageTitle : 'page-title'; ?></title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font -->
    <!-- style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- add data-aos css link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?= resource('css', 'style.css') ?>" />
    <link rel="stylesheet" href="<?= resource('iconfont', 'iconfont.css') ?>" />
    <?= resources('css', isset($headCSS) ? $headCSS : '', true) ?>
    <!-- end style -->
</head>
<!-- ADD LOADING -->
<div id="loading">
    <img src="<?= resource('img', 'raw/partnerdrive_logo.svg'); ?>" alt="">
</div>

<body class="page">
    <header class="l-header page__top <?= trim($_SERVER['PHP_SELF'], '/') == 'rules.php' ? 'activate' : '' ?>">
        <!-- header start here -->
        <nav class="l-header__navbar l-header__row">
            <div class="l-header__col">
                <div class="l-header__branding">
                    <img src="<?= resource('img', 'raw/partnerdrive_logo.svg'); ?>" alt="">
                </div>
            </div>
            <div class="l-header__col">
                <ul class="l-header__menu">
                    <li class="l-header__menu-item"><a href="#">partner driveの機能</a></li>
                    <li class="l-header__menu-item"><a href="#">お問い合わせ</a></li>
                    <li class="l-header__menu-item"><a href="#">導入事例</a></li>
                    <li class="l-header__menu-item"><a href="#">お知らせ</a></li>
                </ul>
                <div class="l-header__buttons">
                    <a class="c-button c-button--m c-button--accent--w c-button--return" href="#">資料ダウンロード</a>
                    <a class="c-button c-button--m c-button--accent c-button--return" href="#">新規登録・ログイン</a>
                </div>

                <ul class="l-header__hamburgerMenu" id="hamburgerMenu">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </nav>

        <div class="spMenuItem">
            <ul>
                <li><a href="#">partner driveの機能</a></li>
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">導入事例</a></li>
                <li><a href="#">お知らせ</a></li>
            </ul>
            <div class="spMenuItem__buttons">
                <a class="c-button c-button--xl c-button--main c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_download.svg'); ?>" alt=""> 資料ダウンロード</a>
                <a class="c-button c-button--xl c-button--main c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_user-sp.svg'); ?>" alt=""> 新規登録・ログイン</a>
            </div>
        </div>
        <!-- header end here -->
    </header>
    <main class="page__center">
        <!-- content start here -->