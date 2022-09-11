<html>
<head>
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css" class="href">
</head>
<body>
@yield('content')

@if(Request::is('/'))
    @include('inc.hero')
@endif

@include('inc.aside')
</body>
</html>
