<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>お買い物メモ</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class='notes'>
            @foreach($notes as $note)
            <h1>カテゴリー:{{ $note->product->category->name }}</h1>
                <div class='note'>
                    <h2 class='product'>
                        <a href="/notes/{{ $note->id }}">{{ $note->product->name }}</a>
                    </h2>
            @endforeach
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
        <div class='paginate'>
            {{ $notes->links() }}
        </div>
    </body>
</html>
