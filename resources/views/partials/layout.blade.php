<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles/css/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Fastlane Cinema</title>
</head>
<body>

    @yield('content')

     <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('styles/css/js/bootstrap.min.js')}}"></script>
    @stack('scripts')
   
</body>
</html>