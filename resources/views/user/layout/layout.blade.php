<!DOCTYPE html>
<html lang="en">
@include('user.partial._head')
<body>
<!-- Navigation -->
@include('user.partial._nav')
<!-- Page Header -->
@include('user.partial._header')
<!-- Main Content -->
<div class="container">
    <div class="row">
       @yield('content')
    </div>
</div>
<hr>
<!-- Footer -->
@include('user.partial._footer')
<!-- Bootstrap core JavaScript -->
@include('user.partial._script')
</body>
</html>