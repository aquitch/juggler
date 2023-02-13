<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Bootstrap 5.0 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Own style -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<body>
<div class="container-fluid">
            @include('includes.header')       
    <div class="row">
        <div class="col">
            @yield('col-right')
        </div>
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col">
            @yield('col-left')
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
</html>