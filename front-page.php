<?php

/**
 * Template Name: Front Page
 * Description: This is the template for the front page.
 */

get_header();
?>
<main>
    <section class="hero" style="background-color: aqua; height: 350px;">
        <h2>Hero Section</h2>
    </section>
    <section class="topics" style="background-color: rgb(0, 255, 8); height: 350px;">
        <h2>Topics Section</h2>
    </section>
    <section class="news" style="background-color: rgb(104, 128, 128); height: 350px;">
        <h2>News Section</h2>
    </section>
    <section class="three-strong" style="background-color: rgb(48, 56, 56); height: 350px;">
        <h2>Three Strong Points</h2>
    </section>
    <section class="img-section" style="background-color: rgb(48, 56, 56); height: 350px;">
        <h2>Image Section</h2>
    </section>
    <section class="product" style="background-color: rgb(99, 167, 167); height: 350px;">
        <h2>Product Section</h2>
    </section>
</main>

<footer style="height: 400px; background-color: bisque;">
    <section class="footer-first" style="background-color: aquamarine; height: 300px;">
        <h2>Footer First Section</h2>
    </section>
    <section class="footer-second" style="background-color: rgb(255, 249, 127); height: 120px;">
        <h2>Footer Second Section</h2>
    </section>
</footer>

<?php
get_footer(); // footer.php を読み込む
?>