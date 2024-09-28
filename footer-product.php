</main>

<footer style="height: 400px; background-color: bisque;">
    <section class="footer-first" style="background-color: aquamarine; height: 300px;">
        <h2>Footer First Section</h2>
    </section>
    <section class="footer-second" style="background-color: rgb(255, 249, 127); height: 120px;">
        <h2>Footer Second Section</h2>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
    searchInput.addEventListener('input', function () {
        const keyword = searchInput.value.toLowerCase();
        filterProducts(keyword);
    });

    // 各ボタンにホバーイベントを追加
    allBtn.addEventListener('mouseenter', function () {
        resetSearch(); // キーワード検索をリセット
        showProducts(allProducts); // 一覧を表示
    });

    materialBtn.addEventListener('mouseenter', function () {
        resetSearch(); // キーワード検索をリセット
        showProducts(materialProducts); // 処理材料のリストを表示
    });

    purposeBtn.addEventListener('mouseenter', function () {
        resetSearch(); // キーワード検索をリセット
        showProducts(purposeProducts); // 用途のリストを表示
    });

    // ホバーを外したときに、デフォルトの全リストに戻す
    const searchButtons = [allBtn, materialBtn, purposeBtn];
    searchButtons.forEach(function (btn) {
        btn.addEventListener('mouseleave', function () {
            // デフォルトのリスト（全商品）を表示
            showProducts(allProducts);
        });
    });

    // キーワードによるフィルタリング関数
    function filterProducts(keyword) {
        clearActiveLists(); // 他のリストを非表示
        allProducts.classList.add('active'); // 全商品を表示状態に
        const items = allProducts.querySelectorAll('li');
        items.forEach(function (item) {
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
        items.forEach(function (item) {
            item.style.display = 'block'; // 全アイテムを表示
        });
    }
});
    </script>
    
</footer>
<?php wp_footer(); ?>
</body>

</html>