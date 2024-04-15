@include('client/layout/head')

<body>
@include('client/layout/header')
@section('slider')
@include('client/layout/slider')
    
@show
@yield('content')
@include('client/layout/footer')
</body>
</html>