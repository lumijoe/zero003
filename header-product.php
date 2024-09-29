<?php
//====================================================
//  Template Name: header-product
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/products.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>zero3 | 分野Aページ</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <section class="header-inner">
            <h1 class="header-logo">logo</h1>
            <nav class="header-nav c-flexcol">
                <ul class="header-nav--first c-flexrow">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
                <ul class="header-nav--second c-flexrow">
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                </ul>
            </nav>
        </section>
    </header>
    <main>