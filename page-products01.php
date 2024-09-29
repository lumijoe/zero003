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
        </div>
        <div>
            <ul style="display: flex; flex-direction: row; width: 80%; align-content: center; justify-content: center; gap: 20px; margin: 0 auto;">
                <li><button class="btn btn-outline-success" type="button" id="btn-all"><i class="fas fa-search"></i> 一覧で検索</button></li>
                <li><button class="btn btn-outline-success" type="button" id="btn-material"><i class="fas fa-search"></i> 処理材料で検索</button></li>
                <li><button class="btn btn-outline-success" type="button" id="btn-purpose"><i class="fas fa-search"></i>用途で検索</button></li>
            </ul>
            <!-- 検索用の入力フィールド下段 -->
            <div class="l-search">
                <input type="text" id="search-input" placeholder="キーワードを入力して検索">
                <span class="material-symbols-outlined" id="search-icon">search</span>
            </div>

        </div>
        <!-- 商品リスト -->
        <div id="product-display">
            <div class="container">
                <div id="left-column" class="left-column">
                    <!-- 左カラムのカテゴリが配置される -->
                </div>
                <div id="right-column" class="right-column">
                    <!-- 右カラムのカテゴリが配置される -->
                </div>
            </div>
            <!-- 初期状態で全ての商品を表示 -->
            <ul id="all-products" class="product-list active">
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリA</span>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品001</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品002</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品003</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品004</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品005</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品006</a></li>
                </div>
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリB</span>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品007</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品008</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品009</a></li>
                </div>
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリC</span>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品010</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品011</a></li>
                </div>
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリD</span>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品012処理</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品013</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品014</a></li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品015処理</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品016</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品017</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品018</a></li>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品019</a></li>
                </div>
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリE</span>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品020用途</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品021用途</a></li>
                </div>
                <div style="background-color: #dfa3a3; height:fit-content;" class="category"><span style="background-color: #232323; color: #fff!important; display: block; margin-left: -10px; margin-right: -10px; margin-top: -10px; padding-left: 5px;">カテゴリF</span>
                    <li><a href="./page-p01-productname.html" tabindex="0">商品022</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品023用途</a></li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品024処理</a></li>
                    <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品025処理</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品026用途</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品027用途</a></li>
                    <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品028用途</a></li>
                </div>
            </ul>


            <!-- 処理材料リスト -->
            <ul id="material-products" class="product-list">
                <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品012処理</a></li>
                <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品015処理</a></li>
                <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品024処理</a></li>
                <li style="background-color: aquamarine;"><a href="./page-p01-productname.html" tabindex="0">商品025処理</a></li>
            </ul>

            <!-- 用途リスト -->
            <ul id="purpose-products" class="product-list">
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品020用途</a>
                </li>
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品021用途</a>
                </li>
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品023用途</a>
                </li>
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品026用途</a>
                </li>
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品027用途</a>
                </li>
                <li style="background-color: rgb(234, 255, 127);"><a href="./page-p01-productname.html" tabindex="0">商品028用途</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- WPテスト -->
    <section>
        <h1>WP ACF投稿タクソノミー別UIテスト</h1>
        <?php
        // 投稿タイプを指定（例: 'post'）し、全ての投稿を取得
        $args = array(
            'post_type' => 'post', // 投稿タイプ
            'posts_per_page' => -1 // 全ての投稿を取得
        );
        $all_posts = new WP_Query($args);

        // 投稿が存在する場合にループ処理
        if ($all_posts->have_posts()) {
            echo '<ul>';
            while ($all_posts->have_posts()) {
                $all_posts->the_post(); // 投稿データをセット

                // 投稿のタクソノミー 'a_material' を取得
                $terms = get_the_terms(get_the_ID(), 'a_material');

                // タクソノミーの取得が成功し、タクソノミーが存在する場合に表示
                if ($terms && ! is_wp_error($terms)) {
                    echo '<li>' . get_the_title() . ' のタクソノミー: ';
                    echo '<ul>';
                    foreach ($terms as $term) {
                        echo '<li>' . esc_html($term->name) . '</li>';
                    }
                    echo '</ul>';
                    echo '</li>';
                } else {
                    echo '<li>' . get_the_title() . ' のタクソノミーが見つかりませんでした。</li>';
                }
            }
            echo '</ul>';
        } else {
            echo '<p>投稿が見つかりませんでした。</p>';
        }

        // 投稿データのリセット
        wp_reset_postdata();
        ?>
    </section>

    <section style="background-color: rgb(157, 179, 179); height: 314px;">CTA_ダウンロード & 問い合わせ</section>
    <!-- footer -->
    <footer style="height: 400px; background-color: bisque;">
        <section style="background-color: aquamarine; height: 812px;">footer-first</section>
        <section style="background-color: rgb(255, 249, 127); height: 134px;">footer-second</section>
    </footer>
    <!-- script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const allProducts = document.getElementById('all-products');
            const materialProducts = document.getElementById('material-products');
            const purposeProducts = document.getElementById('purpose-products');
            const searchInput = document.querySelector('input[type="text"]');
            const allBtn = document.getElementById('btn-all');
            const materialBtn = document.getElementById('btn-material');
            const purposeBtn = document.getElementById('btn-purpose');

            // デフォルトで一覧表示をアクティブに設定
            allProducts.classList.add('active');

            // キーワード検索処理
            searchInput.addEventListener('input', function() {
                const keyword = searchInput.value.toLowerCase();
                filterProducts(keyword);
            });

            // 各ボタンにホバーイベントを追加
            allBtn.addEventListener('mouseenter', function() {
                resetSearch(); // キーワード検索をリセット
                showProducts(allProducts); // 一覧を表示
            });

            // materialBtn.addEventListener('mouseenter', function() {
            //     resetSearch(); // キーワード検索をリセット
            //     showProducts(materialProducts); // 処理材料のリストを表示
            // });

            purposeBtn.addEventListener('mouseenter', function() {
                resetSearch(); // キーワード検索をリセット
                showProducts(purposeProducts); // 用途のリストを表示
            });
            materialBtn.addEventListener('mouseenter', function() {
                resetSearch(); // キーワード検索をリセット
                showProducts(materialProducts); // 処理材料のリストを表示

                // 処理材料リストを取得
                const productItems = materialProducts.querySelectorAll('li a');
                const productNames = Array.from(productItems).map(item => item.textContent.trim());

                // 左右のカラムに表示されている文字列と比較
                const columns = document.querySelectorAll('#left-column, #right-column');
                columns.forEach(column => {
                    const textElements = column.querySelectorAll('*');
                    textElements.forEach(element => {
                        if (productNames.includes(element.textContent.trim())) {
                            element.classList.add('highlight'); // 一致するテキストにクラスを追加
                        }
                    });
                });
            });

            // ホバー解除時にテキスト色を元に戻す（mouseleave イベント）
            materialBtn.addEventListener('mouseleave', function() {
                resetTextColors(); // ホバー解除時に色をリセット
            });

            // テキスト色をリセットする関数
            function resetTextColors() {
                const columns = document.querySelectorAll('#left-column, #right-column');
                columns.forEach(column => {
                    const textElements = column.querySelectorAll('*');
                    textElements.forEach(element => {
                        element.classList.remove('highlight'); // クラスを削除して元のスタイルに戻す
                    });
                });
            }
            // ここまで



            // キーワードによるフィルタリング関数
            function filterProducts(keyword) {
                clearActiveLists(); // 他のリストを非表示
                allProducts.classList.add('active'); // 全商品を表示状態に
                const items = allProducts.querySelectorAll('li');
                items.forEach(function(item) {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(keyword)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // 商品リストを表示する関数
            function showProducts(list) {
                clearActiveLists(); // 全リストを非表示
                list.classList.add('active'); // 指定されたリストを表示
            }

            // 他のリストを非表示にする関数
            function clearActiveLists() {
                allProducts.classList.remove('active');
                materialProducts.classList.remove('active');
                purposeProducts.classList.remove('active');
            }

            // キーワード検索のリセット
            function resetSearch() {
                searchInput.value = ''; // 入力欄をクリア
                const items = allProducts.querySelectorAll('li');
                items.forEach(function(item) {
                    item.style.display = 'block'; // 全アイテムを表示
                });
            }
        });
        // 高さの処理
        document.addEventListener('DOMContentLoaded', () => {
            const categories = document.querySelectorAll('#all-products .category');
            const leftColumn = document.getElementById('left-column');
            const rightColumn = document.getElementById('right-column');

            // 各カテゴリの高さを取得し、配列に格納
            const heights = Array.from(categories).map(category => category.scrollHeight);
            const totalHeight = heights.reduce((sum, height) => sum + height, 0);
            const halfHeight = totalHeight / 2;

            let currentLeftHeight = 0;
            let currentRightHeight = 0;

            // 各カテゴリを順番に左右に振り分ける
            categories.forEach((category, index) => {
                const categoryHeight = heights[index];

                if (currentLeftHeight + categoryHeight <= halfHeight) {
                    leftColumn.appendChild(category.cloneNode(true));
                    currentLeftHeight += categoryHeight;
                } else {
                    rightColumn.appendChild(category.cloneNode(true));
                    currentRightHeight += categoryHeight;
                }
            });

            console.log('左カラムの合計高さ: ' + currentLeftHeight + 'px');
            console.log('右カラムの合計高さ: ' + currentRightHeight + 'px');
        });
    </script>
    </body>

    </html>