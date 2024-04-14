@include('client/layout/head')

<body>
@include('client/layout/header')
@include('client/layout/slider')

@yield('content')
@include('client/layout/footer')
</body>
</html>