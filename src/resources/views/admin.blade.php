<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@400;700&family=Inika:wght@400;700&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                FashionablyLate
            </a>
        </div>
        @if (Auth::check())
        <div class="header__button">
            <button href="/" class="header__button-logout">
                logout
            </button>
        </div>
        @endif
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Admin</h2>
            </div>
            
        </div>
    </main>
</body>
</html>