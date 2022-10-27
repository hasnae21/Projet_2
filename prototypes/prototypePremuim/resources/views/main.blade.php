<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title> @yield('title') </title>

</head>
<body>
 

@yield('content')   


<footer style="margin-top:50%; text-align:center;">
<hr>
<p> Programmer par <b> AHOUZI Hasnae </p>
</footer>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/search_ajax.js')}}"></script>

</body>
</html>
