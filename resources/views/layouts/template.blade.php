<!DOCTYPE html>
<html lang="ja">
    <head>
        @yield('head')
    </head>
    <body>
        @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
        @endif
        <main>
            <h1>勤怠管理システム</h1>
            @yield('content')
        </main>
    </body>
</html>
