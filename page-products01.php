<!-- 部品・素材熱処理炉 -->
<?php

/**
 * Template Name: page-producs01
 * Description: This is the template
 */

get_header('product');
?>
<main>
        <section style="background-color: rgb(145, 145, 145); height: 32px;">bread>bread>bread</section>
        <section style="background-color: rgb(218, 218, 218); height: 75px;">PRODUCTS / 部品・素材熱処理炉</section>
        <section style="background-color: aqua; height: 214px;">hero</section>
        <section style="background-color: rgb(0, 255, 8); height: 972px;">News & Topics</section>
        <section style="background-color: rgb(104, 128, 128); height: 343px;">CTA_カタログ</section>
        <section style="background-color: rgb(251, 251, 251); height: auto;">
            <div style="background-color: #dfa3a3; margin: 0 auto;">
                <h2>Product</h2>
                <!-- <div style="margin: 0 auto; width: 80%; text-align: center; padding-bottom: 20px;">
                    <input type="text" id="search-input" style="border: 1px solid #232323; width: 400px;" placeholder="キーワードを入力して検索">
                    <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button>
                </div> -->
            </div>
            <div>
                <ul style="display: flex; flex-direction: row; width: 80%; align-content: center; justify-content: center; gap: 20px; margin: 0 auto;">
                    <li><button class="btn btn-outline-success" type="button" id="btn-all"><i class="fas fa-search"></i> 一覧で検索</button></li>
                    <li><button class="btn btn-outline-success" type="button" id="btn-material"><i class="fas fa-search"></i> 処理材料で検索</button></li>
                    <li><button class="btn btn-outline-success" type="button" id="btn-purpose"><i class="fas fa-search"></i>用途で検索</button></li>
                </ul>
                <!-- 検索用の入力フィールド下段 -->
                <div style="margin: 0 auto; width: 80%; text-align: center; padding-top: 20px;">
                    <input type="text" id="search-input" style="border: 1px solid #232323; width: 400px;" placeholder="キーワードを入力して検索 icon">
                    <!-- <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button> -->
                </div>
            </div>
            <!-- 商品リスト -->
            <div id="product-display">
                <!-- 初期状態で全ての商品を表示 -->
                <ul id="all-products" class="product-list active">
                    <li><a href="./page-p01-productname.html">商品001</a></li>
                    <li><a href="./page-p01-productname.html">商品002</a></li>
                    <li><a href="./page-p01-productname.html">商品003</a></li>
                    <li><a href="./page-p01-productname.html">商品004</a></li>
                    <li><a href="./page-p01-productname.html">商品005</a></li>
                    <li><a href="./page-p01-productname.html">商品006</a></li>
                    <li><a href="./page-p01-productname.html">商品007</a></li>
                    <li><a href="./page-p01-productname.html">商品008</a></li>
                    <li><a href="./page-p01-productname.html">商品009</a></li>
                    <li><a href="./page-p01-productname.html">商品010</a></li>
                    <li><a href="./page-p01-productname.html">商品011</a></li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html">商品012処理</a></li>
                    <li><a href="./page-p01-productname.html">商品013</a></li>
                    <li><a href="./page-p01-productname.html">商品014</a></li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html">商品015処理</a></li>
                    <li><a href="./page-p01-productname.html">商品016</a></li>
                    <li><a href="./page-p01-productname.html">商品017</a></li>
                    <li><a href="./page-p01-productname.html">商品018</a></li>
                    <li><a href="./page-p01-productname.html">商品019</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品020用途</li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品021用途</li>
                    <li><a href="./page-p01-productname.html"></a>商品022</li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品023用途</li>
                </ul>
        
                <!-- 処理材料リスト -->
                <ul id="material-products" class="product-list">
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html">商品012処理</li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html">商品015処理</li>
                </ul>
        
                <!-- 用途リスト -->
                <ul id="purpose-products" class="product-list">
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品020用途</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品021用途</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html">商品023用途</a></li>
                </ul>
            </div>
        </section>
        <section style="background-color: rgb(157, 179, 179); height: 314px;">CTA_ダウンロード & 問い合わせ</section>
    </main>

<?php
get_footer('product');
?>