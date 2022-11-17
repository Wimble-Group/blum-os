<?php 
    $url = $_SERVER['REQUEST_URI'];
    $link = explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
    $link = $link[0];
?>

<header>
    <div class="container">
        <a href="/" class="logo">Bloom OS</a>

        <div class="menu">
            <ul>
                <li><a class="<?= $data['page'] == 'home' ? 'active' : '' ?>" href="/">Home</a></li>
                <li><a class="<?= $data['page'] == 'bloom' ? 'active' : '' ?>" href="<?= ROOT; ?>bloom-os">BloomOS</a></li>
                <li><a class="<?= $data['page'] == 'headset' ? 'active' : '' ?>" href="<?= ROOT; ?>headset">Headset</a></li>
                <li><a class="<?= $data['page'] == 'contacts' ? 'active' : '' ?>" href="<?= ROOT; ?>contacts">Contacts</a></li>
            </ul>
        </div>

        <a class="menu-trigger" href="#">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
</header>

<div class="loader">
    <div class="loader-block">
        <video src="<?=ASSETS?>video/loader/loader.mp4" autoplay muted loop playsinline></video>
    </div>
</div>