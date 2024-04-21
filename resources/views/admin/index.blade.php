<!DOCTYPE html>
<html lang="en">
@include('admin/layout/head')
<body>
@include('admin/layout/navbar')
@include('admin/layout/slidebar')
{{-- @include('admin/layout/main') --}}
@yield('content')
@include('admin/layout/footer')
    
</body>
</html>