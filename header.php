<?php
//====================================================
//  Template Name: Header
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <title>zero3 | Industory Company</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <section class="header-inner">
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url()); ?>" style="color:#fff!important;">logo</a></h1>
            <nav class="header-nav c-flexcol">
                <ul class="header-nav--first c-flexrow" style="gap: 20px;">
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/products01')); ?>" style="color:#fff!important;">分野A</a></li>
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/products02')); ?>" style="color:#fff!important;">分野B</a></li>
                    <li style="color:#fff;">3</li>
                </ul>
                <ul class="header-nav--second c-flexrow" style="gap: 20px;">
                    <li style="color:#fff;">4</li>
                    <li style="color:#fff;">5</li>
                    <li style="color:#fff;">6</li>
                </ul>
            </nav>
        </section>
    </header>
    <main>