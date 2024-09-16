<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Notes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1 class='product'>
            <a href="/products/{{ $note->product->id }}">{{ $note->product->name }}</a>
        </h1>
        <h2 class='supermarket'>
            <a href="/supermarkets/{{ $note->supermarket->id }}">{{ $note->supermarket->name }}</a>
        </h2>
        <h3 class='price'>
            {{ $note->price }}円
        </h3>
        <h4 class='image'>
            {{ $note->product->image_url }}
        </h4>
        <h5 class='category'>
            カテゴリー:<a href="/products/{{ $note->product->id }}">{{ $note->product->category->name}}</a>
        </h5>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
