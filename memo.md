## ホバーから外れたらすぐに結果表示がどこかに行ってしまう仕様（今回はこれではないがコード保持）

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

＊＊＊＊＊html はこちら

<div>
                    <!-- 検索用の入力フィールド -->
                    <input type="text" id="search-input" style="border: 1px solid #232323; width: 400px;" placeholder="キーワードを入力して検索">
                    <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button>
                </div>
            </div>
            <div>
                <ul style="display: flex; flex-direction: row; width: 80%; align-content: center; justify-content: center; gap: 20px; margin: 0 auto;">
                    <li><button class="btn btn-outline-success" type="button" id="btn-all"><i class="fas fa-search"></i> 一覧で検索</button></li>
                    <li><button class="btn btn-outline-success" type="button" id="btn-material"><i class="fas fa-search"></i> 処理材料で検索</button></li>
                    <li><button class="btn btn-outline-success" type="button" id="btn-purpose"><i class="fas fa-search"></i>用途で検索</button></li>
                </ul>
            </div>
            <!-- 商品リスト -->
            <div id="product-display">
                <!-- 初期状態で全ての商品を表示 -->
                <ul id="all-products" class="product-list active">
                    <li>商品001</li>
                    <li>商品002</li>
                    <li>商品003</li>
                    <li>商品004</li>
                    <li>商品005</li>
                    <li>商品006</li>
                    <li>商品007</li>
                    <li>商品008</li>
                    <li>商品009</li>
                    <li>商品010</li>
                    <li>商品011</li>
                    <li style="background-color: aquamarine;">商品012処理</li>
                    <li>商品013</li>
                    <li>商品014</li>
                    <li style="background-color: aquamarine;">商品015処理</li>
                    <li>商品016</li>
                    <li>商品017</li>
                    <li>商品018</li>
                    <li>商品019</li>
                    <li style="background-color: rgb(234, 255, 127);">商品020用途</li>
                    <li style="background-color: rgb(234, 255, 127);">商品021用途</li>
                    <li>商品022</li>
                    <li style="background-color: rgb(234, 255, 127);">商品023用途</li>
                </ul>
        
                <!-- 処理材料リスト -->
                <ul id="material-products" class="product-list">
                    <li style="background-color: aquamarine;">商品012処理</li>
                    <li style="background-color: aquamarine;">商品015処理</li>
                </ul>
        
                <!-- 用途リスト -->
                <ul id="purpose-products" class="product-list">
                    <li style="background-color: rgb(234, 255, 127);">商品020用途</li>
                    <li style="background-color: rgb(234, 255, 127);">商品021用途</li>
                    <li style="background-color: rgb(234, 255, 127);">商品023用途</li>
                </ul>
            </div>

## ホバーを外した時にデフォルト一覧表示させるコード（（今回使用しない）

// ホバーを外したときに、デフォルトの全リストに戻す
// const searchButtons = [allBtn, materialBtn, purposeBtn];
// searchButtons.forEach(function(btn) {
// btn.addEventListener('mouseleave', function() {
// showProducts(allProducts);
// });
// });

## li タグがフォーカスされた時にエンターを可能にする挙動(今回使用しない)

// 選択された list でキーボードエンター遷移を可能にする
document.addEventListener('DOMContentLoaded', function() {
const listItems = document.querySelectorAll('#material-products li');
listItems.forEach(function(item) {
item.setAttribute('tabindex', '0');

                // キーダウンイベントを追加
                item.addEventListener('keydown', function(event) {
                    // エンターキー（Enter）のキーコードは13
                    if (event.key === 'Enter') {
                        const link = item.querySelector('a'); // <li>内の<a>を取得
                        if (link) {
                            window.location.href = link.href; // リンク先に移動
                        }
                    }
                });
            });
        });

## 今回使用しないコードを一旦保留しておくタクそのミー表示方法も一部変更あり

