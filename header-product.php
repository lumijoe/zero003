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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>zero3 | 分野Aページ</title>
    <style>
        .product-list {
            display: none;
            /* 初期表示は非表示 */
        }

        .product-list.active {
            display: flex;
            /* 有効なリストを表示 */
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin: 20px 0;
        }

        .product-list li {
            list-style: none;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .product-list li:hover {
            background-color: #e0f7fa;
            cursor: pointer;
        }
    </style>
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