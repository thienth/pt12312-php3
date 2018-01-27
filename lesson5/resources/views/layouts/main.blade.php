<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @include('_share.client.inject-css')
    
</head>
<body>
    <header id="header" class="">
        Main layout header
    </header><!-- /header -->
    <main>
        @yield('content')
        <aside>
            
        </aside>
    </main>
    <footer>
        
    </footer>
    @include('_share.client.inject-js')
</body>
</html>