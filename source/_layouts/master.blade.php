<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->siteDescription }}">
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />
    <meta property="og:image" content="{{ $page->cover ? $page->cover : '/assets/images/lucky-meta.png' }}" />

    @stack('meta')
    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

    @stack('styles')
</head>

<body class="font-sans antialiased flex flex-col">
    <div id="app">
        {{-- Menu --}}
        @include('_partials.menu')

        {{-- Content --}}
        @yield('body')
    </div>

    @include('_partials.footer')
</body>

</html>
