<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お買い物メモ</title>
    </head>
    <body>
        <h1>新規登録</h1>
        <form action="/notes" method="POST">
            @csrf
            <div class='product'>
                <h1>商品名</h1>
                <input type="text" name="product_name" placeholder="例:おいしい牛乳"/>
            </div>
            <div class='category'>
                <h2>カテゴリー名</h2>
                <input type="text" name="category_name" placeholder="例:牛乳"/>
            </div>
            <div class='supermarket'>
                <h3>店名</h3>
                <input type="text" name="supermarket_name" placeholder="○○スーパー"/>
            </div>
            <div class='price'>
                <h4>値段</h4>
                <input type="number" min="0" name="note[price]" placeholder="00000"/>
            </div>
            <input type="submit" value="決定"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
