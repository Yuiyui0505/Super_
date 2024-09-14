<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お買い物メモ</title>
    </head>
    <body>
        <h1>既存の商品</h1>
        <from action="/posts" method="POST">
            @csrf
            <div class='product'>
                <h2>商品名</h2>
                <select name="note[product_id]">
                    @foreach($products as $product)
                        <option value="{{ $product->id}}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class='supermarket'>
                <h4>スーパー</h4>
                <select name="note[supermarket_id]">
                    @foreach($supermarkets as $supermarket)
                        <option value="{{ $supermarket->id }}">{{ $supermarket->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class='price'>
                <h3>値段</h3>
                <input type="number" min="0" name="price" placeholder="00000"/>
            </div>
            
        </form>
        <div class=''></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
