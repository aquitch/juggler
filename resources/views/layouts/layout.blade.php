<html>
<head>
    <title>@yield('title')</title>
</head>
<!-- Bootstrap 5.0 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    body{
        background-color:#1a1a1d;
    }
    input{
        background-color:#32323b;
        color:#feae4e;
        border:none;
        border-bottom: 2px solid rgb(0, 140, 255);
    }
    input:focus{
        border:#32323b;
    }
    .self-center{
        margin:auto;
        text-align: center;
    }
    
</style>
<body>
    @include('includes.header')
    @yield('content')
</body>
</html>