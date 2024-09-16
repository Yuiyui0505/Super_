<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>お買い物メモ</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1>メモ</h1>
        <div class='notes'>
            <a href='/Notes/create'>値段登録</a>
            @foreach($notes as $note)
                <div class='note'>
                    <h2 class='product'>
                        <a href="/notes/{{ $note->id }}">{{ $note->product->name }}</a>
                    </h2>
                    <h3 class='supermarket'>
                        <a href="/supermarkets/{{ $note->supermarket->id }}">{{ $note->supermarket->name }}</a>
                    </h3>
                    <h4 class='price'>{{ $note->price }}円</h4>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $notes->links() }}
        </div>
    </body>
</html>
