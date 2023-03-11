<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">ホーム</a></li>
                    <li><a href="{{ route('products.index') }}">商品一覧</a></li>
                    <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy;2023 ECサイト All rights reserved.</p>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
